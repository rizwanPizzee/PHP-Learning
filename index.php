<!--
    Logical Operators: it combines the conditional statements.
    like if(condition1 && condition2)....
    
    && : When both conditions are true, execute block => if(condition1 && condition2)
    || : if one of the condition is true, execute block => if(condition1 || condition2)
    ! : it reverse the condtion, true if false, false if true, execute block => if(!condition) 
  -->
<?php

$temp = 10;

// &&(AND) logical operator
echo "<u><span>&&(AND) logical operator example.</span></u> <br>";

if ($temp >= 0 && $temp <= 35) {
    echo "The weather is good. <br>";
} else {
    echo "The weather is not good.<br>";
}

// ||(OR) logical operator
echo "<br><u><span>||(OR) logical operator example.</span></u> <br>";

if ($temp < 0 || $temp > 35) {
    echo "The weather is not good.<br>";
} else {
    echo "The weather is good.<br>";
}

// !(NOT) logical operator
echo "<br><u><span>!(NOT) logical operator example.</span></u> <br>";

$cloudy = true;
if (!$cloudy) {
    echo "it's not cloudy.<br>";
} else {
    echo "it's cloudy.<br>";
}


echo "<br><u><span>Movie ticket example.</span></u> <br>";

$child = true;
$senior = false;
$price = null;
if ($child || $senior) { //if any of the condition true, this block will execute.
    $price = 10;
} else {
    $price = 15;
}

echo "The movie ticket price is \${$price}.";



?>