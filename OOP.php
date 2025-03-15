<?php
/*
OOP: Object-Oriented Programming (OOP) is a programming paradigm that organizes your code into classes and objects. 
    Instead of writing procedural code, where functions operate on data, OOP lets you bundle data (properties) and 
    behaviors (methods) into single units called classes.

Classes and Objects: A class is a blueprint for objects. You define the attributes (properties) and functions (methods) 
    that an object created from the class can have. An object is an instance of a class.

4 key pillars of OOP:

1. Encapsulation: This principle involves bundling data with the methods that operate on that data, 
    protecting it from outside interference and misuse.

2. Inheritance: allows a class to inherit properties and methods from another class, making it easier 
    to create specialized classes without duplicating code.

3. Polymorphism: This enables a common interface for different data types, allowing methods to behave differently
    based on the object invoking them.

4. Abstraction: Abstraction allows you to create complex systems while hiding unnecessary details from the user, 
    focusing on essential features.


    Simple Example of OOP
*/

//it is good practice to write the visibility modifiers (like public, protected, or private) for methods or properties.
class Car
{
    public $color;
    public $model;

    // Constructor method to initialize properties
    public function __construct($color, $model)
    {
        $this->color = $color; //there should be single $ sign on one side, like in this statement, we can only write $ with 'this' keyword rather than with both variable(color) and with 'this'.
        $this->model = $model;
    }

    //In PHP, the double underscore prefix (__) is used to denote special methods known as "magic methods."
    //__construct is a magic method that acts as a constructor, which means it is automatically invoked when an object is created from a class.

    public function display()
    {
        echo "Color: {$this->color}, Model: {$this->model}";
    }
}

// Creating an instance(object) of the Car class
$car = new Car('Red', 'Tesla Model Y');

echo $car->display(); //Color: Red, Model: Tesla Model Y
