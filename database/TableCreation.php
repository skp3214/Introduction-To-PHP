<?php 

$servername="localhost";
$username="root";
$password="";
$dbname="test";

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Connection Failed: ".$conn->connect_error);
}

echo"Connected Successfully";

$sql="CREATE TABLE IF NOT EXISTS fruits(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    color VARCHAR(30) NOT NULL,
    price DECIMAL(5,2) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if($conn->query($sql)===TRUE){
    echo"Table created successfully";
}else{
    echo"Error creating table: ".$conn->error;
}
$conn->close();