<?php
//Zad 2.9

$fruits = array(
    0 => "banana",
    1 => "apple",
    2 => "strawberry",
    3 => "grape",
    4 => "orange",
    5 => "watermelon",
    6 => "blueberry"
);

// można też krócej np.
// $fruits = [
    // 0 => "banana", 
// ]

print "Liczba elementów w liście: ".count($fruits);
print "\nWszystkkie elementy: ";
print_r($fruits);
print "\nDodanie cyfry na koniec: ".array_push($fruits, 8);
print "\nUsunięcie ostatniego elementu: ".array_pop($fruits);
print "\nPosortowana malejąco tablica: ";
sort($fruits);
print_r($fruits);