<?php

    if(!isset($_POST['email']) || empty($_POST['email'])) {
        die("Please enter your email adress");
    }

    if(!isset($_POST['password']) || empty($_POST['password'])) {
        die("Please enter your password");
    }

    require_once "conn.php";

    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = $db->query("SELECT * FROM users WHERE email = '$email'");

    if($result->num_rows == 1) {
        $user = $result->fetch_assoc();

            $verifypassword = password_verify($password, $user['password']);
            if($verifypassword == true) {
                echo "Welcome back";
            } else {
               echo "Forgot password";
            }

    } else {
        echo "User already exist";
    }

