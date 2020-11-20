<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'itflabb.mysql.database.azure.com', 'mail@itflabb', 'apissara080643@', 'ITFLab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$ID = $_GET['ID'];
$sql = "delete from guestbook where ID = $ID";


if (mysqli_query($conn, $sql)) {
    header('location:show2.php');
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

mysqli_close($conn);
?>
