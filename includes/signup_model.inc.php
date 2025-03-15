<?php

declare(strict_types=1);

function get_email(object $pdo , string $email) {
    $query = "SELECT email FROM users WHERE email = :email;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function set_user(object $pdo, string $first_name, string $last_name, string $email, string $user_password) {
    $query = "INSERT INTO users (first_name, last_name, email, user_password) VALUES (:first_name, :last_name, :email, :user_password);";
    $stmt = $pdo->prepare($query);

    $options = [
        'cost' => 12
    ];
    $hashed_password = password_hash($user_password, PASSWORD_BCRYPT, $options);

    $stmt->bindParam(":first_name", $first_name);
    $stmt->bindParam(":last_name", $last_name);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":user_password", $hashed_password);
    $stmt->execute();
}