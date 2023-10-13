<!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dodaj automobil</title>
        <link rel="stylesheet" href="css/addProduct.css">
    </head>

    <body>
        <form action="models/addProductUser.php" method="post">
            <input type="text" name="car" placeholder="Enter the car name" required>
            <input type="text" name="model" placeholder="Enter the car model" required>
            <input type="number" name="price" placeholder="Enter the price of the car" required>
            <input type="number" name="age" placeholder="Enter the car age" required>
            <input type="number" name="quantity" placeholder="Enter the quantity of the car" required>
            <button>Add car</button>
        </form>
    </body>

    </html>