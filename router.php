 <?php 
    function route($pdo,$page,$lang,$action) {        
        if ($page == '') {
            //empty page in url, check if there are any actions requested
            $request = $_POST;   
            $getRequest = $_GET;   

            if ($action == 'register') {
                // echo 'pdo '.isset($pdo);
                $result = authRegister($pdo,$request);
                if ($result) {
                    //if succesfully logged in, display welcome page
                    // displayHomePage($lang);
                    // require_once(__DIR__.'/pages/manage.php');
                    require_once(__DIR__.'/pages/refresh.php');
                }
            }   else if ($action == 'login') {
                $result = authLogin($pdo,$request);
                if ($result) {
                    //if succesfully logged in, display welcome page
                    // displayHomePage($lang);
                    // require_once(__DIR__.'/pages/manage.php');
                    require_once(__DIR__.'/pages/refresh.php');
                } else {
                    // Show login again
                    require_once(__DIR__.'/pages/auth/login.html');
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
                require_once(__DIR__.'/pages/refresh.php');
            }   else if ($action == 'storeBlogPost') {
                storeBlogPost($pdo,$request);
                require_once(__DIR__.'/pages/refresh.php');
            }   else if ($action == 'updateBlogPost') {
                updateblogPost($pdo,$request);
                require_once(__DIR__.'/pages/refresh.php');
            }   else if ($action == 'deleteBlogPost') {
                deleteBlogPost($pdo,$getRequest);
                require_once(__DIR__.'/pages/refresh.php');
            }      else {
                //if there was no action found in the URL then display the homepage with the according language
                displayHomePage($lang);
            }
            
        } else if ($page == 'features') {
            displayFeaturesPage($lang);
        } else if ($page == 'register') {
            require_once(__DIR__.'/pages/auth/register.html');
        } else if ($page == 'login') {
            require_once(__DIR__.'/pages/auth/login.html');
        }  else if ($page == 'manage') {
            require_once(__DIR__.'/pages/manage.php');
        } else if ($page == 'createBlogPost') {
            require_once(__DIR__.'/pages/createBlogPost.php');
        } else if ($page == 'editBlogPost') {
            require_once(__DIR__.'/pages/editBlogPost.php');
        } else if ($page == 'blog') {
            require_once(__DIR__.'/pages/blog.php');
        } 


        // else if ($page == 'blog') {
        //     require_once(__DIR__.'/pages/blog.html');
        // }
        // else if ($page == 'login') {
        //     require_once(__DIR__.'/pages/login.html');
        // }
        // else if ($page == 'register') {
        //     require_once(__DIR__.'/pages/register.html');
        // }
        // else if ($page == 'welcome') {
        //     require_once(__DIR__.'/pages/welcome.php');
        // }
    }
 ?>
