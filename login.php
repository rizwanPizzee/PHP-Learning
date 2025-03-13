<?php
include("database.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        <h1>Welcome to Login Page</h1>
        <label for="username">Username</label>
        <input type="text" name="username" id="username"><br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password"><br>
        <input type="submit" value="Login" name="login">
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


            $sql = "SELECT * FROM users WHERE user = '$username'";
            $result = mysqli_query($connection, $sql);
            if (mysqli_num_rows($result) > 0) {
                $rows = mysqli_fetch_assoc($result);
                if (password_verify($password, $rows['password'])) {
                    $_SESSION['username'] = $username;
                    header("Location: home.php");
                    exit();
                } else {
                    echo "Username or Password is  incorrect<br>";
                }
            } else {
                echo "There is no data";
            }
        }
    }
    ?>
    <br><br>
    <a href="index.php">Create an Account</a>

</body>

</html>

<?php
mysqli_close($connection);
?>