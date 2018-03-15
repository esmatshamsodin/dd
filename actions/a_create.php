<?php

 

require_once 'db_connect.php';
 

if($_POST) {
 
    
    $hause_id = $_POST['hause_id'];
    $address = $_POST['address'];
    $hausnumber = $_POST['hausnumber'];
    $size= $_POST['size'];
     $image = $_POST['image'];
     
 

    
   
$sql = "INSERT INTO maketable ( hause_id,address,hausnumber,size,image) VALUES ('$hause_id', '$address','$hausnumber','$size','$image')";


   if($connect->query($sql) === TRUE) {

        echo "<p>New Record Successfully Created</p>";

        echo "<a href='../create.php'><button type='button'>Back</button></a>";

        echo "<a href='../home.php'><button type='button'>Home</button></a>";

    } else {

        echo "Error " . $sql . ' ' . $connect->connect_error;

    }

 

    $connect->close();

}

 

?>