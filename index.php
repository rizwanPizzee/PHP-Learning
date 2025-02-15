<?php
$name = 'John'; //string
echo $name; //John

echo "<br>";
//when working with Double quotes.
echo "Hello! {$name} <br>"; // Hello John 
echo "Hello! {$name} {$name} <br>"; //Hello John John

//when working with Single quote.
echo 'Hello!' . $name; // Hello John 
echo "<br>";
echo 'Hello!' . $name . $name; //Hello John John

echo "<br>";

$fruits = "Apple";
$quantity = 6;
$price = 4.99;
$total = null;

echo "Hi! {$name} you have orderd {$quantity} {$fruits}s <br>";
$total = $quantity * $price;
echo "Your total is \${$total}"; //in this type of scenario there must be backword slash before $ sign (used as escape character), 
