 <?php 
    require_once('func.php');

    function route($page,$lang,$action) {
        if ($page == '') {
            displayHomePage($lang);
        }
          else if ($page == 'features') {
            displayFeaturesPage($lang);
        } else {
            echo 'bla bla 404';
        }
        // else if ($page == 'system') {
        //     require_once('pages/system.html');

        // } else if ($page == 'blog') {
        //     require_once('pages/blog.html');
        // }
        // else if ($page == 'login') {
        //     require_once('pages/login.html');
        // }
        // else if ($page == 'register') {
        //     require_once('pages/register.html');
        // }
        // else if ($page == 'welcome') {
        //     require_once('pages/welcome.php');
        // }
    }
 ?>
