<?php
$servername = "localhost";
$username = "root";
$password = "";

// create connection
$connection = mysqli_connect($servername, $username, $password);
if (!$connection) {
    echo "your connection is failed";
} else {
    echo "your connection is successfully";
}
echo "<br>";
// create database
$database = "CREATE DATABASE  mayank";
// yaha mysqli_query function  sql ki query ko exicute karne ke liye use hota hai
$result = mysqli_query($connection, $database);

if ($result) {
    echo "your database waes created successfully";
} else {
    echo "WE " . mysqli_error($connection);
}
