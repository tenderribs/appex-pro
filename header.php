<?php
    $lang = isset($_GET["la"]) ? $_GET["la"] : 'en';

    $en = [];
    $de = [];
    $content = [];
    
    $en['Learn_More_About_Us'] = '
                                <a class="navbar-item has-text-black-ter" href="index.php?page=features&la=en">
                                        Learn More / About Us
                                </a>';
    $de['Learn_More_About_Us'] = '<a class="navbar-item has-text-black-ter" href="index.php?page=features&la=de">
                                        Mehr erfahren / Über uns
                                    </a>';

    $en['Contact_Blog'] = '    <a class="navbar-item has-text-black-ter" href="index.php?page=blog&la=en">
                                    Contact & Blog
                                </a>';
        
    $de['Contact_Blog'] = '    <a class="navbar-item has-text-black-ter" href="index.php?page=blog&la=de">
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
                        <a class="navbar-item has-text-black-bis" href="../index.php" style="background-color: rgb(238, 238, 238)">
                            <img src="images\logo.gif" alt="Applied Experience" width="75" height="32">
                            <h3><strong>Applied</strong> Experience</h3>
                        </a>
                    <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>

                <div id="navbarExampleTransparentExample" class="navbar-menu">
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
            require_once('pages/navbar/login_register_buttons.html');
        } else if ( $_SESSION["authenticated"] == True ) {
            require_once('pages/navbar/logout_button.html');
        }
        echo            '
                            </div>
                        </div>
                        <div class="navbar-item">
                            <div class="field is-grouped">
                                <p class="control">
                                <a class="button " href="index.php?la=de">
                                    <span>DE</span>
                                </a>
                                </p>
                                <p class="control">
                                <a class="button is-success" href="index.php">
                                    <span>EN</span>
                                </a>
                                </p>
                            </div>
                        </div>

                    </div>

                </div>
            </nav>
        ';
?>

