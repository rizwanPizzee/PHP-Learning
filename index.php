<!--
    Array = a "variable" which can hold more than one type of values, or multiple values of same type.

    array(); function is used for array data type variable

    $arrayName = array(value1, value2, ... , valueN);
  -->
<?php
$cars = array("Land Crusier", "Fortuner", "E-Tron", "Sonata", "Range Rover");

//echo $cars; // it will give an error(Warning: Array to string conversion), because we can not directly display or use or access array.

//solution 1: we can call by index
echo $cars[2] . "<br>"; // "E-Tron";
echo $cars[0] . "<br>"; //"Land Crusier"

//solution 2: Use foreach() loop to display each value
echo "<br><b>foreach loop <br></b>";
foreach ($cars as $car) { //it will display each value of array.
    echo $car . "<br>";
}

//some other functions of array
echo "<br><b>some other functions of array <br></b>";

echo count($cars) . "<br>"; //count() , counts the length of array. like 5.

//we can add some value at specific index or can change the value of a specific index value.
$cars[0] = "F1"; // new car array be like ["F1", "Fortuner", "E-Tron", "Sonata", "Range Rover"].
array_push($cars, "Cybertruck"); //array_push() adds the value at the end of array like // new car array be like ["F1", "Fortuner", "E-Tron", "Sonata", "Range Rover", "Cybertruck"].
array_pop($cars); //array_pop() removes the last value of an array like // new car array be like ["F1", "Fortuner", "E-Tron", "Sonata", "Range Rover"].
array_shift($cars); //array_shift() removes the first value of an array like // new car array be like ["Fortuner", "E-Tron", "Sonata", "Range Rover"].
$cars = array_reverse($cars); //array_reverse(), it returns a revers array, so thats why we store it into another variable.


foreach ($cars as $car) { //it will display each value of array.
    echo $car . "<br>";
}
?>