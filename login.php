<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Prijavi se</title>
            <link rel="stylesheet" href="css/login.css">
        </head>

            <body>
                <form action="models/loginUser.php" method="post">
                    <input type="text" name="email" placeholder="Enter your email" required>
                    <input type="password" name="password" placeholder="Enter your passwpord" required>
                    <button>Log In</button>
                </form>
            </body>

    </html>