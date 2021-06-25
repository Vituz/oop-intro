<?php

/*
Classi sintassi
- parola chiave 'Class'
- nome della classe in PascalCase
*/


/**
 * Person Class
 * @author Vito
 * @copyright 2021 Vito
 */
class Person
{
    public $name;
    public $age;
}


/*
Creare instanza della classe (oggetto)

- parola chiave 'new'
*/

$yoda = new Person();
$baby_yoda = new Person();

// Asssegnare un valore agli attributi della classe
$yoda->name = 'Yoda';
$yoda->age = 200;

$baby_yoda->name = 'Groku';
$baby_yoda->age = 2;

//Dumpiamo le due classi
var_dump($yoda, $baby_yoda);


// Getters and Setters
class Car
{
    public $make;
    public $model;
    public $price;

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice(int $price)
    {
        $this->price = $price;
    }
}

// Crea instance new class object

$tesla = new Car();

$tesla->make = 'Tesla';
$tesla->model = 'X';


$tesla->setPrice(50000);

var_dump($tesla->getPrice());

var_dump($tesla);

$alfa = new Car();

$alfa->make = 'Alfa';
$alfa->model = 'Giulietta';
$alfa->price = 35000;

var_dump($alfa);

$alfa->setPrice(25000);

var_dump($alfa);



//Class Constructor

class Products
{
    public $name;
    public $description;
    public $price;
    public $instock;

    function __construct(string $name, string $description, float $price, bool $instock = false)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->instock = $instock;
    }
}

$laptop = new Products('Acer', 'Model description', 700);

var_dump($laptop);

var_dump($laptop->name, $laptop->description, $laptop->price);
