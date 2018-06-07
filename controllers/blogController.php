<?php
    function storeBlogPost($pdo,$request) {

        $title = !empty($request['title']) ? trim($request['title']) : null;
        $text = !empty($request['text']) ? $request['text'] : null;
        $lang = !empty($request['language']) ? $request['language'] : null;
        $published_at = !empty($request['published_at']) ? $request['published_at'] : null;
        $user_id = !empty($_SESSION["user_id"]) ? $_SESSION["user_id"] : null;

        if ($title == null && $text == null && $language == null && $published_at == null) {
            die("please fill all fields");
        }

        //Remember: We are inserting a new row into our users table.
        $sql = 'INSERT INTO contents (title, text, lang, published_at, user_id, created_at)
                             VALUES (:title, :text, :lang, :published_at, :user_id, NOW())';

        $stmt = $pdo->prepare($sql);

        //Bind our variables.

        $stmt->bindValue(':title', $title,PDO::PARAM_STR);
        $stmt->bindValue(':text', $text,PDO::PARAM_STR);
        $stmt->bindValue(':lang', $lang,PDO::PARAM_STR);
        $stmt->bindValue(':published_at', $published_at,PDO::PARAM_STR);
        $stmt->bindValue(':user_id', $user_id,PDO::PARAM_STR);

    
        //Execute the statement and insert the new account.
        $result = $stmt->execute();
        
        //If the signup process is successful.
        if ($result) {
            //What you do here is up to you!
            return true;
        }
    }
?>