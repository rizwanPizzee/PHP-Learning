<!--
    isset(): This function returns TRUE, if a variable is declared and not null.
    in simple words isset() returns true, if a variable is set(mean variable has some value) or not null, otherwise returns true.

    empty(): This function returns TRUE, if a variable is not declared or false or null or "" (empty string).
    in simple words empty() returns true, if a variable is empty or not declared, otherwise returns true.

    both functions are use for testing (some cases).

    in PHP if we 'echo' some thing and it displays '1' it means true and if it displays nothing it means false.
  -->
<?php

$name = "Pizzee";

echo isset($name) . "<br>"; // 1 (true) (which means $name is declared and has some value, not null)
echo isset($no_name); // it will display nothing (means false) because $no_name is  not declared.

echo empty($name);  // it will display nothing (means false) because $name is declared and not empty.
echo empty($no_name) . "<br>"; // 1 (true) (which means $no_name is not declared or null or empty).

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>isset() & empty()</title>
</head>

<body>
    <br>
    <form action="index.php" method="POST">
        <label for="username">Username</label>
        <input type="text" name="username"><br>
        <label for="password">Password</label>
        <input type="password" name="password"><br>
        <input type="submit" value="Log-In" name="login">
        <br>

        <!-- initially only login button has the value, and not other two input have any value -->
    </form>

    <?php
    //echo isset($_POST['login']); //when click on login button it will check if login button is set or not.

    if (isset($_POST['login'])) { //if it returns 1(true), then the code below will execute.
        $username = $_POST['username'];
        $password = $_POST['password'];

        if (empty($username)) { //if it returns false (displays nothing)), then the code below will execute.
            echo "Please! Enter the username";
        } elseif (empty($password)) {
            echo "Please! Enter the password";
        } else {
            echo "Welcome {$username}! <br>";
        }
    }

    //all data retrival from form
    foreach ($_POST as $key => $value) {
        echo "{$key} = {$value} <br>";
    }

    //display/Full result
    // Welcome Pizzee!
    // username = Pizzee
    // password = pze123
    // login = Log-In
    ?>
</body>

</html>