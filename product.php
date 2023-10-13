<?php

    if(!isset($_GET['id']) || empty($_GET['id'])) {
        die("Missing car ID");
    }

    require_once "models/conn.php";

    $carId = $_GET['id'];

    $result = $db->query("SELECT * FROM cars WHERE id = '$carId'");

    if($result->num_rows == 0) {
        echo "ovaj podatak ne postoji";
    }

    $car = $result->fetch_assoc();
    ?>

        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Detalji automobila</title>
            <link rel="stylesheet" href="css/product.css">
        </head>

        <body>
        <div class="card">
            <h3><?= $car['car']. " " .$car['model'] ?></h3>

            <h4>Cena automobila: <?= $car['price'] ?></h4>

            <h4>Godina proizvodnje: <?= $car['age'] ?></h4>

            <h4>Na stanju: <?= $car['quantity'] ?></h4>

            <?php if($car['quantity'] == 0) : ?>
                <h4>Nema na stanju</h4>
            <?php else : ?>
                <h4>Ima na stanju</h4>
            <?php endif; ?>

            <a href="listFromDb.php">Vrati se na pocetnu stranicu</a>
        </div>
        </body>
        </html>

