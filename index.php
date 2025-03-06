<!-- 
    function: a reusable block of code.
    it is declared similar to thr JavaScript.

    function fun_name(){ //function declaration
        code...
    }

    fun_name(); //function calling
-->

<?php
//function without parameter 
function fun1()
{ //function declaration
    echo "Hi! this is a function. <br>";
}

fun1(); //function calling.
fun1(); //function calling.

//function with parameters 
function name($name, $age)
{
    echo "Hi! {$name}, you are {$age} years old.<br>";
}

name("Pizzee", 22); //Hi! Pizzee you are 22 years old.
name("Nolan", 50); //Hi! Nolan you are 50 years old.


//we can return a value from a function and can display that as well.

function even($num)
{
    $even_no = $num % 2;
    return $even_no;
}
even(10); //this function calling will not show anything on screen becouse theer is nothing to display for , (directly)

echo even(10) . "<br>"; //it will display 0, because 10 % 2 = 0 (Remainder), so it is even.
echo even(11) . "<br>"; //it will display 1, because 11 % 2 = 1 (Remainder), so it is odd.


function pyth_theorem(int $base, int $perp) //if i write datatype with parameters it will never get the argument of any other datatype.
{
    $hypo = sqrt($base ** 2 + $perp ** 2);
    return $hypo;
}

echo pyth_theorem(3, 4) . "<br>"; //5

//echo pyth_theorem("base", "perp") . "<br>"; //it will give an error because, arguments are of different type than the parmeters.

echo "<b>String Functions </b> <br>"; //5

$username = "Pizzee";
echo "Username:  " . $username . "<br>"; //Pizzee

$username = strtolower($username); //strtolower(), it changes the string to lowercase.
echo "strtolower: " . $username . "<br>"; //pizzee

$username = strtoupper($username); //strtoupper(), it changes the string to uppercase.
echo "strtoupper: " . $username . "<br>"; //PIZZEE

$username = trim($username); //trim() removes the spaces around the string.
echo "trim: " . $username . "<br>";

$username = str_pad($username, 12, "!"); //PIZZEE!!!!!! (we put the 12, while there are only 6 ! marks, because $username size also count in that) //str_pad() adds the strinng or integer to the string after the value,  str_pad($variable_name, size, value_want_to_put);
echo "str_pad: " . $username . "<br>"; //PIZZEE!!!!!!


$date = "20-02-2025";
echo "<br>Date: " . $date . "<br>"; // 20-02-2025

$date = str_replace("-", "/", $date); //str_replace(), relaces the specific character or value with other value. str_replace(value_we_want_to_replace, value_replace_with, $variable_name)
echo "str_replace: " . $date . "<br>"; // 20/02/2025 


$username = "Pizzee";
echo "<br>Username: " . $username . "<br>"; //Pizzee
$username = strrev($username); //strrev() it reverses the order of string like abc->cba
echo "strrev(reverse): " . $username . "<br>"; //eezziP

$username = str_shuffle($username); //str_shuffle(), it shuffles the string in random order.
echo "str_shuffle: " . $username . "<br>"; //ieezPz (result changes every time.)

$username = "Pizzee";
$compare = strcmp($username, "Pizzee"); //strcmp() it comapares the two values with each other, if both are same it will return 0(true), other wise 1(false);
echo "strcmp(compare): " . $compare . "<br>"; //0 (means true, because $username(Pizzee) == 'Pizzee'.)

$length = strlen($username); //strlen() it counts the length of a string and return that.
echo "strlen(length): " . $length . "<br>"; //6 (beacuse Pizzee = 6 char...)

$date = "20-02-2025";
echo "<br>Date: " . $date . "<br>"; // 20-02-2025
$index = strpos($date, '-'); //strpos() returns the index no. of the value we are finding in the 2nd parameter
echo "strpos(finding specific value index): {$index}<br>"; //2 (it means on third index hiphen(-) is available)

$username = "Pizzee";
echo "<br>Username: " . $username . "<br>"; //Pizzee
$username = substr($username, 0, 3); //it returns the specific range of string
echo "substr(specific string range): " . $username . "<br>";

$username = "Pizzee Right";
echo "<br>Username: " . $username . "<br>";
$firstname = substr($username, 0, 6); //Pizzee
echo "firstname: {$firstname}<br>";
$lastname = substr($username, 6, 11); //Right
echo "lastname: {$lastname}<br>";

$username = "Pizzee Right Way";
echo "<br>Username: " . $username . "<br>";
$username = explode(" ", $username); //explode() converts the string(2nd parameter) into an array after the first parameter value in string

foreach ($username as $name) {
    echo "{$name} <br>"; //at 0 index: Pizzee, at 1 index: Right, at 2 index: Way
}

$username = array("Pizzee", "Right", "Way");
$username = implode(" ", $username); //it converts the array into a sring with the seperation of first parameter(it can be space, -, / etc).
echo "<br>implode: {$username}"; //Pizzee Right Way