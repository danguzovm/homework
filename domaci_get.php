

<doctype html>
    <html lang-="en">
    <head>
        <title></title>
    </head>
    <body>
        <form action="racun.php" method="GET" >

            <input type="number" name="iznos">
            <br>

            <select name="vrsta_operacije">
                <option>Hrana</option>
                <option>Oprema za racunare</option>
            </select>
            <br>
                <input type="checkbox" name="porez">Izracunaj porez
            <br>
                <button>Izracunaj cenu</button>


        </form>

    <style>
            input{
                margin: 5px;
            }

            select {
                margin:5px;
            }

            button {
                margin: 5px;
                background-color: #4646fa;
                color: white;
                border: none;
                border-radius: 3px;
                width: 200px;
                height: 30px;
            }

    </style>
    </body>
    </html>






