<!--// obican = korisnik unese cena proizvoda npr. 100, ako je hrana dodamo jos 50 tj ukupno 150 i pored hrane imamo i opremu za racunare
// ako je oprema za racunare treba da dodamo jos 350
// bonus je da immamo da stikliramo izracunaj porez
// ako imamo 100, on ce da doda 10% poreza to je 110 plus hrana, ukupno 160
// ovo mozemo da iskoristimo, sajt za narucivanje necega, software za knjigovodje. opcia da li zelimo da uracunamo porez ili brz njega

-->

<doctype html>
    <html lang-="en">
    <head>
        <title></title>
    </head>
    <body>
        <form action="racun.php" method="GET">

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






