<?php

 

require_once 'db_connect.php';


if($_POST) {
   
    
    $hause_id = $_POST['hause_id'];
    $address = $_POST['address'];
    $hausnumber = $_POST['hausnumber'];
    $size= $_POST['size'];
    $image = $_POST['image'];
    
 

    $sql = "UPDATE maketable SET   address = '$address', hausnumber = '$hausnumber', size='$size', image=' $image' WHERE hause_id = {$hause_id}";

    if($connect->query($sql) === TRUE) {

        echo "<p>Succcessfully Updated</p>";

        echo "<a href='../update.php?hause_id=".$hause_id."'><button type='button'>Back</button></a>";

        echo "<a href='../home.php'><button type='button'>Home</button></a>";

    } else {

        echo "Erorr while updating record : ". $connect->error;

    }

 

    $connect->close();

 

}

 

?>