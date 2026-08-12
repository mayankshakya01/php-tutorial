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
$sql = "INSERT INTO employees values('aryan',18,'9245673973')";
$result = mysqli_query($conn, $sql);
if ($result) {
    echo "data has been inserted";
} else {
    echo "data is not inserted";
}
