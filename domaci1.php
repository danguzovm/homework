<?php

    $ime = "ADMINistrator";
    $lozinka = "mojaSifraJeSigurna";

    $sistem = strtolower($ime);


    if($sistem == "administrator" && $lozinka == "mojaSifraJeSigurna")
        {
            echo "Dobrodosao administratore";
        }
    else
        {
            echo "Niste administrator";
        }
