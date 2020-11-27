<?php
        $conn = mysqli_init();
            mysqli_real_connect($conn, 'itflabb.mysql.database.azure.com', 'mail@itflabb', 'apissara080643@', 'databasee', 3306);
            if (mysqli_connect_errno($conn))
            {
                die('Failed to connect to MySQL: '.mysqli_connect_error());
            }

        $id = $_GET['id'];
        $w = $_GET['W'];
        $h = $_GET['H'];
        $bmi = ($w)/(($h/100)*($h/100));
        $sql = "UPDATE bmiDB SET  weight='$w' , height='$h' , bmi='&bmi',  link='$link' WHERE id=$id";
   
        if (mysqli_query($conn, $sql)) {
    header("location:show.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
        
  
        mysqli_close($conn);
        
?>
