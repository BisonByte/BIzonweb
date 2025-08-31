<?php
session_start();
$csrf_token = bin2hex(random_bytes(32));
$_SESSION['csrf_token'] = $csrf_token;
?>
<!DOCTYPE html>
<html lang="en">
    <!--<< Header Area >>-->
    <?php $title='Digtek - Digital Marketing Agency PHP Template'?>
    <?php include './partials/head.php'?>
    <body >


          <!-- Preloader Start -->
        <?php include './partials/preloader.php'?>


        <!-- Back To Top Start -->
        <?php include './partials/scroll-up.php'?>

        <!--<< Mouse Cursor Start >>-->  
        <?php include './partials/mouse-cursor.php'?>

        <!-- Offcanvas Area Start -->
        <?php include './partials/sidebar.php'?>

        <!-- Search Area Start -->
        <?php include './partials/search.php'?> 

        <!-- Header Section Start -->
        <header id="header-sticky" class="header-1 style-2">
            <div class="container-fluid">
                <div class="mega-menu-wrapper">
                    <div class="header-main">
                        <div class="logo">
                            <a href="index.php" class="header-logo-3">
                                <img src="assets/img/logo/black-logo.svg" alt="logo-img">
                            </a>
                        </div>
                        <div class="mean__menu-wrapper">
                            <div class="main-menu">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li class="has-dropdown active menu-thumb">
                                            <a href="index.php">
                                                Home 
                                                <i class="fa-solid fa-chevron-down"></i>
                                            </a>
                                            <ul class="submenu has-homemenu">
                                                <li>
                                                    <div class="homemenu-items">
                                                        <div class="homemenu">
                                                            <div class="homemenu-thumb">
                                                                <img src="assets/img/header/home-1.jpg" alt="img">
                                                                <div class="demo-button">
                                                                    <a href="index.php" class="theme-btn">
                                                                        Multi Page
                                                                    </a>
                                                                    <a href="index-one-page.php" class="theme-btn">
                                                                        One Page
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="homemenu-content text-center">
                                                                <h4 class="homemenu-title">
                                                                    Home 01
                                                                </h4>
                                                            </div>
                                                        </div>
                                                        <div class="homemenu">
                                                            <div class="homemenu-thumb mb-15">
                                                                <img src="assets/img/header/home-2.jpg" alt="img">
                                                                <div class="demo-button">
                                                                    <a href="index-2.php" class="theme-btn">
                                                                        Multi Page
                                                                    </a>
                                                                    <a href="index-two-page.php" class="theme-btn">
                                                                        One Page
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="homemenu-content text-center">
                                                                <h4 class="homemenu-title">
                                                                    Home 02
                                                                </h4>
                                                            </div>
                                                        </div>
                                                        <div class="homemenu">
                                                            <div class="homemenu-thumb mb-15">
                                                                <img src="assets/img/header/home-3.jpg" alt="img">
                                                                <div class="demo-button">
                                                                    <a href="index-3.php" class="theme-btn">
                                                                        Multi Page
                                                                    </a>
                                                                    <a href="index-three-page.php" class="theme-btn">
                                                                        One Page
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="homemenu-content text-center">
                                                                <h4 class="homemenu-title">
                                                                    Home 03
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="has-dropdown active d-xl-none">
                                            <a href="team.php" class="border-none">
                                            Home
                                            </a>
                                            <ul class="submenu">
                                                <li><a href="index.php">Home 01</a></li>
                                                <li><a href="index-2.php">Home 02</a></li>
                                                <li><a href="index-3.php">Home 03</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-dropdown">
                                            <a href="news.php">
                                                Pages
                                                <i class="fa-solid fa-chevron-down"></i>
                                            </a>
                                            <ul class="submenu">
                                                <li><a href="about.php">About Us</a></li>
                                                <li><a href="team.php">Team</a></li>
                                                <li><a href="team-details.php">Team Details</a></li>
                                                <li><a href="pricing.php">Our Pricing</a></li>
                                                <li><a href="faq.php">Our Faq</a></li>
                                                <li><a href="404.php">404 Page</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="service-details.php">
                                                Services
                                                <i class="fa-solid fa-chevron-down"></i>
                                            </a>
                                            <ul class="submenu">
                                                <li><a href="service.php">Service Page</a></li>
                                                <li><a href="service-details.php">Service Details</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="project-details.php">
                                                Projects
                                                <i class="fa-solid fa-chevron-down"></i>
                                            </a>
                                            <ul class="submenu">
                                                <li><a href="project.php">Projects</a></li>
                                                <li><a href="project-details.php">Project Details</a></li>
                                            </ul>
                                        </li>
                                       <li>
                                            <a href="news-details.php">
                                                Blog
                                                <i class="fa-solid fa-chevron-down"></i>
                                            </a>
                                            <ul class="submenu">
                                                <li><a href="news-grid.php">Blog Grid</a></li>
                                                <li><a href="news.php">Blog Standard</a></li>
                                                <li><a href="news-details.php">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="contact.php">Contact Us</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="header-right d-flex justify-content-end align-items-center">
                            <div class="main-button">
                                <a href="contact.php"> <span class="theme-btn"> Get Started </span><span class="arrow-btn"><i class="fa-regular fa-arrow-up-right"></i></span></a>
                            </div>
                            <div class="header__hamburger d-xl-none my-auto">
                                <div class="sidebar__toggle">
                                    <i class="fas fa-bars"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Breadcrumb Section Start -->
        <?php 
            $img='assets/img/breadcrumb.jpg';
            $img_2='assets/img/breadcrumb-shape.png';
            $img_3='assets/img/breadcrumb-shape-2.png';
            $mainTitle='Contact Us';
            $Title='Home';
            $Title2 = 'Contact Us';
        ?>
        <?php include './partials/page-header.php'?>

        <!-- Contact Info Section Start -->
        <section class="contact-info-section fix section-padding">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="contact-info-items text-center active">
                            <div class="icon">
                               <i class="icon-09"></i>
                            </div>
                            <div class="content">
                                <h3>Our Address</h3>
                                <p>
                                    2464 Royal Ln. Mesa, New Jersey <br> 45463.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="contact-info-items text-center">
                            <div class="icon">
                                <i class="icon-10"></i>
                            </div>
                            <div class="content">
                                <h3><a href="mailto:info@example.com">info@example.com</a></h3>
                                <p>
                                    Email us anytime for anykind <br>
                                    ofquety.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="contact-info-items text-center">
                            <div class="icon">
                                <i class="icon-11"></i>
                            </div>
                            <div class="content">
                                <h3>Hot:<a href="tel:+2086660112">+208-666-0112</a></h3>
                                <p>
                                    Call us any kind suppor,we <br>
                                    will wait for it.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section Start -->
        <section class="contact-section-33 fix section-padding pt-0">
            <div class="container">
                <div class="contact-wrapper-2">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-6">
                            <div class="map-items">
                                <div class="googpemap">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6678.7619084840835!2d144.9618311901502!3d-37.81450084255415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642b4758afc1d%3A0x3119cc820fdfc62e!2sEnvato!5e0!3m2!1sen!2sbd!4v1641984054261!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-content">
                                <h2>Ready to Get Started?</h2>
                                <p>
                                    Nullam varius, erat quis iaculis dictum, eros urna varius eros, ut blandit felis odio in turpis. Quisque rhoncus, eros in auctor ultrices,
                                </p>
                                <form id="contact-form" action="mailer.php" method="POST" class="contact-form-items">
                                    <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($csrf_token); ?>">
                                    <div class="row g-4">
                                        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                                            <div class="form-clt">
                                                <span>Your name*</span>
                                                <input type="text" name="name" id="name" placeholder="Your Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                                            <div class="form-clt">
                                                <span>Your Email*</span>
                                                <input type="text" name="email" id="email" placeholder="Your Email">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 wow fadeInUp" data-wow-delay=".7s">
                                            <div class="form-clt">
                                                <span>Write Message*</span>
                                                <textarea name="message" id="message" placeholder="Write Message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-7 wow fadeInUp" data-wow-delay=".9s">
                                            <button type="submit" class="theme-btn">
                                                Send Message <i class="fa-solid fa-arrow-right-long"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <div id="form-messages"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Cta Section Start -->
        <section class="cta-section section-padding pb-0">
            <div class="rokect-shape float-bob-y">
                <img src="assets/img/rokect.png" alt="img">
            </div>
            <div class="container">
                <div class="cta-wrapper bg-cover" style="background-image: url('assets/img/cta-bg.jpg');">
                    <div class="cta-img wow img-custom-anim-left" data-wow-duration="1.5s" data-wow-delay="0.3s">
                        <img src="assets/img/cta-img.png" alt="img">
                    </div>
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">
                        Stay Connected With <br> Cutting Edge IT
                    </h2>
                    <div class="main-button wow fadeInUp" data-wow-delay=".5s">
                        <a href="contact.php"> <span class="theme-btn"> talk TO  A SPECIALIST </span><span class="arrow-btn"><i class="fa-regular fa-arrow-up-right"></i></span></a>
                    </div>
                </div>
            </div>
        </section>

        
         <!-- Footer Section Start -->
         <?php include './partials/footer.php'?>

        <!-- all js files -->
        <?php include './partials/script.php'?>   
    </body>
</html>