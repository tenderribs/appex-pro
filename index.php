<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <?php
            //include metadata such as favicon and window size
            require_once('metaData.php');
        ?>
    </head>
    <body>
    <?php     
            //navbar
            require_once('header.php');
          
        ?>   
        <section class="section">
        <?php
            //all funcs
            require_once('func.php');
            require_once('router.php');
            //get page name, language or action from the URL
            $page = isset($_GET["page"]) ? $_GET["page"] : null;
            $lang = isset($_GET["la"]) ? $_GET["la"] : 'en';
            $action = isset($_GET["action"]) ? $_GET["action"] : null;
            //pass the gathered information to route.php
            route($pdo,$page,$lang,$action);
        ?>

        </section>
      <?php require_once('footer.php');   ?>
    </body>
</html>