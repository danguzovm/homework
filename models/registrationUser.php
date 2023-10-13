<?php

    if(!isset($_POST['name']) || empty($_POST['name'])) {
        die("Please enter your name");
    }

    if(!isset($_POST['email']) || empty($_POST['email'])) {
        die("Please enter your email adress");
    }

    if(!isset($_POST['password']) || empty($_POST['password'])) {
        die("Please enter your password");
    }

    require_once "conn.php";

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $result = $db->query("SELECT * FROM users WHERE email = '$email'");

    if($result->num_rows == 1) {
        die("Email adress already exist");
    } else {
        echo "Welcome to my site";
        $db->query("INSERT INTO users(name, email, password) VALUES ('$name', '$email', '$password')");
    }












