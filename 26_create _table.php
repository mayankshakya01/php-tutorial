<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "mayank";

$conn = mysqli_connect($servername, $username, $password, $database);
if ($conn) {
    echo "conncetion is successful<br>";
} else {
    echo "connection is failed";
}
$sql = "CREATE TABLE employees(name varchar(20),age int(11),mob_no varchar(13))";
$result = mysqli_query($conn, $sql);
if ($result) {
    echo " table was created successfully";
} else {
    echo "table was not created" . mysqli_error($conn);
}
