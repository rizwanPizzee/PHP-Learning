<!-- 
 Session: $_SESSION superglobal variable used to store data of a user, to be used accross multiple pages.
        A user is assigned a session-id, a session is started.

        This allows us to preserve data such as user authentication status, 
        shopping cart contents, or preferences as the user navigates through different pages.

        Syntax:
        session is started with: session_start(); //should be enclosed in php tags before any code.

        session is destroyed with: session_destroy(); //should be enclosed in php tags.

        $_SESSION SuperGlobalVariable is used for storing the session values like Id, Username, Password ect.
        $_SESSION: is an associative array.

        header("Location: file_path.extention"); //header() funtion is used for jumping into another file.
        
        
        Example Below: Login(through index.php) and Logout(through home.php).
                        from index.php we will login and gathers the username and password, and displays on home.php from there we will logout.
        
        Note: from where(file) we are gathering the info, there must be session_start(); function and 
                where we are sending(file) also there should be the session_start(); fumction.
-->

<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>

<body>
    <h1>Login Page</h1>
    <form action="index.php" method="post">
        <label>Username: </label>
        <input type="text" name="username"> <br>
        <label>Password: </label>
        <input type="password" name="password"><br>
        <input type="submit" value="Login" name="login">
    </form>

    <?php
    if (isset($_POST['login'])) {
        if (!empty($_POST['username']) && !empty($_POST['password'])) {
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['password'] = $_POST['password'];
            header('Location: home.php');
        } else {
            echo "<br>Enter both the Username and Password.<br>";
        }
    }

    ?>
</body>

</html>