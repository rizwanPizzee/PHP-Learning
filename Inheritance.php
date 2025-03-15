<?php

//Inheritance: allows a class to inherit properties and methods from another class, making it easier 
//  to create specialized classes without duplicating code.

//'extends' keyword use for iheritance

class Vehicle
{
    public $brand;
    public $color;

    public function __construct($brand, $color)
    {
        $this->brand = $brand;
        $this->color = $color;
    }

    public function honk()
    {
        echo "Beep beep! <br>";
    }
}


class Car extends Vehicle
{
    public $model;

    public function __construct($brand, $color, $model)
    {
        // Calling the parent class constructor to set brand and color
        parent::__construct($brand, $color); // 'parent::' acts as 'super' keyword from java lang. it point to the parent calss variable or methods.
        $this->model = $model;
    }

    public function carDetails()
    {
        echo "This Car is a  {$this->color} {$this->brand} {$this->model} <br>";
    }
}

$car = new Car("Tesla", "White", "Model Y");

echo $car->carDetails(); //This Car is a White Tesla Model Y

//we can access the honk() method from child method of Vehicle which is Car.
echo $car->honk();

$veh = new Vehicle("Toyota", "Red"); //if i modify the variables(brand amd color) in parent then access from child it does not change in child class.
echo $car->carDetails(); //This Car is a White Tesla Model Y (it still shows this.)
