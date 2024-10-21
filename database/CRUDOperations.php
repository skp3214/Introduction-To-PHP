<?php 

$servername="localhost";
$username="root";
$password="";
$dbname="fruit";

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Connection Failed: ".$conn->connect_error);
}

echo"Connected Successfully";

// $sql="Insert into fruits(name,color,price) values('Orange','Orange',3.5)";

$sql = "DELETE from fruits where id=1";

if ($conn->query($sql) === TRUE) {
    if ($conn->affected_rows == 0) {
        echo "No data found with id 1";
    } else {
        echo "Data deleted successfully";
    }
} else {
    echo "Error deleting data: " . $conn->error;
}