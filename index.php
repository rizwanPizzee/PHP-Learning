<!--
Table creation:
1. go to Databases(Top Bar), Select the databse
2. Write the name of table and no. of columns. 
3. Now insert the columns name, types, Default Values(like date is CURRENT_TIMESTAMP), key.
4. if we have an id we can auto increment that by enabling the A_I checkbox.
5. Click the Save Button (Now your empty table is ready).

syntax for values insertion:
    INSERT INTO tabel_name (column1, column2, ...) VALUES ('value1', 'value2', ...)

    mysqli_query($connection, $sql);//this function is use for inserting te data to tables in database, 
                                    first argument is for connection for database, 2nd argument is the query, that we are sending.

we can insert data into table by using the below steps.
-->
<?php
include("database.php");

/*
this is without hashing 
 $sql = "INSERT INTO users (user, password) 
             VALUES ('Pizee', 'piz13')";
*/

$username = "Rizwan Pizzee";
$password = "rizwan pizzee123";
$hash = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (user, password)
            VALUES('$username', '$hash')";

try {
    mysqli_query($connection, $sql);
    echo "User is now registered";
} catch (mysqli_sql_exception) {
    echo "Error! while entering the data";
}

mysqli_close($connection);
?>