<?php

    require_once "models/conn.php";

    $result = $db->query("SELECT * FROM cars");

    $cars = $result->fetch_all(MYSQLI_ASSOC);

?>

        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Lista automobila</title>
            <link rel="stylesheet" href="css/listFromDb.css">



        </head>
        <body>
            <table>
                <thead>
                    <tr>
                        <th>Automobil</th>
                        <th>Cena</th>
                        <th>Godina proizvodnje</th>
                        <th>Na stanju</th>
                        <th>Detaljnije</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($cars as $car) : ?>
                        <tr>
                            <td><?= $car['car'] . " " . $car['model'] ?></td>
                            <td><?= $car['price'] ?></td>
                            <td><?= $car['age'] ?></td>
                            <td><?= ($car['quantity'] == 0) ? "Nema na stanju" : "Ima na stanju" ?></td>
                            <td><a href="product.php?id=<?= $car['id'] ?>">Pogledajte detaljnije</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </body>
        </html>
