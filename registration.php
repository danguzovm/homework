<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Registracija</title>
            <link rel="stylesheet" href="css/registration.css">
        </head>

        <body>
            <div>
                <form action="models/registrationUser.php" method="post">
                    <input type="text" name="name" placeholder="Enter your name" required>
                    <input type="text" name="email" placeholder="Enter your email" required>
                    <input type="password" name="password" placeholder="Enter your passwpord" required>
                    <button>Sign In</button>
                    <a href="login.php">Already have an account?</a>
                </form>
            </div>
        </body>

    </html>