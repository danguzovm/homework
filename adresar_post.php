<?php

    $imena = ["Toma", "Marko", "Petar"];

    $prvo_ime = strtolower($imena[0]);
    $drugo_ime = strtolower($imena[1]);
    $trece_ime = strtolower($imena[2]);

    $ime = strtolower($_POST["ime"]);

    //provera da li je uneto zeljeno ime
    if($ime == $prvo_ime ) {
        echo "Uspesno ste pronasli korisnika sa tim imenom";
    } elseif($ime == $drugo_ime) {
        echo "Uspesno ste pronasli korisnika sa tim imenom";
    } elseif($ime == $trece_ime) {
        echo "Uspesno ste pronasli korisnika sa tim imenom";
    } else {
        echo "Nije pronadjen ni jedan korisnik sa tim imenom";
    }