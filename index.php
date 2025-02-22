<!--
    while loop : A while loop is a control flow statement that repeatedly executes a block of code 
                as long as a specified condition remains true. 

                It is used when the number of iterations is not known in advance 
                and depends on a condition.

    while(condition){ //the condition must be true to execute the inner block of code
        code...

        increment/decrement condition;
    }
  -->
<?php

$counter = 3;
while ($counter <= 10) {
    echo "{$counter}. Hello <br>";
    $counter++;
}

echo "<br>";

$number = 9;
while ($number < 10) {  //it will results some time differently, becouse if the $number from rand() less than 10 it will execute again, until not greater than 9.
    $number = rand(1, 15);
    echo "Number: $number <br>";
}


?>