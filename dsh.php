<?php
$conn = mysqli_connect("localhost","root","","student_db");
$query = mysqli_query($conn,"SELECT * FROM student_data");
?>

<!DOCTYPE html>
<html>
<head>
<style>
body{
    font-family:Arial;
    background:#f4f4f4;
    padding:20px;
}

table{
    width:60%;
    margin:auto;
    border-collapse:collapse;
    background:white;
}

th{
    background:blue;
    color:white;
}

th,td{
    border:1px solid #000;
    padding:10px;
    text-align:center;
}
</style>
</head>

<body>

<table>
<tr>
    <th>ID</th>
    <th>distance</th>
    <th>data</th>
    <th>time</th>   
</tr>

<?php while($row = mysqli_fetch_assoc($query)){ ?>
<tr>
    <td><?php echo $row['ID']; ?></td>
    <td><?php echo $row['distance']; ?></td>
    <td><?php echo $row['data']; ?></td>
     <td><?php echo $row['time']; ?></td>
</tr>
<?php } ?>

</table>

</body>
</html>