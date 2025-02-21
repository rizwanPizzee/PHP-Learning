<!-- Math Functions -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maths Formulas</title>
</head>

<body>

    <form action="" method="post">
        <label for="radius">Radius:</label>
        <input type="text" name="radius"><br>
        <input type="submit" value="Total">
    </form><br>
    <span><b>Sphere</b></span><br>

    <?php
    $radius = $_POST["radius"] ? $_POST["radius"] : 0;
    $circumference = null;
    $area = null;
    $volume = null;

    $circumference = 2 * pi() * $radius; // circumference = 2πr
    $circumference = round($circumference, 2); //it will round the decimal number upto 2 digit after decimal point.

    $area = pi() * pow($radius, 2); //area = π r^2
    $area = round($area, 2);

    $volume = 4 / 3 * pi() * pow($radius, 3); //volume = 4/3 π r^3
    $volume = round($volume, 2);

    echo "Circumference = {$circumference} cm <br>";
    echo "Area = {$area} cm^2 <br>";
    echo "Volume = {$volume} cm^3";
    ?>
</body>

</html>