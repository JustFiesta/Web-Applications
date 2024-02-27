<?php
//Zad 2.7
$l = 10;

function rd($num) : int{

    $random = rand(1, 150);

    return $num = $random;
}

print "Zmiana liczby z: ".$l." na: ".rd($l);