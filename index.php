<!--
Retrieving(SELECT) Data from database:

syntax:
    SELECT * FROM table_name; //it retrives all data from table
    SELECT * FROM table_name WHERE coulumn_name = 'data_you_want'; //it retrives the specific data


-->
<?php
include("database.php");

//$sql = "SELECT * FROM users WHERE user = 'Pizzee'"; //for specific data retrieval

$sql = "SELECT * FROM users"; //for full table data retrieval.
try {
    $result = mysqli_query($connection, $sql); //it will return an associative arry , because we are reteriving data, thats why we stored into a variable.
    if (mysqli_num_rows($result) > 0) {  //mysqli_num_rows(); i check rows, in data which we are retrieving

        while ($rows = mysqli_fetch_assoc($result)) { //mysqli_fetch_assoc(), it fetches the next row from the result, as associative array. 
            echo $rows['id'] . "<br>";
            echo $rows['user'] . "<br>";
            echo $rows['password'] . "<br>";
            echo $rows['date'] . "<br>";
        }
    } else {
        echo "There is no data";
    }
} catch (mysqli_sql_exception) {
    echo "Error! while retriving data";
}

mysqli_close($connection);
?>