<?php

require '../vendor/autoload.php';

/** ✅ DEBUT DE LA ZONE À MODIFIER ✅ **/

use App\Bomb;
use App\Arena;
use App\Tile;

$nombre = rand(5, 8);
$bombs = [];
$tiles = [];

for ($i = 1; $i <= $nombre; $i++) {
    $bomb = new Bomb($i, 'bomb.svg');
    $bomb->setX(rand(0, 9));
    $bomb->sety(rand(0, 9));
    $bombs[] = $bomb;
}

for ($y = 0; $y < 10; $y++) {
    for ($x = 0; $x < 10; $x++) {
        $tile = new Tile($x, $y);
        $tiles[]= $tile;
    }
}

$arena = new Arena($bombs, $tiles);



/** FIN DE LA ZONE A MODIFIER **/
/** ⛔ Ne pas modifier en dessous ⛔ **/

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Démineur   --map-rotation:45deg;</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <header>
        <h1>Ne marchez pas sur les bombes !</h1>
    </header>
    <main>

        <?php include 'map.php' ?>

    </main>
</body>

</html>