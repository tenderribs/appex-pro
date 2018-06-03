<?php
    require '../../config/config.php';
    $method = $_GET['method'];
    $request = $_POST;
    switch ($method) {
        case "login":
            login($pdo,$request);
            break;
        case "register":
            register($pdo,$request);
            break;
        case "new":
            newPost($pdo,$request);
            break;
        case "logout":
            logout();
            break;
    }
    function login($pdo,$request) {
        $email = !empty($request['email']) ? trim($request['email']) : null;
        $password = !empty($request['password']) ?$request['password'] : null;
        $hashedPassword = hash_password($password);
        
        //Construct the SQL statement and prepare it.
        $sql = "SELECT id, email FROM users WHERE email = :email AND password = :hashedPassword";
        $stmt = $pdo->prepare($sql);
        //Bind the provided email to our prepared statement.
        $stmt->bindValue(':email', $email,PDO::PARAM_STR);
        $stmt->bindValue(':hashedPassword', $hashedPassword,PDO::PARAM_STR);
        //Execute.
        $stmt->execute();
        //Fetch the row.
        $row = $stmt->fetch(PDO::FETCH_ASSOC); 
            
        if (isset($row['email'])) {
            // var_dump($row);
            // die();
            start_session($row); /* start the session */
        }
        else{
            echo "wrong password";
        }
    }
    function register($pdo,$request) {
        $email = !empty($request['email']) ? trim($request['email']) : null;
        $password = !empty($request['password']) ?$request['password'] : null;
        $password_confirmation = !empty($request['password_confirmation']) ?$request['password_confirmation'] : null;
        if ($password != $password_confirmation) {
            die("passwords are not equal");
        }
        //Construct the SQL statement and prepare it.
        $sql = "SELECT COUNT(email) AS num FROM users WHERE email = :email";
        $stmt = $pdo->prepare($sql);
        //Bind the provided email to our prepared statement.
        $stmt->bindValue(':email', $email,PDO::PARAM_STR);
        
        //Execute.
        $stmt->execute();
        
        //Fetch the row.
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        
        //If the provided username already exists - display error.
        if ($row['num'] > 0){
            die('That email already exists!');
        }
        //Hash the password as we do NOT want to store our passwords in plain text.
        $hashedPassword = hash_password($password);
    
        //Prepare our INSERT statement.
        //Remember: We are inserting a new row into our users table.
        $sql = "INSERT INTO users (email, password, last_login) VALUES (:email, :password, NOW())";
        $stmt = $pdo->prepare($sql);
        //Bind our variables.
        $stmt->bindValue(':email', $email,PDO::PARAM_STR);
        $stmt->bindValue(':password', $hashedPassword,PDO::PARAM_STR);
    
        //Execute the statement and insert the new account.
        $result = $stmt->execute();
        
        //If the signup process is successful.
        if($result){

            // after that user is registered i select his email and id from db
            // so i can store his ID in sessions and later use it when the user create a content
            // in create content we can get user_id from session and store content with the user_id (the user that is logged in the creator)
            //Construct the SQL statement and prepare it.
            $sql = "SELECT id, email FROM users WHERE email = :email";
            $stmt = $pdo->prepare($sql);
            //Bind the provided email to our prepared statement.
            $stmt->bindValue(':email', $email,PDO::PARAM_STR);
            //Execute.
            $stmt->execute();
            //Fetch the row.
            $row = $stmt->fetch(PDO::FETCH_ASSOC); 

            //  var_dump($row);
            //  die();
            //What you do here is up to you!
            start_session($row); /* start the session */            
        }
    }
    
    function newPost($pdo,$request){
        //$file = !empty($request['file']) ?$request['file'] : null;

        $sql = "SELECT COUNT(blog) AS num FROM contents";
        $stmt = $pdo->prepare($sql);

        //Execute.
        $stmt->execute();
        
        //Fetch the row.
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        
        //If the provided username already exists - display error.
        if ($row['num'] >= 0){
            $blog = $row['num'] + 1;
        }

        $title = !empty($request['title']) ?$request['title'] : null;
        $text = !empty($request['text']) ?$request['text'] : null;
       
        // this is not correct
        //$created_at = "SELECT NOW() + 0;""

        // This is correct way to get current date time and store in a variable 
         $created_at = date('Y-m-d H:i:s');

        
        //Prepare our INSERT statement.
        //Remember: We are inserting a new row into our users table.
        $sql = "INSERT INTO contents (title, text, blog, created_at, user_id) VALUES (:title, :text, :blog, :created_at, :user_id)";
        $stmt = $pdo->prepare($sql);

        //Bind our variables.
        $stmt->bindValue(':title', $title,PDO::PARAM_STR);
        $stmt->bindValue(':text', $text,PDO::PARAM_STR);
        $stmt->bindValue(':blog', $blog,PDO::PARAM_INT);        
        // $stmt->bindValue(':created_at', $created_at,PDO::PARAM_INT);
        $stmt->bindValue(':created_at', $created_at,PDO::PARAM_STR); // created_at is a string
        // I have also changed 'updated_at' and 'created_at' fields type from int to datetime
        // you can do edit tables fields from phpmyadmin, tab structure -> change
        
        // we have set the user_id in session after that user logged in or registered 
        // var_dump($_SESSION);
        // die();
        $user_id = isset($_SESSION["user_id"])?$_SESSION["user_id"]:1;

        $stmt->bindValue(':user_id', $user_id,PDO::PARAM_INT);
    
        //Execute the statement and insert the new post.
        $result = $stmt->execute();
        
        //If the process is successful.
        if($result){
            echo "Added content successfully";
            echo "</br>";
            echo "</br>";
            echo "</br>";
            echo "</br>";
            echo "<a href='../../index.php?'>To the Homepage:</a>";
            echo "</br>";
            echo "<a href='../../index.php?page=blog'>To the Blog:</a>";           
        }
    }
    function logout() {
        session_start();
        unset($_SESSION['email']);
        session_destroy();
        header("Location: /index.php?page=login");
    }
    function hash_password($password) {
        // Salt!!! should not be changed!
        // it works like Salt :> , it will be added to password before hashing, so it will increase the saltiness(strenge) of the hashed password
        // we can use one Salt for all password or add a new field "salt" to users table and generate a unique salt for each user
        // and hash each user password with his own Salt!!
        $salt = "g55Q7HKmhohrMZRjuaWWyuR2eeHaxorIee4UzFbTo4VyvBXrzDZyu82vNkNi50Ch";
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT, array("salt"=> $salt, "cost" => 12));
        return  $hashedPassword;
    }
    function start_session($user) {
        // php session
        // hmmmm , hard to explain, its used to store values accros multi requests made by a single user/client
        // for example when the user logs in we can store his info's such as Name,Email,Role and etc
        // and at the start of every page that the user need to be Logged in to access that page we can check
        // the $_SESSION["authenticated"] and if its True then we allow the user request to proceed else we terminate it 
        session_start();
        $_SESSION["authenticated"] = True;
        $_SESSION["loginDateTime"] = date("Y-m-d H:i:s");        
        $_SESSION["email"] = $user['email'];
        $_SESSION["role"] = "nab";
        $_SESSION["user_id"] = $user['id'];
        // var_dump($_SESSION);
        // die();

        header("Location: /index.php?page=welcome"); /* Redirect browser */
    }
?>