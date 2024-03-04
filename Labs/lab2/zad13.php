<?php
//Zad 2.13

class Point
{
    private float $x;
    private float $y;

    public function __construct(float $x,  float $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    //setters
    public function setX($newX){
        $this->x = $newX;
    }

    public function setY($newY){
        $this->y = $newY;
    }

    //print
    public function printPoint()
    {
        echo "Point(" . $this->x . ", " . $this->y . ")\n";
    }

    //methods
    public function movePoint($howFarX, $howHighY){
        $this->x += $howFarX;
        $this->y += $howHighY;
    }
}

//testowanie działania Point
$point = new Point(3.5, 7.2);
$point->printPoint();

$point->setX(5.8);
$point->setY(10.1);
$point->printPoint(); 

$point->movePoint(2.0, -3.0);
$point->printPoint(); 

