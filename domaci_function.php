<?php

    function izracunajPDV($cena) {
        $stopa_pdv = 0.22;

        if (!is_numeric($cena)) {
            return "Broj mora biti numerička vrednost.";
        }

        if ($cena < 1) {
            return "Broj ne može biti manji od 1.";
        }

        $pdv = $cena * $stopa_pdv;
        return "PDV iznosi " . $pdv . " eura.";
    }


    echo izracunajPDV(100);
    echo "<br>";
    echo izracunajPDV("Milan");
