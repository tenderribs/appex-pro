<?php
    $lang = isset($_GET["la"]) ? $_GET["la"] : 'en';
    echo '<p class="control">
            <a class="button" style="background-color: #30a5ff" href="index.php?action=logout">
                <span>
                    Logout
                </span>
            </a>
            </p>';

    if (session_status() === PHP_SESSION_ACTIVE && isset($_SESSION["email"]) && isset($_SESSION["user_role"])  && $_SESSION["user_role"] == "admin")
    {
        echo '        <p class="control">
        <a class="button" style="background-color: #30a5ff" href="index.php?page=createBlogPost&la='.$lang.'">
                                <span>
                                    Create a Blog Post
                                </span>
                            </a>
        </a>
        </p>';
    }


