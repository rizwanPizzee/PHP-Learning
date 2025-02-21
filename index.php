<!-- Math Functions -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="post">
        <label for="num1">x:</label>
        <input type="text" name="num1"><br>
        <label>Note: use 'y' only for Power, Max and Min functions</label><br>
        <label for="num2">y:</label>
        <input type="text" name="num2"><br>
        <input type="submit" value="Total">
    </form>
    <?php
    $x = $_POST["num1"];
    $y = $_POST["num2"] ? $_POST["num2"] : 1; //ternary operator is used  becoz, when there is no value in y variable y should be 1.
    $absNum = abs($x); //Absolute function (abs();) returns the value without any sign, $x =-455; result= 455
    $roundNum = round($x); //Round Function use for convering decimal number to the nearest whole number like 1.45 = 1, 5.67 = 6.
    $floorNum = floor($x); //Floor function convert the decimal number to the previous whole number, like 1.22 =1, 4.87 = 4.
    $ceilNum = ceil($x); //Ceiling function convert the decimal number to the next whole number, like 1.22 =2, 4.87 = 5.
    $sqrtNum = sqrt($x); //Square Root Function take the square root of any number like sqrt(4) = 2
    $powNum = pow($x, $y); //Power function, use: X^y= 2^4 = 16; where x = 2 and y = 4.
    $maxNum = max($x, $y); //Max function is use for finding the maximum value between multiple variables like x, y, z etc.
    $minNum = min($x, $y); //Min function is use for finding the minimum value between multiple variables like x, y, z etc.
    $piNum = pi(); //Pi Function return the value of pi constant, we can use like $total = pi() * 3; => 9.424776....
    $randNum = rand(0, 100); //Random Function returns the random num between the argument givent to the function 

    echo "Absolute = {$absNum} <br>";
    echo "Round = {$roundNum} <br>";
    echo "Floor = {$floorNum} <br>";
    echo "Ceil = {$ceilNum} <br>";
    echo "Square Root = {$sqrtNum} <br>";
    echo "Power = {$powNum} <br>";
    echo "Max = {$maxNum} <br>";
    echo "Min = {$minNum} <br>";
    echo "Pi = {$piNum} <br>";
    echo "Random (0-100) = {$randNum} <br>";
    ?>
</body>

</html>