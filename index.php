<!-- 
sanitization and validation are essential techniques to secure user input and prevent security vulnerabilities 
like SQL injection, XSS, and data corruption

Cross-Site Scripting (XSS) is a type of security vulnerability in web applications 
where an attacker injects malicious scripts (usually JavaScript) into a website. 
When a user visits the infected page, the script executes in their browser, 
allowing the attacker to steal data, manipulate page content, or even take control of the user's session.

Sanitization: It cleans input data by removing or encoding unwanted characters. 
              This ensures the data is safe to process or store.

Validation: it ensures the input meets a specific format (e.g., valid email, integer, URL, etc.).

syntax: $storing_variable = filter_input(INPUT_POST/GET, "index/value of input", FILTER_VALIDATE/SANITIZE_INT/EMAIL/CHAR);

Best Practices
1. Always Sanitize Before Validating
    Remove unwanted characters before checking the format.
2. Use Prepared Statements for Databases
    Never directly insert user input into SQL queries.

some special characters are <, >, &, ", ', /.
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanitize and Validate</title>
</head>

<body>
    <form action="index.php" method="post">
        <label>Username</label>
        <input type="text" name="username"><br>
        <label>Age</label>
        <input type="text" name="age"><br>
        <label>Email</label>
        <input type="text" name="email"><br>
        <input type="submit" value="Login" name="login">
    </form>
    <?php
    if (isset($_POST['login'])) {
        // $username = $_POST['username']; //instead of that we sanitize the texh/char , because some one can write malicious script in the fields
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_FULL_SPECIAL_CHARS); //filter_input(type(POST or GET), index, filter of sanitization(like char or number or email));, FILTER_SANITIZE_SPECIAL_CHARS: it filter out the special characters/scripts and only shows/get the general chars.
        echo "{$username} <br>";

        //$age = $_POST['age'];
        //$age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_NUMBER_INT); //FILTER_SANITIZE_NUMBER_INT, it filter out the special chars and scripts.
        $age = filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT); //FILTER_VALIDATE_INT, it only returns the numbers othrewise an empty string 

        echo "{$age} <br>";

        //$email = $_POST['email'];
        //$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL); //FILTER_SANITIZE_EMAIL, it oly shows the email and filter out the scripts.
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL); //FILTER_VALIDATE_ENAIL, it only returns the email(which must contains @, . and pre and post chars) othrewise an empty string
        echo "{$email} <br>";
    }
    ?>
</body>

</html>