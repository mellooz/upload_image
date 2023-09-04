<?php 

$s = 0;

require_once("./op.php");
require("./connect.php");

if(isset($_POST['submit'])){
    $name = $_POST['username'];
    $mobile = $_POST['mobile'];
    $image = $_FILES["file"];

    $x = $image["name"]; // like => image.png
    $y = $image["tmp_name"]; // path
    $sep = explode("." , $x);
    $ext = strtolower(end($sep));

    $extentions = ["jpg" , "png" , "jpeg"];

    if(in_array($ext , $extentions)){
        $upload_image = 'image/'.$x ;
        move_uploaded_file($y , $upload_image);
        $sql = "INSERT INTO `upload`(name , mobile , image) VALUES ('$name' , '$mobile' , '$upload_image')";
        $result = mysqli_query($con , $sql);

        if($result){
            $s = 1 ;
        }
    }

}
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>add user</title> 
    </head>
    <body>

    <p><h1>ADD USER</h1></p>
    <p><hr></p>

    <div name="container">   
     <form method="post" action="adduser.php" enctype="multipart/form-data" autocomplete="off"> 
     <?php operations("Username" , "username" , "" , "text"); ?>
     <?php operations("Mobile" , "mobile" , "" , "text"); ?>

     <div class="form-group">
     <p><input type="file" class="form-control"   name="file" ></p>
     </div>
     
     <p><button name="submit" type="submit" class="btn btn-primary">submit</button></p>
     </form>

     <p><a href="display.php" >Show data</a></p>

     <p><?php 
     if($s){
        echo "data inserted";
     }
     ?></p>

    </body>
</html>

<!-- operations($placeholder , $name , $value , $type) -->
<!-- <?php //operations("" , "file" , "" , "file"); ?> 
//$sql = "INSERT INTO `upload`(name , mobile , image) VALUSE ('$name' , '$mobile' , '$image')";
-->