<!-- 
$_GET, $_POST:  these are special variables , use for collecting data from HTML Forms, which then sent to
                a php file, using 'action' attribute in <form> tag. 
                 example: <form action="example_file.php" method="get">

$_GET:Data is appended in URL
      Not Secure
      Data Limit
      Better for searching in page

$_POST:Data is packaged inside the body of HTTP request.
      More Secure than $_GET
      No Data Limit
      Better for submitting credentials.


$_GET Example
-->

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_GET and $_POST</title>
</head>

<body>
    <h2>$_GET Example</h2>
    <form action="index.php" method="get"> <!-- action="index.php" it shows where we are sending our data, right now we are sending our data to the same file-->
        <label for="username">User Name</label><br>
        <input type="text" name="username"><br>
        <label for="password">Password</label><br>
        <input type="password" name="password"><br>
        <input type="submit" value="Log In">
    </form>

    <?php
    //Note: $_GET and $_POST variables are like array type, they store the data as indexes like below
    //thats why we write 'name' attribute in <input> tag
    echo "username: {$_GET["username"]} <br>";
    echo "Password: {$_GET["password"]} <br>";
    ?>

</body>

</html>

<!-- The problem while using the $_GET/ 'get method' with form is that 
whatever we write the username and password it will be shown in the URL, which is the security risk
like http://localhost:3000/index.php?username=Rizwan&password=Mrizwan12345
so thats why we use this for Search results.


$_POST Example -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET and POST</title>
</head>

<body>
    <h2>$_POST Example</h2>
    <form action="index.php" method="post">
        <label for="username">User Name</label><br>
        <input type="text" name="username"><br>
        <label for="password">Password</label><br>
        <input type="password" name="password"><br>
        <input type="submit" value="Log In">
    </form>

    <?php
    echo "username: {$_POST["username"]} <br>";
    echo "Password: {$_POST["password"]} <br>";
    ?>

</body>

</html>

<!-- Whatever we write the username and password it will never be shown in the URL, 
like http://localhost:3000/index.php/
so thats why we use this for submitting credentials. -->

<!-- Real Life Example -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laptop House</title>
</head>

<body>
    <h2>Laptop Example</h2>
    <form action="index.php" method="post">
        <label for="quantity">Quantity:</label>
        <input type="text" name="quantity" placeholder="Enter Quantity">
        <input type="submit" value="Total">
    </form>
    <?php
    $quantity = $_POST['quantity'];
    $price = 270;
    $total = null;
    $total = $quantity * $price;
    echo "Your Total is: {$quantity} Laptop/s x \${$price} = \${$total}"
    ?>

</body>

</html>