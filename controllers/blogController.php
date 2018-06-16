<?php
    function checkIfUserIsAdmin(){
        if (session_status() === PHP_SESSION_ACTIVE && isset($_SESSION["email"]) && isset($_SESSION["user_role"])  && $_SESSION["user_role"] == "admin")
        {
                return true;
                
        } else  {
            // Error msg
                echo '  <div class="container has-text-centered ">
                <div class="column is-6-desktop is-offset-3-desktop">
                    <div class="card rounded">
                        <div class="card-content has-text-centered notification is-danger">
                            <span class="box-title is-size-4"><b></b></span>
                            <div class="content">
                                <div class="field">
                                    <p class="is-size-5">Oh oh!! Permission denied ...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
            return false;
        }
    }

    function storeBlogPost($pdo,$request) {

        if (!checkIfUserIsAdmin()) {
            die();
        }

        $title = !empty($request['title']) ? trim($request['title']) : null;
        $text = !empty($request['text']) ? $request['text'] : null;
        $lang = !empty($request['language']) ? $request['language'] : null;
        $published_at = !empty($request['published_at']) ? $request['published_at'] : null;
        $published = !empty($request['published']) ? ( $request['published']=='yes' ? true : false) : null;
        $user_id = !empty($_SESSION["user_id"]) ? $_SESSION["user_id"] : null;

        if ($title == null && $text == null && $language == null && $published_at == null) {
            die("please fill all fields");
        }

        //Remember: We are inserting a new row into our users table.
        $sql = 'INSERT INTO contents (title, text, lang, published_at, published, user_id, created_at)
                             VALUES (:title, :text, :lang, :published_at, :published, :user_id, NOW())';

        $stmt = $pdo->prepare($sql);

        //Bind our variables.

        $stmt->bindValue(':title', $title,PDO::PARAM_STR);
        $stmt->bindValue(':text', $text,PDO::PARAM_STR);
        $stmt->bindValue(':lang', $lang,PDO::PARAM_STR);
        $stmt->bindValue(':published_at', $published_at,PDO::PARAM_STR);
        $stmt->bindValue(':published', $published,PDO::PARAM_INT);
        $stmt->bindValue(':user_id', $user_id,PDO::PARAM_STR);

    
        //Execute the statement and insert the new account.
        $result = $stmt->execute();
        
        if ($result) {
            //What you do here is up to you!
            return true;
        }
    }

    function updateblogPost($pdo,$request) {

        if (!checkIfUserIsAdmin()) {
            die();
        }


        $title = !empty($request['title']) ? trim($request['title']) : null;
        $text = !empty($request['text']) ? $request['text'] : null;
        $lang = !empty($request['language']) ? $request['language'] : null;
        $published_at = !empty($request['published_at']) ? $request['published_at'] : null;
        $published = !empty($request['published']) ? ( $request['published']=='yes' ? true : false) : null;
        $post_id = !empty($request["post_id"]) ? $request["post_id"] : null;

        if ($title == null && $text == null && $language == null && $published_at == null) {
            die("please fill all fields");
        }

        //Remember: We are inserting a new row into our users table.
        $sql = 'UPDATE contents SET title= :title, text= :text, lang= :lang, published_at= :published_at, published= :published WHERE id = :post_id';
       
        $stmt = $pdo->prepare($sql);


        //Bind our variables.

        $stmt->bindValue(':title', $title,PDO::PARAM_STR);
        $stmt->bindValue(':text', $text,PDO::PARAM_STR);
        $stmt->bindValue(':lang', $lang,PDO::PARAM_STR);
        $stmt->bindValue(':published_at', $published_at,PDO::PARAM_STR);
        $stmt->bindValue(':published', $published,PDO::PARAM_INT);
        $stmt->bindValue(':post_id', $post_id,PDO::PARAM_STR);

        //Execute the statement and insert the new account.
        $result = $stmt->execute();

        if ($result) {
            //What you do here is up to you!
            return true;
        }
    }

    function deleteblogPost($pdo,$request) {

        if (!checkIfUserIsAdmin()) {
            die();
        }


        $post_id = !empty($request["post_id"]) ? $request["post_id"] : null;

           //Remember: We are inserting a new row into our users table.
        $sql = 'DELETE FROMT contents WHERE id = :post_id';
       
        $stmt = $pdo->prepare($sql);

        //Bind our variables.
        $stmt->bindValue(':post_id', $post_id,PDO::PARAM_STR);

        //Execute the statement and insert the new account.
        $result = $stmt->execute();

        if ($result) {
            //What you do here is up to you!
            return true;
        }
    }

    function loadBlogPosts($pdo,$lang) {
        //Construct the SQL statement and prepare it.
        $sql = "SELECT id, title, text, lang, published, published_at, user_id, created_at FROM contents WHERE published = :published AND lang = :lang AND published_at <= NOW()";
        $stmt = $pdo->prepare($sql);

        //Bind the provided email to our prepared statement.
        $stmt->bindValue(':published', true,PDO::PARAM_INT);
        $stmt->bindValue(':lang', $lang,PDO::PARAM_STR);

        //Execute.
        $stmt->execute();

        //Fetch the row.
        $posts = $stmt->fetchAll(PDO::FETCH_ASSOC);

        //If the signup process is successful.
        if (isset($posts)) {
            return $posts;
        }
    }

    function loadBlogPostById($pdo,$post_id) {
        //Construct the SQL statement and prepare it.
        $sql = "SELECT id, title, text, lang, published, published_at, user_id, created_at FROM contents WHERE id = :post_id";
        $stmt = $pdo->prepare($sql);

        //Bind the provided email to our prepared statement.
        $stmt->bindValue(':post_id', $post_id, PDO::PARAM_INT);

        //Execute.
        $stmt->execute();

        //Fetch the row.
        $post = $stmt->fetch(PDO::FETCH_ASSOC);

        //If the signup process is successful.
        if (isset($post)) {
            return $post;
        } else {
            return false;
        }
    }
?>