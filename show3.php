<html>
<head>
<style>
.button {
  background-color: #4CAF50;
  border: none;
  color: pink;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
<title>ITF Lab</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Hello</title>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'itflabb.mysql.database.azure.com', 'mail@itflabb', 'apissara080643@', 'ITFLab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>
<table width="600" border="1">
  <tr>
    <th width="100"> <div align="center">ชื่อ</div></th>
    <th width="350"> <div align="center">น้ำหนัก </div></th>
    <th width="150"> <div align="center">ส่วนสูง </div></th>
    <th width="150"> <div align="center">bmi </div></th>
    <th width="150"> <div align="center">Edit </div></th>
  </tr>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td><?php echo $Result['ชื่อ'];?></div></td>
    <td><?php echo $Result['น้ำหนัก'];?></td>
    <td><?php echo $Result['ส่วนสูง'];?></td>
    <td><?php echo $Result['bmi'];?></td>
    <td><a href="edit.php?ID=<?= $Result["ID"]; ?>" class="button">Edit</a></td>
  </tr>
<?php
}
?>
</table>
<?php
mysqli_close($conn);
?>
<a href="form.html" class="btn btn-primary">เพิ่ม</a>
</body>
</html>
