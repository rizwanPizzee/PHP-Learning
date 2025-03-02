<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio Button</title>
</head>

<body>
    <br>
    <form action="index.php" method="POST">
        <input type="checkbox" name="mercedes" value="mercedes">Mercedes <br>
        <input type="checkbox" name="rolls_royce" value="rolls_royce">Rolls Royce<br>
        <input type="checkbox" name="toyota" value="toyota">Toyota<br>
        <input type="checkbox" name="kia" value="kia">KIA<br>
        <input type="submit" value="confirm" name="confirm">
    </form><br>

    <?php

    if (isset($_POST['confirm'])) {
        if (isset($_POST['mercedes'])) {
            echo "You like Mercedes! <br>";
        }
        if (isset($_POST['rolls_royce'])) {
            echo "You like Rolls Royce! <br>";
        }
        if (isset($_POST['toyota'])) {
            echo "You like Toyota! <br>";
        }
        if (isset($_POST['kia'])) {
            echo "You like KIA! <br>";
        }
    }
    ?>
</body>

</html>