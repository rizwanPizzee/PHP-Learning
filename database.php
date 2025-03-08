<!-- 
    created this new file for handling database. 
    for connecting MySQL database,
    first we require to create the database.
    1. Database Creation.
    1.1. Go to http://localhost/phpmyadmin/
    1.2. Go to Databases.
    1.3. Create Database with any name and hit the 'Create' button.

    2. Connecting With database (create any file with 'php' extension like "database.php")
    *For connecting with database we require the following (these data can be obtained from, going to phpmyadmin->user accounts(Top bar)).
    2.1. Host name: $db_server = "localhost"; //for locally it is 'localhost'.
    2.2. User name: $db_user = "root"; //for locally it is 'root'.
    2.3. Password : $db_password = ""; //in most cases it is empty.
    2.4. Database Name : $db_name = "databaseName"; //This name is the one you set while creating the database.
    2.5. $connection = ""; // this variable is use for the connecting databse
    2.6. mysqli_connect($db_server, $db_user, $db_password, $db_name); //this function get the 4 arguments, but there order matters the most, this function is declared to the $connection generally.
    2.7. $connection = mysqli_connect($db_server, $db_user, $db_password, $db_name);
    2.8. error handling is used while working with databse connection, because if any thing happend during the connection, we have the ability to tackle that error with error handling(try catch).

    general mysql error: mysqli_sql_exception (this error arrise when our databse is diconnected) //we are working with mysqli extension.
-->

<?php
$db_server = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "businessdb";
$connection = "";
try {
    $connection = mysqli_connect($db_server, $db_user, $db_password, $db_name);
} catch (mysqli_sql_exception) {
    echo "Error! while connecting the Database";
}
if ($connection) {
    echo "You are connected!";
}
?>