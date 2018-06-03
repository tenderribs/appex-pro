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
                    echo "Yea bro, we neva forgat and we keep an eyE on u!";
                } else {
                    echo "HelloO, you are not logged in! please login/register to use all the Nice featurez!";
                }
            ?>
        </p>        
      </p>
    </div>
  </article>
</div>