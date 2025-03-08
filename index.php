<!--
    hashing: it tranforming the sensitive data(like passwords), into letters, numbers 
            and/or symbols, via a mathmetical process(wich is similar to encryption).
            it hides the original data from 3rd parties.

    Syntax:

    password_hash($variable_want_to_hash, PASSWORD_DEFAULT); //PASSWORD_DEFAULT: is the deafult PHP, uses bcrypt algorithm for hashing.

    password_hash(); returns a string, it is better to be stored in a variable.

    password_verify($actual_passwod, $hash_password);//it returns boolean, it checks if the $actual_password(entered password) is equall to the $hash_password(that we encrypt using hash function). 
-->


<?php
$password = "pizzee123";

$hash = password_hash($password, PASSWORD_DEFAULT);

if (password_verify($password, $hash)) {
    echo "Correct Password!";
} else {
    echo "Incorrect Password!";
}
?>