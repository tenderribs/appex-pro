<br>
<br>
<div class="box" class="marginTop">
  <article class="media">
    <div class="media-content">
      <p class=login>
        <p class="title">
            <?php  //first make sure that the user is really an admin. If so, require the admin tools available at edit.php
                if (session_status() === PHP_SESSION_ACTIVE && $_SESSION["email"] == 'mark@markmarolf.com') {
                    echo "welcome ".$_SESSION["email"];
                    echo "<br/>";
                    echo "Edit the Blog here.";

                    $path = "edit.php";
                    echo "Path : $path";
                    require_once($path);
                    
                } else {
                    echo "Only Admins can access this page.";
                }
            ?>
        </p>        
      </p>
    </div>
  </article>
</div>