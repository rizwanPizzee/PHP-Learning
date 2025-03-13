<?php
include("database.php");
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <h1>Welcome to Home!</h1>


    <?php
    echo "Current Username: {$_SESSION['username']}<br><br>";
    $sql = "SELECT * FROM users";
    $result = mysqli_query($connection, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($rows = mysqli_fetch_assoc($result)) {
            echo "Username: {$rows['user']} <br>";
            echo "Registration Date: {$rows['date']} <br><br>";
        }
    }
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        session_destroy();
        header('Location: login.php');
        exit();
    }
    ?>

    <br>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        <input type="submit" value="Logout" name="logout">
    </form>

</body>

</html>

<?php
mysqli_close($connection);
?>