<?php
$lang = isset($_GET["la"]) ? $_GET["la"] : 'en';
echo '<p class="control">
        <a class="button" style="background-color: #30a5ff" href="index.php?action=logout">
            <span>
                Logout
            </span>
        </a>
        </p>

        <p class="control">
        <a class="button" style="background-color: #30a5ff" href="index.php?page=createBlogPost&la='.$lang.'">
                                <span>
                                    Create a Blog Post
                                </span>
                            </a>
        <!-- <a class="button" style="background-color: #30a5ff" href="index.php?page=manage&la='.$lang.'">
            <span>
                Manage
            </span> -->
        </a>
        </p>';