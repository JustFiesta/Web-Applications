<?php
//Zad 2.11

function division($x, $y) : float{

    if($y == 0){
        print "Nie można dzielić przez 0!";
        throw new Exception('Dzielenie przez 0');
    }

    if(is_int($x) === false || is_int($y) === false) {
        throw new Exception("Podano inny typ niż int");
    }

    $equasion = (int)$x / (int)$y;

    return $equasion;
}

try{
    print("Wynik działania dzielenia: ".division(6, 3));
}catch (Exception $e){
    echo 'Złapany wyjątek: ',  $e->getMessage(), "\n";
}