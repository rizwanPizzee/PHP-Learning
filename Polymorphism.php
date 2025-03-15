<?php
/*
Polymorphism: This enables a common interface for different data types, allowing methods to behave differently
    based on the object invoking them.

Below is an example that demonstrates polymorphism by using method overriding.
*/

class Animal
{
    //overridden by subclasses
    public function speak()
    {
        echo "Some generic sound<br>";
    }
}

class Dog extends Animal
{
    //override
    public function speak()
    {
        echo "Woof!<br>";
    }
}
class Cat extends Animal
{
    //override
    public function speak()
    {
        echo "Meow!<br>";
    }
}

$animal = new Animal();
$dog = new Dog();
$cat = new Cat();


//speak() method behaves differently for each class, but it is the same method, so it is called Polymorphism
$animal->speak(); //Some generic sound
$dog->speak(); //Woof!
$cat->speak(); //Meow!
