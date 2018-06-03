<!DOCTYPE html>
<html>
    <head>
 <?php require_once('metaData.php');   ?>
    </head>
    <body>
      <?php
            //navbar
          require_once('kopfzeile.php');
          $page = isset($_GET["page"])?$_GET["page"]:'';
            //page content
          if ($page == '') {
            require_once('pages/zuhause.html');
          }
           else if ($page == 'funktionen') {
            require_once('pages/funktionen.html');
          }
           else if ($page == 'deBlog') {
            require_once('pages/deBlog.html');
          }
      ?>      
      <?php require_once('footer.php');   ?>
    </body>
</html>