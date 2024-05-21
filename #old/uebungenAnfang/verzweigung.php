<?php

$x = 10;
$y = 20;

if ($x > $y) {
    echo "{$x} ist größer als {$y}<br>";
} else {
    echo "{$x} ist kleiner als {$y}<br>";
}



$alter = 27;
if ($alter < 12) {
    echo "Sie sind ein Kind<br>";
} elseif ($alter < 18) {
    echo "Sie sind ein Jugendlicher<br>";
} elseif ($alter < 27) {
    echo "Sie sind ein junger Erwachsener<br>";
} else {
    echo "Sie sind Erwachsen<br>";
}


$alter = 24;

if ($alter >= 18 && $alter <= 27) {
    echo "Kanditat ist für ein Stipendium zugelassen<br>";
} else {
    echo " Kanditat ist nicht zu gelassn für ein Stipendium<br>";
}


