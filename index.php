<!-- 
    $_SERVER: $_SERVER variable in PHP is a superglobal associative array that contains information 
            about headers, paths and script locations provided by the web server. 
            The entries in this array are created by web server.
            it Shows everything about the current web page environment.

    we can display everything about current webpage by

    foreach($_SERVER as $key => $value){
        echo $key . ": " . $value;
    }

    but must of things are not for beginners, so we use the

    $_SERVER['REQUEST_METHOD']: The HTTP method (GET, POST, etc.) used to access the page.
    $_SERVER['PHP_SELF']: The filename of the currently executing script.

    tip: it is good practice to wrap the $_SERVER['PHP_SELF'] in htmlspecialchars() function,
        because htmlspecialchars() function restrict the XSS(Cross Site Scripting).
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>

    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post"> <!-- instead of writing the current file name we do some php scripting for current file, so if anytime we change the file name, we should not think about to chnage the name of file here-->
        <label>Username: </label>
        <input type="text" name="username"><br>
        <input type="submit" value="Login" name="login">
    </form>

    <?php
    /*
    if (isset($_POST['login'])) {
        echo "Home Page!";
    }
    */

    if ($_SERVER['REQUEST_METHOD'] == "POST") { //it is more reliable than the above isset() option for login pages, beacause the page will not login until the method of the current page is 'POST', the deafault is 'GET'
        echo "Home Page!";
    }
    ?>

</body>

</html>


<?php
//echo $_SERVER['PHP_SELF]; //index.php
//echo $_SERVER['REQUEST_METHOD']; //GET (GET is default request method)
?>