<?php
$x = 11;
$y = 3;

//Basic Arithmetic Operators (+ - * / ** %)
echo "Basic Arithmetic Operators (+ - * / ** %) <br>";
//Sum
$sum = $x + $y;
echo "SUM: {$sum} <br>"; //14

//Subtraction
$sub = $x - $y;
echo "SUBTRACTION: {$sub} <br>"; //8

//Multiplication
$mul = $x * $y;
echo "MULTIPLICATION: {$mul} <br>"; //33

//Division
$div = $x / $y;
echo "DIVISION: {$div} <br>"; //3.666667

//Power (**)
$pow = $x ** $y;
echo "POWER: {$pow} <br>"; //1331

//Mod / Remainder (%)
$rem = $x % $y;
echo "REMAINDER: {$rem} <br>"; //2

//Basic Increment/Decrement Operators
echo "<br>Basic Increment/Decrement Operators <br>";
$counter = 10;
$counter++; //or $counter = $counter + 1; both increment $counter by 1, counter = 11;
echo "One Plus: {$counter} <br>";

$counter = 10;
$counter--; //or $counter = $counter - 1; both decrement $counter by 1, counter = 9;
echo "One Minus: {$counter} <br>";

$counter = 10;
$counter += 3; //or $counter = $counter + 3; both increment $counter by 3, counter = 13;
echo "Three Plus: {$counter} <br>";

$counter = 10;
$counter -= 3; //or $counter = $counter - 3; both decrement $counter by 3, counter = 7;
echo "Three Minus: {$counter} <br>";

//Operator Precedence (Priority)
//Check from left to right and solve the expression from left to right but with order
//First: () within parenthesis
//Second: ** Power
//Third: * / %
//Fourth: + -

echo "<br>Operator Precedence<br>";

$total = 1 + 2 - 3 * 4 / 5 ** 6;

echo "Total: {$total}";

//Explaination  
//$total = 1 + 2 - 3 * 4 / 5 ** 6;
//$total = 1 + 2 - 3 * 4 / 15625; (Power)
//$total = 1 + 2 - 12 / 15625; (Multiplication)
//$total = 1 + 2 - 0.000768; (Division)
//$total = 3 - 0.000768; (Addition)
//$total = 2.999232; (Subtraction)
