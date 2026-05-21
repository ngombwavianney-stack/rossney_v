<?php

$conn = mysqli_connect("localhost","root","","Motion_db");

if(!$conn){
    die("Connection failed");
}

if(isset($_GET['motion'])){

    $motion = $_GET['motion'];

    $sql = "INSERT INTO Motion_data(Motion_Detected)
            VALUES('$motion')";

    if(mysqli_query($conn,$sql)){
        echo "Data inserted";
    } else {
        echo "Failed";
    }

}

?>