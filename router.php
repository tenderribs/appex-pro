 <?php 
    function route($pdo,$page,$lang,$action) {        
        if ($page == '') {
            //empty page in url, check if there are any actions requested
            $request = $_POST;   

            if ($action == 'register') {
                // echo 'pdo '.isset($pdo);
                $result = authRegister($pdo,$request);
                if ($result) {
                    //if succesfully logged in, display welcome page
                    // displayHomePage($lang);
                    require_once('pages/manage.php');
                }
            }   else if ($action == 'login') {
                $result = authLogin($pdo,$request);
                if ($result) {
                    //if succesfully logged in, display welcome page
                    // displayHomePage($lang);
                    require_once('pages/manage.php');
                } else {
                    // Show login again
                    require_once('pages/auth/login.html');
                    // Error msg
                    echo '  <div class="columns">
                                <div class="column is-6-desktop is-offset-3-desktop">
                                    <div class="card rounded">
                                        <div class="card-content has-text-centered notification is-danger">
                                            <span class="box-title is-size-4"><b></b></span>
                                            <div class="content">
                                                <div class="field">
                                                    <p class="is-size-5">Invalid Email or Password</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>';
                }

                
            }   else if ($action == 'logout') {
                authLogout($pdo,$request);
            }   else if ($action == 'storeBlogPost') {
                storeBlogPost($pdo,$request);
            }   else if ($action == 'updateBlogPost') {
                updateblogPost($pdo,$request);
            }     else {
                //if there was no action found in the URL then display the homepage with the according language
                displayHomePage($lang);
            }

        } else if ($page == 'features') {
            displayFeaturesPage($lang);
        } else if ($page == 'register') {
            require_once('pages/auth/register.html');
        } else if ($page == 'login') {
            require_once('pages/auth/login.html');
        }  else if ($page == 'manage') {
            require_once('pages/manage.php');
        } else if ($page == 'createBlogPost') {
            require_once('pages/createBlogPost.php');
        } else if ($page == 'editBlogPost') {
            require_once('pages/editBlogPost.php');
        } else if ($page == 'blog') {
            require_once('pages/blog.php');
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
