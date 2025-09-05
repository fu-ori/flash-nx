<!DOCTYPE html>
<html lang="pt-br">
    <?php

    include "engine.php";
    include "engine-mysql.php";

    $viewName = isset($_GET['stage']) ? $_GET['stage'] : "flash";
    $content = "Conteúdo não encontrado.";

    try {
        $mysql = $connect->prepare("SELECT content FROM views WHERE view = ?");
        if ($mysql === false) {
            throw new mysqli_sql_exception("Erro ao preparar a consulta: " . $connect->error);
        }

        $mysql->bind_param("s", $viewName);
        $mysql->execute();
        $result = $mysql->get_result();
        if ($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $content = $row['content'];
        }

    } catch (mysqli_sql_exception $e) {
        error_log("Erro ao buscar conteúdo: " . $e->getMessage());
        $content = "<p style='color: red;'>Erro ao carregar o conteúdo.</p>";
    }
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
            main{ padding: 20px; }
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
            <a href="index">
                <div class="logo">
                    <div class="logo-container"></div>
                </div>
            </a>

            <?php

            include "gfx/nav-box/nav-box.php"; 

            ?>
        </header>

        <main>
            <?php 

            echo $content;

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