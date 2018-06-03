 <?php 
    function route($pdo,$page,$lang,$action) {
        if ($page == '') {
            $request = $_POST;   

            if ($action == 'register') {
                // echo 'pdo '.isset($pdo);
                $result = authRegister($pdo,$request);
                if ($result){
                    // displayHomePage($lang);
                    require_once('pages/welcome.php');
                }
            } else if ($action == 'login') {
                $result = authLogin($pdo,$request);
                if ($result){
                    // displayHomePage($lang);
                    require_once('pages/welcome.php');
                }
            } else if ($action == 'logout') {
                authLogout($pdo,$request);
            } else {
                displayHomePage($lang);
            }

        } else if ($page == 'features') {
            displayFeaturesPage($lang);
        } else if ($page == 'register') {
            require_once('pages/auth/register.html');
        } else if ($page == 'login') {
            require_once('pages/auth/login.html');
        }  else if ($page == 'welcome') {
            require_once('pages/welcome.php');
        } 


        // else if ($page == 'blog') {
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
