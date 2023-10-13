<?php

    if(!isset($_POST['car']) || empty($_POST['car'])) {
        die("Please enter the car name first");
    }

    if(!isset($_POST['model']) || empty($_POST['model'])) {
        die("Please enter the model of the car");
    }

    if(!isset($_POST['price']) || empty($_POST['price'])) {
        die("Please enter the price of the car");
    }

    if(!isset($_POST['age']) || empty($_POST['age'])) {
        die("Please enter the age of the car");
    }

    if(!isset($_POST['quantity']) || empty($_POST['quantity'])) {
        die("Please enter the quantity of the car");
    }

    require_once "conn.php";

    $car = $_POST['car'];
    $model = $_POST['model'];
    $price = $_POST['price'];
    $age = $_POST['age'];
    $quantity = $_POST['quantity'];

    $result = $db->query("INSERT INTO cars (car, model, price, age, quantity) VALUES ('$car', '$model', $price, $age, $quantity)");



