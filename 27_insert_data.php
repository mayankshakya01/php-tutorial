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
$sql = "INSERT INTO employees values('ayush',20,'9245678900')";
$result = mysqli_query($conn, $sql);
if ($result) {
    echo "data has been inserted";
} else {
    echo "data is not inserted";
}
