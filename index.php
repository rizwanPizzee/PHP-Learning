<!--
    if statement: if statement is used to execute code based on a condition. 
                If the condition evaluates to 'true', the code inside the 'if' block runs. 
                otherwise, it is skipped.
    Note: The order of if and else-if statements matter, when there are mutiple statements/conditions.
  -->
<?php
//if we do $age ='asd'; (string)
//PHP code has an issue because $age is assigned the value 'asd' (a string). 
//When you compare a string with a number in PHP, it can lead to unexpected behavior.

// Potential Issues
// 1. $age = 'asd'; => The semicolon inside quotes makes $age a string, not a number.
// 2. if ($age > 80) => Comparing a string with a number can cause unexpected type coercion.
// 3. The else block never executes because one of the previous conditions will always be true.

$age = 11;

if ($age >= 80) {
    echo "You are too old, please don't apply";
} elseif ($age > 18) {
    echo "You can apply for Driving License.";
} elseif ($age <= 0) {
    echo "Enter the  age greater than 0";
} elseif ($age <= 18) {
    echo "You can not apply for Driving License, your age should be 18+.";
} else {
    echo "Error!, Enter the correct value";
}

echo "<br>";

//Ternary Operator (Short Form)
$result = ($age >= 80) ? "You are too old, please don't apply" : (($age > 18) ? "You can apply for Driving License." : (($age <= 0) ? "Enter the  age greater than 0" : (($age <= 18) ?  "You can not apply for Driving License, your age should be 18+." : ("Error!, Enter the correct value"))));
echo $result;

?>