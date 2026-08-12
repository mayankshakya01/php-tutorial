<?php
echo "we are ready to connect to the database system <br> ";
// connecting to the database
$servername = "localhost";
$username = "root";
$password = "";

// here we create the connection
$connection = mysqli_connect($servername, $username, $password);
// die if connection is failed (die function is like exit function of python)
if (!$connection) {
    die("sorry bro you don't have access to the server: " . mysqli_connect_error());
}
echo "connection was successful";
