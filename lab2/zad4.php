<?php
//Zad 2.4
$text1 = "   Programuję dobrze  ";
$text2 = "dobrze w PHP.  ";

print "Długość text1: ".strlen($text1);

print "\nOdwrócone text2: ".strrev($text2);

print "\nDłuższa zmienna: ";

print ((strlen($text1) > strlen($text2)) ? print("text1") : print("text2"));

if (str_contains($text1, "Programuję")){
    print "\nZmienna text1 zawiera \"Programuję\"";
}

if (str_starts_with($text1, "dobrze")){
    print "\nZmienna text2 zaczyna się od \"dobrze\"";
}

print "\nPołączone zmienne text1 i text2 bez nadmiarowych spacji: ".trim($text1)." ".trim($text2);

print "\nTablica z powyższego zadania; ";
$text3 = trim($text1)." ".trim($text2);
print_r(explode(" ", $text3));

$text1=str_replace("dobrze", "źle", $text1);
print "\nZamienione słowo dobrze na źle w text1: ".$text1;

print "\nSłowo PHP zaczyna się na indeksie: ".strpos($text2, "PHP");

print "\nText1 z dużymi literami: ".strtoupper($text1);

print "\nText2 z pierwszą dużą literą: ".ucfirst($text2);

print "\nText2 w zakresie 9 do 11: ".mb_substr($text2, 9, 11);