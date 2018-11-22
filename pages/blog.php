<?php
    $lang = isset($_GET["la"]) ? $_GET["la"] : 'en';
    $posts = loadBlogPosts($pdo,$lang);


echo ' <div class="tiles">
            <div class="tile is-ancestor">
                <div class="tile is-vertical is-8">
                    <div class="tile">
                        <div class="tile is-parent is-vertical">
                            <article class="tile is-child box">
                                <p class="title">Blog - Knowledge Management in the AEC industry</p>
                            </article>

                            <article class="tile is-child box">
                                <article class="message is-dark">
                                    <div class="message-body">
                                        <p class="title">Blog</p>
                                        <p>Blog posts coming soon.</p>
                                        <p>Blog kommt demnächst.</p>
                                        <br>
                                    </div>
                                </article>
                            </article>
                        </div>
                        <div class="tile is-parent">
                            <article class="tile is-child box">
                                <figure class="image">
                                    <img src="images/bridge.jpg">
                                </figure>
                            </article>
                        </div>
                    </div>
                </div>

                <div class="tile is-parent">
                    <article class="tile is-child box">
                        <article class="message is-dark">
                            <div class="message-body">
                                <p class="title">Contact us</p>
                                <p>Applied Experience GmbH is located in Baden, Switzerland.
                                    <br>Please contact us at info@appex.ch.
                                </p>
                                <p>Applied Experience GmbH hat ihren Sitz in Baden, AG.
                                    <br>Bitte kontaktieren Sie uns unter info@appex.ch.
                                </p>
                        </article>
                    </article>
                    </div>
                </div>';

                if ($posts) {
                    foreach ($posts as $post ) {
                        $colorClass = 'is-white';
                        $stateName = '';
                        if ($post['published_at'] >= date("Y-m-d H:i:s")) {
                            $colorClass = 'is-success';
                            $stateName = 'Ready for publish';
                        } 
                        if ($post['published'] == false ) {
                            $colorClass = 'is-danger';
                            $stateName = 'Draft';
                        }

                        echo '<div class="tile  is-parent">';
                        echo '<article class="tile notification '. $colorClass.' is-child box">
                                   
                                    <article class="is-dark">
                                        <p class="title">'
                                            .$post['title'].
                                            ' &nbsp;<span class="tag ">'
                                               .$post['published_at'].
                                            '</span>'; 
                        if (session_status() === PHP_SESSION_ACTIVE && isset($_SESSION["email"]) && isset($_SESSION["user_role"])  && $_SESSION["user_role"] == "admin") {
                            echo '  <a class="button" style="background-color: #30a5ff" href="index.php?page=editBlogPost&post_id='.$post['id'].'&la='.$lang.'">
                                        <span>
                                            Edit
                                        </span>
                                    </a>
                                    
                                    <span>
                                    '.$stateName.'
                                    </span>'
                                    
                                    ;
                        }

                        echo            '</p> 
                                        <div class="message-body">
                                            <p>'.$post['text'].'</p>
                                        </div>
                                    </article>
                                 </article>';
                        echo '</div>';
                 

                        
                        // echo "text : ".$post['text'];
                        // echo "<br/>";
                        
                        // echo "lang : ". $post['lang'];
                        // echo "<br/>";
                        // echo "published_at : ". $post['published_at'];
   
                    }
                }

        echo '</div>';
?>