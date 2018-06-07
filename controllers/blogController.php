<?php
    function storeBlogPost($pdo,$request) {

        $title = !empty($request['title']) ? trim($request['title']) : null;
        $text = !empty($request['text']) ?$request['text'] : null;

        if ($password != $password_confirmation) {
            die("passwords are not equal");
        }

        //Remember: We are inserting a new row into our users table.
        $sql = "INSERT INTO contents (email, password, last_login) VALUES (:email, :password, NOW())";
        $stmt = $pdo->prepare($sql);

        //Bind our variables.

        $stmt->bindValue(':email', $email,PDO::PARAM_STR);
        $stmt->bindValue(':password', $hashedPassword,PDO::PARAM_STR);
    
        //Execute the statement and insert the new account.
        $result = $stmt->execute();
        
        //If the signup process is successful.
        if($result){
            //What you do here is up to you!
            return true;
        }
    }


?>