<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

$conn = new mysqli($servername, $username, $password, $dbname);

$query="Insert into users (username,password) values('sachin','@qwerty3214')";
$conn->query($query);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>