<?php
//procenat poreza
$poreska_stopa = 10;

// input i select polje
$cena_hrane = $_GET["iznos"];
$cena_opreme = $_GET["iznos"];
$cena_operacije = $_GET["vrsta_operacije"];

// provera da li je cekirano polje za porez
$prikazi_porez = isset($_GET["porez"]);

//prikaz poreza
$porez_za_hranu = ($cena_hrane * $poreska_stopa) / 100;
$porez_za_opremu = ($cena_opreme * $poreska_stopa) / 100;

//ukupan zbir cene sa porezom
$zbir_cene_hrane = $cena_hrane + 50 + $porez_za_hranu;
$zbir_cene_opreme = $cena_opreme + 350 + $porez_za_opremu;

if ($cena_operacije == "Hrana") {
    if ($prikazi_porez) {
        echo "Ukupna cena hrane sa porezom: " . $zbir_cene_hrane;
    } else {
        echo "Ukupna cena hrane: " . $cena_hrane + 50;
    }
}

if ($cena_operacije == "Oprema za racunare") {
    if ($prikazi_porez) {
        echo "Ukupna cena opreme sa porezom: " . $zbir_cene_opreme;
    } else {
        echo "Ukupna cena opreme: " . $cena_opreme + 350;
    }
}





