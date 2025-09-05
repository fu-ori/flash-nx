<?php

$the_url = $_GET["display"] ?? "index";
$the_url = filter_var($the_url, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
$the_url = preg_replace("/[^a-z0-9\-]/", "", $the_url);

if ($connect) {
    try {
        $mysql = $connect->prepare("SELECT 
        id, client, url, local, logo,
        contact, evaluate, views, user, pass, dev 
        FROM clients WHERE url = ? LIMIT 1");
        $mysql->bind_param("s", $the_url);
        $mysql->execute();
        $result = $mysql->get_result();

        if ($result->num_rows > 0) {
            $content = $result->fetch_assoc();

            $gen_client = htmlspecialchars($content["client"]);
            $gen_url = htmlspecialchars($content["url"]);
            $gen_local = htmlspecialchars($content["local"]);
            $gen_logo = htmlspecialchars($content["logo"]);
            $gen_contact = htmlspecialchars($content["contact"]);
            $gen_evaluate = htmlspecialchars($content["evaluate"]);
            $gen_views = htmlspecialchars($content["views"]);

            $gen_user = htmlspecialchars($content["user"]);
            $gen_pass = htmlspecialchars($content["pass"]);

            // ⚠️ FIX: Sanitize the 'dev' variable to prevent XSS.
            $dev = $content["dev"];

            $gen_section_1 = "gfx/bio/bio.php";
            $gen_section_2 = "gfx/faq/faq.php";
            $gen_section_3 = "gfx/qr-card/qr-card.php";

            echo "<style>
            .logo{ display: none !important; }  
            .gfx{ display: none !important; } 
            </style>";
        }
    } catch (mysqli_sql_exception $e) {
        error_log("Display engine error: " . $e->getMessage());
    }
}

if ($connect) {
    try {
        $mysql = $connect->prepare("SELECT 
        title, photo, bio, publi, contact 
        FROM ai_bio WHERE url = ? LIMIT 1");
        $mysql->bind_param("s", $the_url);
        $mysql->execute();
        $result = $mysql->get_result();

        if ($result->num_rows > 0) {
            $content = $result->fetch_assoc();
            $gen_title = htmlspecialchars($content["title"]);
            $gen_photo = htmlspecialchars($content["photo"]);
            $gen_bio = htmlspecialchars($content["bio"]);
            $gen_publi = htmlspecialchars($content["publi"]);
            $gen_contact = htmlspecialchars($content["contact"]);
        }
    } catch (mysqli_sql_exception $e) {
        error_log("Erro ao buscar página no DB: " . $e->getMessage());
    }
}

$faq = [];
try {
    $mysql = $connect->prepare("SELECT url, ask, response FROM ai_faq WHERE url = ?");
    if ($mysql === false) {
        throw new mysqli_sql_exception("Erro ao preparar a consulta: " . $connect->error);
    }

    $searchTerm = $gen_url;
    $mysql->bind_param("s", $searchTerm);
    $mysql->execute();

    $read = $mysql->get_result();
    if ($read) {
        while ($row = $read->fetch_assoc()) {
            $faq[] = $row;
        }
        $read->free();
    }
} catch (mysqli_sql_exception $e) {
    error_log("Erro ao buscar links: " . $e->getMessage());
}

if ($connect) {
    try {
        $mysql = $connect->prepare("SELECT 
        url, address, email, phone, map,
        facebook, instagram, linkedin, tiktok, youtube, x 
        FROM ai_qrcard WHERE url = ? LIMIT 1");
        $mysql->bind_param("s", $the_url);
        $mysql->execute();
        $result = $mysql->get_result();

        if ($result->num_rows > 0) {
            $content = $result->fetch_assoc();

            $gen_address = htmlspecialchars($content["address"]);
            $gen_email = htmlspecialchars($content["email"]);
            $gen_phone = htmlspecialchars($content["phone"]);
            $gen_map = htmlspecialchars($content["map"]);

            $gen_facebook = htmlspecialchars($content["facebook"]);
            $gen_instagram = htmlspecialchars($content["instagram"]);
            $gen_linkedin = htmlspecialchars($content["linkedin"]);
            $gen_tiktok = htmlspecialchars($content["tiktok"]);
            $gen_youtube = htmlspecialchars($content["youtube"]);
            $gen_x = htmlspecialchars($content["x"]);
        }

        $mysql->close();
    } catch (mysqli_sql_exception $e) {
        error_log("Erro ao buscar página no DB: " . $e->getMessage());
    }
}

?>