<?php
//Zad 2.10

$people = [
    "Fifonż" => 23,
    "Janek" => 24,
    "Alfons" => 32,
    "Bartosz" => 18,
    "Piotr" => 40
];

foreach ($people as $name => $age) {
    echo $name . " ma " . $age . " lat.\n";
}

print "\nLiczba elementów w liście: ".count($people);
print "\nWiek Pana Bartosza: ".$people["Bartosz"];
print "\nDodano Pana Witolda: ".$people["Witold"]=28;
print "\nUsuwam Pana Piotra";
unset($people["Piotr"]);

print "Sortuje tablicę malejąco wg wieku";
arsort($people);
print_r($people);