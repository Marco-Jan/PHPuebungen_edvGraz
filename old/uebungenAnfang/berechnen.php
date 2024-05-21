<?php
$ust = 0.2;
$netto = 1200;

$erg = $netto * $ust;
echo "20 Prozent vom Nettobetrag (1200) sind {$erg}" ."<br>";
$brutto = $netto + $erg;
echo "Der Brutto betrag beträgt {$brutto} <br>";

$zahl1 = 5;
$zahl2 = 35;

if($zahl2 % $zahl1 === 0){
    echo "Die Zahl ist durch 5 teilbar<br>";
} else {
    echo "Die Zahl ist nicht durch 5 teilbar<br>";
};


$GrazWien = 89.98;
$meileKM = 1.609344;

$GrazWienKm = $GrazWien * $meileKM;
echo "Die Entfernung von Graz - Wien in Km sind {$GrazWienKm}<br>";

$tempC = 40;
$tempF = ($tempC * 9 / 5) + 32;

echo "{$tempC}C sind {$tempF}F<br>";

