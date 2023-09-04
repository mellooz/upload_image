<?php 
require("connect.php");
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Display Data</title> 
    </head>
    <body>
    <p><h1>Display Data</h1></p>
    <p><hr></p>

    <div name="container">
      <button><a href="adduser.php" >Add User</a></button>
      <hr>

      <table border="1">
        <thead>
            <tr>
                <td>SI NO</td>
                <td>Name</td>
                <td>Mobile</td>
                <td>Image</td>
                <td>Operations</td>
            </tr>
        </thead>
        <tbody>
            <?php
              $sql = "SELECT *FROM `upload`";
              $result = mysqli_query($con , $sql);
              if($result){
                while($row = mysqli_fetch_assoc($result)){
                  $id = $row['id'];
                  $name = $row['name'];
                  $mobile = $row['mobile'];
                  $image = $row['image'];
                  echo "
                  <tr>
                  <td>$id</td>
                  <td>$name</td>
                  <td>$mobile</td>
                  <td><img src='$image'/></td>
                  <td>
                    <button><a href='update.php?updateid=$id'>Update</a></button>
                    <button><a href='delete.php?deleteid=$id'>Delete</a></button>
                  </td>
                  </tr>
                  ";
                }

              }
              
            ?>

    </body>
</html>