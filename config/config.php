<?php
// the username.DbName and password are defined in env.config.php file my name jeff
require_once(__DIR__.'/env.config.php');
    try {
        $pdo = new PDO("mysql:host=$servername;dbname=$DbName", $username, $password);
        // set the PDO error mode to exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo 'pdo '.isset($pdo);
        // echo "Connected successfully"; 
        }
    catch(PDOException $e)
        {
        echo "Connection failed: " . $e->getMessage();
        }
?>