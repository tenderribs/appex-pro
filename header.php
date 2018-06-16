<?php
    $lang = isset($_GET["la"]) ? $_GET["la"] : 'en';

    $page = isset($_GET["page"]) ? $_GET["page"] : null;


    $en = [];
    $de = [];
    $content = [];
    
    $en['Learn_More_About_Us'] = '
                                <a class="navbar-item'.($page == 'features' ? ' is-active ':'' ).'" href="index.php?page=features&la=en">
                                        Learn More / About Us
                                </a>';
    $de['Learn_More_About_Us'] = '<a class="navbar-item '.($page == 'features' ? ' is-active ':'' ).'" href="index.php?page=features&la=de">
                                        Mehr erfahren / Über uns
                                    </a>';

    $en['Contact_Blog'] = '    <a class="navbar-item '.($page == 'blog' ? ' is-active ':'' ).'" href="index.php?page=blog&la=en">
                                    Contact & Blog
                                </a>';
        
    $de['Contact_Blog'] = '    <a class="navbar-item '.($page == 'blog' ? ' is-active ':'' ).'" href="index.php?page=blog&la=de">
                                    Kontakt und Blog
                                </a>';


    if ($lang == 'de') {
        $content = $de; 
    } else if ($lang == 'en') {
        $content = $en; 
    }

    echo '
            <nav class="navbar" style="background-color: #448afc">
                <div class="navbar-brand">
                
                        <a class="navbar-item has-text-black-bis" href="../index.php?la='.$lang.'" style="background-color: rgb(238, 238, 238)">
                            <img src="images\logo.gif" alt="Applied Experience" width="75" height="32">
                            <h3><strong>Applied</strong> Experience</h3>
                        </a>
                    <div class="navbar-burger burger" id="navBarBurger" onclick="activeNavBar()" data-target="mainNavBar">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>

                <div  id="mainNavBar" class="navbar-menu">
                    <div class="navbar-start">
                        <!-- <a class="navbar-item" href="index.php">
                            Home
                        </a> -->
                            '.$content['Learn_More_About_Us'].'
                    
                            '.$content['Contact_Blog'].'
                    </div>

                    <div class="navbar-end">

                        <div class="navbar-item">
                                <div class="field is-grouped">
                    ';
        if (session_status() === PHP_SESSION_NONE || !isset($_SESSION["authenticated"]) || $_SESSION["authenticated"] == False) {
            // require_once(__DIR__.'/pages/navbar/login_register_buttons.html');
        } else if ( $_SESSION["authenticated"] == True ) {
            require_once(__DIR__.'/pages/navbar/logout_button.php');
        }
        echo            '
                            </div>
                        </div>

                        <div class="navbar-item">
                            <div class="field is-grouped">';
                            if ($lang == 'de') {
                                    require_once(__DIR__.'/pages/navbar/deu.html');
                            }
                            else if ($lang == 'en') {
                                    require_once(__DIR__.'/pages/navbar/eng.html');
                            }
                            echo'</div>
                        </div>

                    </div>

                </div>
            </nav>
        ';
?>

