<!--
    for loop: it repeat some code for certain amout of time.

    for(initial condition; ending condition; no. of increment/decrement){
        code....
    }
  -->
<?php

for ($i = 1; $i <= 10; $i++) {
    echo "{$i}. Hello! <br>";
}

echo "<br>";
//Increment(by 1) example
for ($i = 1; $i <= 10; $i++) {
    echo "{$i} <br>";
}

echo "<br>";
//Decrement(by 1) example
for ($i = 10; $i >= 1; $i--) {
    echo "{$i} <br>";
}

echo "<br>";
//We can also Increment/Decrement by other than 1
for ($i = 1; $i <= 15; $i += 2) { //increment by 2 
    echo "{$i} <br>";
}
?>