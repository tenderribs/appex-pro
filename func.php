 <?php 
    //include the database connection
    require_once('config/config.php');

    //include the homepage in order to display multi language content
    require_once('pages/home.php');

    //same for features
    require_once('pages/features.php');

    //include the login and registration authentication system
    require_once('controllers/authController.php');

    //include the storeBlogPost method
    require_once('controllers/blogController.php');

 ?>
