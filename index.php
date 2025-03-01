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
        <input type="radio" name="credit_card" value="Visa">Visa <br>
        <input type="radio" name="credit_card" value="Mastercard">Mastercard <br>
        <input type="radio" name="credit_card" value="American Express">American Express <br>
        <input type="submit" value="confirm" name="confirm">
    </form>

    <?php

    $credit_card = null;

    if (isset($_POST['confirm'])) {

        if (isset($_POST['credit_card'])) { //it checks if any credit card is selected or not
            $credit_card = $_POST['credit_card'];
            echo "You have selected the " . $credit_card . " Credit Card.";
        } else {
            echo "Please! make a selection.";
        }
    }
    ?>
</body>

</html>