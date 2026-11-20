<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "mayank";
$conn = mysqli_connect($servername, $username, $password, $database);
$sql = "SELECT * FROM employees";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
if ($num > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['name'];
        echo "|";
        echo $row['age'];
        echo "|";

        echo $row['mob_no'];

        echo "<br>";
    }
}
