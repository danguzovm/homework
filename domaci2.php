<?php


    $trenutnoVreme = date("H");


    if($trenutnoVreme >= 5 && $trenutnoVreme < 12)
        {
            echo "Jutro";
        }
    elseif ($trenutnoVreme >=12 && $trenutnoVreme < 20)
        {
            echo "Podne";
        }
    else
        {
            echo "Noc";
        }


