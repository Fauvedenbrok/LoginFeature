<?php

if ($_SERVER["REQUEST_METHOD"]== "POST"){
    $email = $_POST["email"];
    $user_password = $_POST["user_password"];

    try{
        require_once "dbh.inc.php";
        $query = "INSERT INTO users (email, user_password) VALUES (?, ?);";

        $stmt = $pdo->prepare($query);

        $stmt->execute([$email, $user_password]);

        $pdo = null;
        $stmt = null;

        header("Location: ../index.php");
        
        die();
    } catch(PDOException $e){
        die("Query failed: " . $e->getMessage());
    }
}
else {
    header("Location: ../index.php");
}