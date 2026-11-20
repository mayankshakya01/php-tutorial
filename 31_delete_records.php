<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "mayank";
$conn = mysqli_connect($servername, $username, $password, $database);
$sql = "DELETE FROM employees WHERE name='nikhil'";
$result = mysqli_query($conn, $sql);
$affeted = mysqli_affected_rows($conn);
echo $affeted;
if ($result) {
    echo "Data deleted successfully<br>";
}
