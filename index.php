<?php
include("database.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>

<body>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        <h1>Welcome to Sign Up Page</h1>
        <label for="username">Username</label>
        <input type="text" name="username" id="username"><br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password"><br>
        <input type="submit" value="Register" name="signup">
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
        if (empty($username)) {
            echo "Enter Username.";
        } elseif (empty($password)) {
            echo "Enter Password.";
        } else {
            $hash = password_hash($password, PASSWORD_DEFAULT);

            try {
                $sql = "INSERT INTO users (user, password)
                    VALUES ('$username', '$hash')";

                mysqli_query($connection, $sql);

                echo "You are now registered.";
                header("Location: login.php");
                exit();
            } catch (mysqli_sql_exception) {
                echo "The name has already been taken.";
            }
        }
    }
    ?><br><br>
    <a href="login.php">Login here</a>
</body>

</html>

<?php
mysqli_close($connection);
?>