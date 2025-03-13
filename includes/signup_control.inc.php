<?php

declare(strict_types=1);

function is_input_empty($first_name, $last_name, $email, $user_password) {
    	if (empty($first_name) || empty($last_name) || empty($email) || empty($user_password)) {
            return true;
        } else {
            return false;
        }
}

function is_email_invalid($email) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}


function is_email_registered(object $pdo, string $email) {
    if(get_email($pdo , $email)){
        return true;
    } else {
        return false;
    }
}