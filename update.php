<?php


    $id = $_GET['ide'];
    $w = $_GET['We'];
    $h = $_GET['He'];

    
?>

<html>
    <header>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
        body {
            background-color: rgb(243, 224, 188);
        }
    </style>
    </header>
    <body>
        <div class="container shadow p-3 mb-5 bg-white rounded">
            <h1>Edit Data</h1>
        </div>

        <div class="container shadow p-3 mb-5 bg-white rounded">
            <label for="exampleInputEmail1">Name <?php echo $_GET['N'] ?> </label>
            <form action="insert.php" method="GET">

                <div class="display-5 form-group">
                  <label for="exampleInputPassword1">Weight</label>
                  <input type="number" class="form-control" name="W" value="<?php echo $_GET['He'] ?>">
                </div>

                <div class="display-5 form-group">
                    <label for="exampleInputEmail1">Height</label>
                    <input type="number" class="form-control" name="H" value="<?php echo $_GET['We'] ?>">
                  </div>
                <div class="display-5 form-group">
                    <input type="number" class="form-control" name="id" value="<?php echo $_GET['ide'] ?>">
                  </div>

                <button type="submit" class="btn btn-primary">Submit</button>
              </form>

        </div>
    </body>
</html>
