<?php
//Zad 2.2

use function PHPSTORM_META\type;

$a=4;
define("B", 10);
$c=4.0;
$d=5.667;

print "Dodawanie: ".$a+B."\n";
print "Dzielenie: ".$a/B."\n";
print "Potęgowanie: ".pow($a, B)."\n";
print "Reszta z dzielenia: ".B%$a."\n";
print "Czy a=B?: ";
if ($a == B) {
    print "tak";
}else{
    print "nie";
}

print "\nCzy a > B?: ";
if ($a > B) {
    print "tak";
}else{
    print "nie";
}
print "\nCzy a > B? (op. trójargumentowy): ".($a > B) ? print "tak" : print "nie";
print "\nCzy a = c?: ";
if ($a == $c) {
    print "tak";
}else{
    print "nie";
}
print "\nCzy a = c? (z uwzględnieniem typu): ";
if ($a === $c) {
    print "tak";
}else{
    print "nie";
}
print "\nd bez przecinka: ".(int)$d;
print "\nd i dwa miejsca po przecinku: ".round($d, 2);