<?php
//Zad 2.12

//najpierw pobieramy ramsey poprzez composer'a (composer require ramsey/uuid)
require_once __DIR__ . "/vendor/autoload.php";
use Ramsey\Uuid\Uuid;

class Dog
{
    private $id;
    private $name;
    private $age;
    private $adoptionDate;

    public function __construct($name, $age, $adoptionDate)
    {
        $this->id = Uuid::uuid4()->toString();
        $this->name = $name;
        $this->age = $age;
        $this->adoptionDate = $adoptionDate;
    }

    public function printDogInfo()
    {
        $formattedDate = date('d-m-Y', strtotime($this->adoptionDate));
        echo $this->name . " (" . $this->age . " l.) przyjęty w dn. " . $formattedDate . "\n";
    }
}

$dogs = array(
    new Dog("Burek", 9, "2024-03-10"),
    new Dog("Clifford", 9, "2024-02-05"),
    new Dog("Azor", 12, "2024-02-15"),
    new Dog("Szarik", 8, "2024-02-22"),
    new Dog("Idefix", 15, "2024-01-26")
);

foreach ($dogs as $dog) {
    echo "Dog Information:\n";
    $dog->printDogInfo();
    echo "\n";
}
?>