<!--
    Associative Array = it is similar to array but it is an array made of key=>value pairs.

    An associative array in PHP is an array that uses named keys (strings) instead of numeric indexes. 
    Each key in the array is associated with a specific value

    Associative Array CANNOT store functions directly

    Associative array declaration
    $array_name = array($key=> $value);

    Accessing by index
    echo $array_name[$key];

    Looping through data
    foreach ($array_name as $key => $value) {
        echo "$key: $value <br>";
    }
  -->
<?php

$capitals = array(
    "USA" => "Washington D.C",
    "Pakistan" => "Islamabad",
    "India" => "New Delhi",
    "Afghanistan" => "Kabul"
);

//Accessing by index
echo $capitals["USA"] . '<br>'; //"Washington D.C"
echo $capitals["Pakistan"] . '<br>'; //"Islamabad"
echo $capitals["India"] . '<br>'; //"New Delhi"
echo $capitals["Afghanistan"] . '<br>'; //"Kabul"

echo "<br>";


//Result
// USA capital is Washington D.C
// Pakistan capital is Washington D.C
// India capital is New Delhi
// Afghanistan capital is Kabul

echo "<br><b>Some Other Functions</b><br>";
//Some other functions
echo "Count: " . count($capitals) . "<br>"; // Count: 4
$capitals["USA"] = "Las Vegas"; //by this we can change the value of specific key now array is  ["USA" => "Las Vegas", "Pakistan" => "Islamabad", "India" => "New Delhi","Afghanistan" => "Kabul"].
$capitals["China"] = "Beijing"; //it will add new Key and value at the end of an array, ["USA" => "Las Vegas", "Pakistan" => "Islamabad", "India" => "New Delhi","Afghanistan" => "Kabul", "China" => "Beijing"].
array_pop($capitals); // remove key and value from last of array, ["USA" => "Las Vegas", "Pakistan" => "Islamabad", "India" => "New Delhi","Afghanistan" => "Kabul"].
array_shift($capitals); // remove key and value from start of array, ["Pakistan" => "Islamabad", "India" => "New Delhi","Afghanistan" => "Kabul"].
$keys = array_keys($capitals); //it returns an array of 'keys' only, thats why it is stored into a variable, keys are: ["Pakistan", "India", "Afghanistan"].
$values = array_values($capitals); //it returns an array of 'values' only, thats why it is stored into a variable, values are: ["Islamabad", "New Delhi", "Kabul"].
$capitals = array_flip($capitals); //it returns an array but it exchange the keys with values or vice versa the new $capitals becomes: ["Islamabad"=> "Pakistan" ,  "New Delhi" => "India", "Kabul" => "Afghanistan"].
$capitals = array_reverse($capitals); //it returns a reverse array the new $capitals becomes: [ "Kabul" => "Afghanistan",  "New Delhi" => "India", "Islamabad"=> "Pakistan"]. 

//Looping through data
foreach ($capitals as $key => $value) {
    echo "{$key} capital is {$value} <br>";
}

// Result
// Kabul capital is Afghanistan
// New Delhi capital is India
// Islamabad capital is Pakistan

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assosiative Array</title>
</head>

<body>
    <form action="index.php" method="POST">
        <br>
        <label for="country">Country</label>
        <input type="text" id="country" name="country" placeholder="Enter Country Name...">
        <input type="submit" value="Submit">
    </form>
    <?php
    $capitals = array(
        "USA" => "Washington D.C",
        "Pakistan" => "Islamabad",
        "India" => "New Delhi",
        "Afghanistan" => "Kabul"
    );

    $capital = $capitals[$_POST["country"]];
    if ($capital)
        echo "The Capital of {$_POST["country"]} is {$capital}.";
    else
        echo "Enter Correct Name of Country.";
    ?>
</body>

</html>