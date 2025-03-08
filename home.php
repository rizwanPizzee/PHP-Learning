<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <h1>Home Page</h1>
    <p>This is all about Home page.</p>
    <form action="home.php" method="post">
        <input type="submit" value="Logout" name="logout">
    </form>
    <p>Session Data</p>

    <?php
    echo "Username: " . $_SESSION['username'] . "<br>";
    echo "Password: " . $_SESSION['password'] . "<br>";

    if (isset($_POST['logout'])) {
        session_destroy();
        header("Location: index.php");
    }
    ?>
</body>

</html>