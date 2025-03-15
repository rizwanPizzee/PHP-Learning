<?php

/*
Abstraction: Abstraction allows you to create complex systems while hiding unnecessary details from the user, 
    focusing on essential features.
Abstraction lets you define a common interface while deferring the specific implementation to subclasses. 
    This makes your code easier to extend and maintain by focusing on the essential features without exposing 
    the implementation details.

From below example, some important info
The class Shape is declared as abstract, meaning you cannot create an instance of it directly. It contains an 
    abstract method calculateArea(), which forces any subclass to implement this method. This hides the
    specific details of how the area is calculated.

*/

abstract class Shape
{
    // Abstract method to calculate the area of the shapes.
    // This method must be implemented by any class that extends Shape.
    abstract public function calculateArea();

    // A concrete method
    public function describe()
    {
        return "Area: " . $this->calculateArea() . ".<br>";
    }
}

class Rectangle extends Shape
{
    private $width;
    private $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea()
    {
        return $this->width * $this->height;
    }
}

class Circle extends Shape
{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    //abstract method for a circle
    public function calculateArea()
    {
        return pi() * ($this->radius * $this->radius);
    }
}

//Abstract class will give an error if we want to creat an instance of that class.
//$shape = new Shape(); //Uncaught Error: Cannot instantiate abstract class Shape

// Creating instances of Rectangle and Circle
$rectangle = new Rectangle(10, 5);
$circle = new Circle(7);

// Displaying the area using the describe method inherited from Shape
echo $rectangle->describe(); // Area: 50.
echo $circle->describe();    //Area: 153.9380400259.
