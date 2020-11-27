<html>

  <head>
    <title>ITF finall</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>  
  </head>

<body>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>     

<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'itflabb.mysql.database.azure.com', 'mail@itflabb', 'apissara080643@', 'databasee', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM bmiDB');
?>
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="show.php">LAB Database ITF</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="show.php">Show</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="form.html">Insert</a>
        </ul>
      </div>
    </div>
  </nav>
  <br>
  <br>
  <br>
  <br>
<div class="container">
<h1 class="display-1">Database!!!</h1>
</div>
  
<div class="container">
<table class="table table-bordered">
  <thead>
    <tr class="bg-success">
      <th> <div align="center">ชื่อ</div></th>
      <th> <div align="center">น้ำหนัก</div></th>
      <th> <div align="center">ส่วนสูง</div></th>
      <th> <div align="center">BMI</div></th>
      <th> <div align="center">แก้ไข</div></th>
    </tr>
  </thead>
  
  <tbody>
<?php while($Result = mysqli_fetch_array($res))
{?>
    <tr>
      <td align="center"><?php echo $Result['name'];?></td>
      <td align="center"><?php echo $Result['weight'];?></td>
      <td align="center"><?php echo $Result['height'];?></td>
      <td align="center"><?php echo $Result['bmi'];?></td>
      <td align="center"> 
        <form action="update.php" method="GET">
                <div class="display-5 form-group">
                  <input type="hidden" class="form-control" name="We" value="<?php echo $Result['weight']; ?>">
                </div>
                <div class="display-5 form-group">
                    <input type="hidden" class="form-control" name="He" value="<?php echo $Result['height']; ?>">
                 </div>
                <div class="display-5 form-group">
                    <input type="hidden" class="form-control" name="ide" value="<?php echo $Result['id']; ?>">
                 </div>
                <button type="submit" class="btn btn-primary">Submit</button>
         </form>
      </td>
    </tr>
<?php
}
?>
  </tbody>

</div>
<?php
mysqli_close($conn);
?>
</body>
</html>
