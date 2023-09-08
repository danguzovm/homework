<?php
    $navigacija = [
        'Glavna' => 'index.php',
        'O nama' => 'o_nama.php',
        'Kontakt' => 'kontakt.php'
    ];


$nazivi_linkova = [];

?>



<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
    <?php foreach ($navigacija as $tekst => $link) : ?>

        <a href="<?= $link ?>"><?= $tekst ?></a>

    <?php endforeach; ?>


       <?= implode(' ', $nazivi_linkova); ?>

</body>
</html>

