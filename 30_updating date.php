<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "mayank";
$conn = mysqli_connect($servername, $username, $password, $database);
$sql = "UPDATE employees SET age=30 WHERE name='nikhil'";
$result = mysqli_query($conn, $sql);
if ($result) {
    echo "Data updated successfully<br>";
}
