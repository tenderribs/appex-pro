<!DOCTYPE html>
<html>
    <head>
 <?php require_once('metaData.php');   ?>
    </head>
    <body>
      <?php
            //navbar
          require_once('header.php');
          $page = isset($_GET["page"])?$_GET["page"]:'';
            //page content
          if ($page == '') {
            require_once('pages/home.html');
          }
           else if ($page == 'features') {
            require_once('pages/features.html');
          }
           else if ($page == 'blog') {
            require_once('pages/blog.html');
          }
      ?>
      <?php require_once('footer.php');   ?>
    </body>
</html>