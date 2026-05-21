<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "student_db";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed");
}

echo "Connection successful<br>";


$id = 20;
$new_distance = 500;
$new_data = 95;
//$update = "UPDATE student_data SET distance='$new_distance', data='$new_data' WHERE ID='1'";
$sql = "DELETE FROM student_data WHERE ID!='20'";
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Update error";
}

$conn->close();

?>