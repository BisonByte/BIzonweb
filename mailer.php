<?php
require __DIR__ . '/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load environment variables from .env file if present
if (file_exists(__DIR__ . '/.env')) {
    $env = parse_ini_file(__DIR__ . '/.env');
    if ($env !== false) {
        foreach ($env as $key => $value) {
            putenv("$key=$value");
            $_ENV[$key] = $value;
        }
    }
}

// Only process POST requests.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();
    if (!isset($_POST['csrf_token'], $_SESSION['csrf_token']) ||
        !hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])) {
        http_response_code(403);
        echo "Invalid CSRF token.";
        exit;
    }

    // Get the form fields and remove whitespace with additional sanitization.
    $name = filter_var(trim($_POST["name"] ?? ''), FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $name = str_replace(array("\r", "\n"), array(" ", " "), $name);
    $email = filter_var(trim($_POST["email"] ?? ''), FILTER_SANITIZE_EMAIL);
    $subject = filter_var(trim($_POST["subject"] ?? 'No Subject'), FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $message = filter_var(trim($_POST["message"] ?? ''), FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // Check that data was sent to the mailer.
    if (empty($name) || empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Set a 400 (bad request) response code and exit.
        http_response_code(400);
        echo "Oops! There was a problem with your submission. Please complete the form and try again.";
        exit;
    }

    // Set the recipient email address from environment variable.
    $recipient = getenv('MAIL_RECIPIENT');

    // Set the email subject.
    $email_subject = "New contact from $name";

    // Build the email content.
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Subject: $subject\n";
    $email_content .= "Message:\n$message\n";

    try {
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = getenv('SMTP_HOST');
        $mail->SMTPAuth = true;
        $mail->Username = getenv('SMTP_USERNAME');
        $mail->Password = getenv('SMTP_PASSWORD');
        $mail->SMTPSecure = getenv('SMTP_ENCRYPTION') ?: PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = getenv('SMTP_PORT') ?: 587;

        $fromAddress = getenv('SMTP_FROM') ?: $email;
        $mail->setFrom($fromAddress, $name);
        $mail->addReplyTo($email, $name);
        $mail->addAddress($recipient);

        $mail->Subject = $email_subject;
        $mail->Body = $email_content;
        $mail->isHTML(false);

        $mail->send();
        http_response_code(200);
        echo "Your message has been sent. Thank You!";
    } catch (Exception $e) {
        http_response_code(500);
        echo "Oops! Something went wrong and we couldn't send your message.";
    }
} else {
    http_response_code(403);
    echo "There was a problem with your submission, please try again.";
}
?>
