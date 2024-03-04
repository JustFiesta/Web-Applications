<?php
//Zad 2.5

$n = 3.5;
$note;

// switch ($n) {
//     case '2.0':
//         print "Niedostateczny";
//         $note="Niedostateczny";
//         break;
//     case '2.5':
//         print "Niedostateczny";
//         $note="Niedostateczny";
//         break;
//     case '3.0':
//         print "Dostateczny";
//         $note="Dostateczny";
//         break;
//     case '3.5':
//         print "Dostateczny";
//         $note="Dostateczny";
//         break;
//     case '4.0':
//         print "Dobry";
//         $note="Dobry";
//         break;
//     case '4.5':
//         print "Dobry";
//         $note="Dobry";
//         break;
//     case '5.0':
//         print "Bardzo dobry";
//         $note="Bardzo dobry";
//         break;
//     default:
//         print "Podaj ocenę od 2.0 do 5.0 (z przejściami co 0.5)";
//         $note="";
//         break;
// }

//porównanie z match
$note = match ($n) {
    '2.0', '2.5' => "Niedostateczny",
    '3.0', '3.5' => "Dostateczny",
    '4.0', '4.5' => "Dobry",
    '5.0' => "Bardzo dobry",
    default => ""
};

echo $note;