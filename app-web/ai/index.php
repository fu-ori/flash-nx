<!DOCTYPE html>
<html lang="pt-br">
    <?php include "../engine-mysql.php"; ?>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- //////////////////////////////////////////////////////////////// -->
        <!-- //////////////////////////////////////////////////////////////// -->
        <link rel="stylesheet" href="../gfx/style/reset.css">
        <link rel="stylesheet" href="ai.css">
        <link href="../gfx/summernote/summernote-0.9.0-lite.min.css" rel="stylesheet">

        <!-- //////////////////////////////////////////////////////////////// -->
        <!-- //////////////////////////////////////////////////////////////// -->
        <title>アキラAI</title>
        <meta name="referrer" content="no-referrer-when-downgrade" />
        <meta name="robots" content="noindex, nofollow" />
    </head>

    <body>
        <script src="../gfx/jquery/jquery-3.5.1.min.js"></script>
        <script src="../gfx/summernote/summernote-0.9.0-lite.min.js"></script>
        <script src="../gfx/gsap/gsap.min.js"></script>
        <script src="../gfx/gsap/ScrollTrigger.min.js"></script>

        <!-- //////////////////////////////////////////////////////////////// -->
        <!-- //////////////////////////////////////////////////////////////// -->
        <?php

        $viewContent = [];
        $mysql = null;

        try {
            $mysql = $connect->prepare("SELECT view, content FROM views");
            if ($mysql === false) {
                throw new mysqli_sql_exception("Failed to prepare statement: " . $connect->error);
            }
            $mysql->execute();
            $content = $mysql->get_result();
            if ($content) {
                while ($view = $content->fetch_assoc()) {
                    $viewContent[] = $view;
                }
                $content->free();
            }
        } catch (mysqli_sql_exception $e) {
            error_log("Database error: " . $e->getMessage());
        } finally {
            if ($mysql !== null) {
                $mysql->close();
            }
        }

        ?>

        <header>
            <div class="select-wrapper">
                <select id="exemplo_select"> <?php foreach ($viewContent as $viewContent_view): ?>
                    <option value="<?php echo htmlspecialchars($viewContent_view["view"]); ?>">
                        <?php echo htmlspecialchars($viewContent_view["view"]); ?>
                    </option>
                    <?php endforeach; ?>
                </select>
            </div>
        </header>

        <main>
            <div id="content-container">
                <?php
                $first_item = true;
                foreach ($viewContent as $viewContent_view): ?>
                <div
                     class="content-item"
                     id="content-<?php echo htmlspecialchars($viewContent_view["view"]); ?>"
                     style="<?php echo $first_item ? "display: block;" : "display: none;"; ?>">

                    <div class="view-url">
                        <a target="_blank"
                           href="../flash?stage=<?php echo htmlspecialchars($viewContent_view["view"]); ?>">
                            view: <?php echo htmlspecialchars($viewContent_view["view"]); ?>
                        </a>
                    </div>

                    <form action="update.php" method="POST">
                        <input 
                               type="hidden" 
                               name="view_name" 
                               value="<?php echo htmlspecialchars($viewContent_view["view"]); ?>">

                        <textarea 
                                  class="summernote-editor" 
                                  name="editor_content"><?php echo $viewContent_view["content"]; ?></textarea>

                        <div class="form-feedback">
                            <span id="status-message"></span>
                        </div>

                        <div class="view-form-cta">
                            <input type="submit" class="btn" value="Salvar"/>
                        </div>
                    </form>
                </div>
                <?php $first_item = false; endforeach; ?>
            </div>

        </main>

        <footer>
            アキラAI
        </footer>

        <script type="text/javascript" src="update.js?0.1"></script>
    </body>
</html>