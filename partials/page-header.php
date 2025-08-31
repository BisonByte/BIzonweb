<div class="breadcrumb-wrapper bg-cover" style="background-image: url('<?php echo $img; ?>');">
    <div class="left-shape">
        <img src="<?php echo $img_2; ?>" alt="img">
    </div>
    <div class="right-shape">
        <img src="<?php echo $img_3; ?>" alt="img">
    </div>
    <div class="container">
        <div class="page-heading">
            <div class="breadcrumb-sub-title">
            <?php if (!empty($mainTitle)) : ?>
                <h1 class="wow fadeInUp" data-wow-delay=".3s"><?php echo $mainTitle;?></h1>
            <?php endif; ?>
            </div>
            <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                <?php if (!empty($Title)) : ?>
                <li>
                    <a href="index.php"><?php echo $Title;?> :</a>
                </li>
                <?php endif; ?>
                <li>
                    <i class="fa-regular fa-chevrons-right"></i>
                </li>
                <?php if (!empty($Title2)) : ?>
                <li>
                    <?php echo $Title2;?>
                </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</div>
