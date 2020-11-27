<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'itflabb.mysql.database.azure.com', 'mail@itflabb', 'apissara080643@', 'ITFLab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$ชื่อ = $_POST['ชื่อ'];
$น้ำหนัก = $_POST['น้ำหนัก'];
$ส่วนสูง = $_POST['ส่วนสูง'];
$bmi = $น้ำหนัก/$ส่วนสูง**2;

$sql = "INSERT INTO databasee (name , weight , height) VALUES ('$ชื่อ', '$น้ำหนัก', '$ส่วนสูง')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>