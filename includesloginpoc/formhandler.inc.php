<?php

if ($_SERVER["REQUEST_METHOD"]== "POST"){
    $email = $_POST["email"];
    $user_password = $_POST["user_password"];

    try{
        require_once "dbh.inc.php";
        $query = "INSERT INTO users (email, user_password) VALUES (:email, :user_password);";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":user_password", $user_password);

        $stmt->execute();

        $pdo = null;
        $stmt = null;

        header("Location: ../login_poc.php");
        
        die();
    } catch(PDOException $e){
        die("Query failed: " . $e->getMessage());
    }
}
else {
    header("Location: ../login_poc.php");
}