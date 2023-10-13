<?php

if(!isset($_GET['car']) || empty($_GET['car'])) {
    die("PLease enter a name of the car");
}

if(!isset($_GET['model']) || empty($_GET['model'])) {
    die("PLease enter a model of the car");
}

require_once "conn.php";

$car = $_GET['car'];
$model = $_GET['model'];

$result = $db->query("SELECT * FROM cars WHERE car LIKE '%$car%' OR model LIKE '%$model%'");

if($result->num_rows == 0) {
    echo "Ovaj proizvod ne postoji kod nas";
} else {
    echo "Pronasli smo zadate rezultate pretrage u nasoj bazi podataka";
}

