<?php
//Zad 2.6

function ctf($c = null) : float {
    if ($c == null){
        print "Nie podano wartości";
        return $c;
    }
    $f = 0;
    $f = ($c * (9/5)) + 32;

    return $f;
}

print "Stopnie po konwersji: ".ctf(30);