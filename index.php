<?php

$naslovSajta = "Postani Programer";

$navigacija = [
    "Glavna" => "home.php",
    "O nama" => "about_us.php",
    "Kontakt"=> "contact.php"
];

$godina = date("Y");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Postani programer</title>
</head>
<body>

<h1> <?= $naslovSajta; ?> </h1>

<nav>
    <a href="index.php">Glavna</a>
    <a href="about_us.php">O nama</a>
    <a href="contact.php">Kontakt</a>
</nav>

<footer>
    <p> Copyright &copy; moj sajt <?= $godina; ?> </p>
</footer>
</body>
</html>
