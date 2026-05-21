<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "student_db";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    echo "Connection failed";
} else {
    echo "Connection successful<br>";
}

$id = 9;
$distance = 765432;
$data = "student_data";

$sql = "SELECT * FROM student_data";

$result = $conn->query($sql);

if ($result === true $result->num_rows > 0) {
    echo "Data selected successfully<br>";

    
} else {
    echo "Error: " . $conn->error;
}

$conn->close();

?>