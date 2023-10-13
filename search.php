<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Pretraga</title>
            <link rel="stylesheet" href="css/search.css">
        </head>

        <body>
            <form action="models/searchUser.php" method="get">
                <input type="text" name="car" placeholder="Enter your car name" required>
                <input type="text" name="model" placeholder="Enter model of the car" required>
                <button>Search</button>
            </form>
        </body>

    </html>