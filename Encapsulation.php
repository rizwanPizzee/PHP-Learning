<?php
/*
Encapsulation: By bundling the data (properties) and the methods (functions) that operate on the data within 
the same class, we achieve encapsulation. This prevents external code from directly interfering with the 
internal state of the object and ensures that any changes to the object's properties go through a defined 
interface.

OR

Encapsulation: This principle involves bundling data with the methods that operate on that data, 
    protecting it from outside interference and misuse.


Getters and setters are methods that provide controlled access to an object's private properties. 
    Instead of allowing external code to access or modify private data directly, you use these methods 
    as an interface.
Using getters and setters improves encapsulation by keeping the internal state hidden and safe from unintended 
    modifications, while still providing a way to interact with the data.

*/

class Person
{
    // Private properties can only be accessed within this class
    private $name;
    private $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
    //getter functions are used for getting the values for display.
    public function getName()
    {
        return $this->name;
    }
    public function getAge()
    {
        return $this->age;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setAge($age)
    {
        if ($age > 0) {
            $this->age = $age;
        } else {
            echo "Incorrect Age <br>";
        }
    }
}
// Creating an instance of Person
$person = new Person("Pizzee", 21);

// Accessing properties using getters
echo "Name: " . $person->getName() . "<br>";
echo "Age: " . $person->getAge() . "<br>";

// Attempting to modify name and age using the setters
$person->setName("Rizwan");
echo "New Name: " . $person->getName() . "<br>";

$person->setAge(22);
echo "New Age: " . $person->getAge() . "<br>";

//we can not directly modify the variables (like age or name), because these are private which can only be access within the calss.

//echo $person->name; //it will give an error because $name is private.


/*
Full Result:

Name: Pizzee
Age: 21
New Name: Rizwan
New Age: 22
*/