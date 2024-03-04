<?php
//Zad 2.8

$i = 0;
while ($i <= 100){
    if (!($i % 7 == 0)){
        print $i."\n";
    }
    $i=$i+5;
}