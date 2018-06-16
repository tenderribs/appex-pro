 <?php 
    //include the database connection
    require_once(__DIR__.'/config/config.php');

    //include the homepage in order to display multi language content
    require_once(__DIR__.'/pages/home.php');

    //same for features
    require_once(__DIR__.'/pages/features.php');

    //include the login and registration authentication system
    require_once(__DIR__.'/controllers/authController.php');

    //include the storeBlogPost method
    require_once(__DIR__.'/controllers/blogController.php');

 ?>
