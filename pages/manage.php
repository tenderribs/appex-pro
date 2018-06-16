<br>
<br>
<div class="box" class="marginTop">
  <article class="media">
    <div class="media-content">
      <p class=login>
        <p class="title">
            <?php  
                if (session_status() === PHP_SESSION_ACTIVE && isset($_SESSION["email"]) && isset($_SESSION["user_role"])  && $_SESSION["user_role"] == "admin") {
                    echo "welcome ".$_SESSION["email"];
                    echo "<br/>";
                    echo "Login date and time : ". $_SESSION["loginDateTime"];
                    echo "<br/>";
                    echo "<br/>";

                    echo '  <a class="button" style="background-color: #30a5ff" href="index.php?page=createBlogPost">
                                <span>
                                    Create Blog Post
                                </span>
                            </a>
            </p>        
        </p>
    </div>';
                } else {
                        // Error msg
                        echo '  <div class="columns">
                            <div class="column is-6-desktop is-offset-3-desktop">
                                <div class="card rounded">
                                    <div class="card-content has-text-centered notification is-danger">
                                        <span class="box-title is-size-4"><b></b></span>
                                        <div class="content">
                                            <div class="field">
                                                <p class="is-size-5">Please log into your Admin account in order to use manage functions</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>';
                }
            ?>
  </article>
</div>