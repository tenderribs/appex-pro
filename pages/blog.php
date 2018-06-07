<?php
    $lang = isset($_GET["la"]) ? $_GET["la"] : 'en';
    $posts = loadBlogPosts($pdo,$lang);


echo '<div class="marginTop">
        <br>
        <br>
        <div class="tiles" class="marginTop">
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
                        </article>
                    </article>
                    </div>
                </div>';

                if ($posts) {
                    //if succesfully logged in, display welcome page
                    // displayHomePage($lang);
                    foreach ($posts as $post ) {
                        echo '<div class="tile is-parent">';
                        echo '<article class="tile is-child box">
                                   
                                    <article class="is-dark">
                                        <p class="title">'
                                            .$post['title'].
                                            '<span class="tag ">'
                                                .$post['published_at'].
                                            '</span> 
                                        </p> 
                                        <div class="message-body">
     
                                            <p>'.$post['text'].'</p>
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

        echo '</div>
        </div>
        <p class="bottomspaceBlog">';
?>