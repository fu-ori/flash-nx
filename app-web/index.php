<!DOCTYPE html>
<html lang="pt-br">
    <?php 

    include "engine.php";
    include "engine-mysql.php";
    include "engine-display.php"; 

    ?>

    <head>
        <?php include "engine-head.php"; ?>

        <!-- //////////////////////////////////////////////////////////////// -->
        <!-- //////////////////////////////////////////////////////////////// -->        
        <link rel="stylesheet" href="gfx/bio/bio.css?v0.1">
        <link rel="stylesheet" href="gfx/faq/faq.css?v0.1">
        <link rel="stylesheet" href="gfx/qr-card/qr-card.css?v0.1">
        <link rel="stylesheet" href="gfx/glightbox/glightbox.min.css?v0.1">
        <link rel="stylesheet" href="gfx/nav-box/nav-box.css?v0.1">
        <link rel="stylesheet" href="gfx/logo/logo.css?v0.1">
        <style type="text/css">
            .logo{ right: 0 !important; }
            .logo-container{ background-image: url(<?php echo $gen_logo; ?>); }
        </style>

        <!-- //////////////////////////////////////////////////////////////// -->
        <!-- //////////////////////////////////////////////////////////////// -->
        <title><?php echo $project; ?> - <?php echo $gen_title; ?> </title>
        <link rel="canonical" href="https://www.spray.sampa.br/<?php echo $gen_url; ?>" />
        <meta name="description" content="<?php echo $gen_bio; ?>" />
        <meta name="author" content="<?php echo $gen_url; ?>" />

        <meta name="referrer" content="no-referrer-when-downgrade" />
        <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />

        <meta property="og:site_name" content="<?php echo $gen_url; ?>">
        <meta property="og:title" content="<?php echo $gen_title; ?>">
        <meta property="og:description" content="<?php echo $gen_bio; ?>">
        <meta property="og:image" content="<?php echo $gen_avatar; ?>">
        <meta property="og:url" content="https://www.spray.sampa.br/<?php echo $gen_url; ?>">
        <meta property="og:type" content="website">

        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="<?php echo $gen_x; ?>">
        <meta name="twitter:title" content="<?php echo $gen_title; ?>">
        <meta name="twitter:description" content="<?php echo $gen_bio; ?>">
        <meta name="twitter:image" content="<?php echo $gen_avatar; ?>">
        <meta name="twitter:image:alt" content="<?php echo $gen_title; ?>">

        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "WebPage",
            "name": "<?php echo $gen_title; ?>",
            "description": "<?php echo $gen_bio; ?>"
        }
        </script>
    </head>

    <body>
        <script src="gfx/gsap/gsap.min.js"></script>
        <script src="gfx/gsap/scroll-trigger.min.js"></script>
        <script src="gfx/qr-code/qrcode.min.js"></script>
        <script src="gfx/glightbox/glightbox.min.js"></script>

        <!-- //////////////////////////////////////////////////////////////// -->
        <!-- //////////////////////////////////////////////////////////////// -->
        <header id="header">
            <div class="logo">
                <div class="logo-container"></div>
            </div>

            <?php

            include "gfx/nav-box/nav-box.php"; 

            ?>
        </header>

        <main>
            <?php 

            include "gfx/hello-world/hello-world.php";
            include $gen_section_1;
            include $gen_section_2;
            include $gen_section_3;

            ?>
        </main>

        <footer>
            <?php

            include "scripts.php";
            include "gfx/footer-default/footer-default.php";      

            ?>
        </footer>
    </body>
</html>