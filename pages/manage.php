<br>
<br>
<div class="box" class="marginTop">
  <article class="media">
    <div class="media-content">
      <p class=login>
        <p class="title">
            <?php  
                if (session_status() === PHP_SESSION_ACTIVE && isset($_SESSION["email"])) {
                    echo "welcome ".$_SESSION["email"];
                    echo "<br/>";
                    echo "Login date and time : ". $_SESSION["loginDateTime"];
                    echo "<br/>";
                    echo "<br/>";

                    echo '  <a class="button" style="background-color: #30a5ff" href="index.php?page=createBlogPost">
                                <span>
                                    Create Blog Post
                                </span>
                            </a>';

                } else {
                    echo "Please log in to your account in order to use all features of AppEx.ch";
                }
            ?>
        </p>        
      </p>
    </div>
  </article>
</div>