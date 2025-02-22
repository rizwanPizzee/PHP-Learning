<!--
    Switch statement: It is the replacement to using many elseif statements
                      it is more effecient, and less code to write.
  -->
<?php

//Example in if-elseif-else statement
$grade = 'C';

echo "<b>if-elseif-else statement example</b><br>";
if ($grade == "A") {
    echo "Excellent";
} elseif ($grade == "B") {
    echo "Best";
} elseif ($grade == "C") {
    echo "Good";
} elseif ($grade == "D") {
    echo "Not Bad";
} elseif ($grade == "F") {
    echo "Fail";
} else {
    echo "Please! Enter the correct grade.";
}


//Example in Switch statement
echo "<br><br><b>Switch statement example</b><br>";

switch ($grade) {
    case "A":
        echo "Excellent";
        break;  //without the 'break;', in some coditions all of the code before it returns by that piece of code
    case "B":
        echo "Best";
        break;
    case "C":
        echo "Good";
        break;
    case "D":
        echo "Not Bad";
        break;
    case "F":
        echo "Fail";
        break;
    default: //it is kind of 'else' statement. 
        echo "Please! Enter the correct grade.";
}
?>