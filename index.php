<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <?php
            //include metadata such as favicon and window size
            require_once(__DIR__.'/metadata.php');
        ?>
    </head>
    <body>
        <section class="hero is-fullheight">
        <!-- Hero head: will stick at the top -->
        <div class="hero-head">
            <?php     
                //navbar
                require_once(__DIR__.'/header.php');
            ?>   
            </div>
            <!-- Hero content: will be in the middle -->
            <div class="hero-body">
            <?php
                //all funcs
                require_once(__DIR__.'/func.php');
                require_once(__DIR__.'/router.php');
                //get page name, language or action from the URL
                $page = isset($_GET["page"]) ? $_GET["page"] : null;
                $lang = isset($_GET["la"]) ? $_GET["la"] : 'en';
                $action = isset($_GET["action"]) ? $_GET["action"] : null;
                //pass the gathered information to route.php
                route($pdo,$page,$lang,$action);
            ?>
            </div>
            <!-- Hero footer: will stick at the bottom -->
            <div class="hero-foot">
                <?php require_once(__DIR__.'/footer.php');   ?>
            </div>
        </section>
    </body>
</html>