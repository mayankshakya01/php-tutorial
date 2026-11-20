<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "mayank";
$conn = mysqli_connect($servername, $username, $password, $database);
if ($conn) {
    echo "connection is successful<br>";
} else {
    echo "connection is failed<br>";
}
