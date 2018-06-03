<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <?php
            require_once('metaData.php');
        ?>
    </head>
    <body>
    <?php     //navbar
            require_once('header.php');
          
        ?>   
        <section class="section">
        <?php
            //all funcs
            require_once('func.php');
            require_once('router.php');
            $page = isset($_GET["page"]) ? $_GET["page"] : null;
            $lang = isset($_GET["la"]) ? $_GET["la"] : 'en';
            $action = isset($_GET["action"]) ? $_GET["action"] : null;
            route($pdo,$page,$lang,$action);
        ?>

        </section>
      <?php require_once('footer.php');   ?>
    </body>
</html>