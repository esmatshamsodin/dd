<?php

 

require_once 'db_connect.php';

 

if($_POST) {

    $hause_id = $_POST['hause_id'];
 
    $disableFkCheck = "SET GLOBAL FOREIGN_KEY_CHECKS=0;";
    if(!$connect->query($disableFkCheck)) {echo 'Erorr';}

    
    $sql = "DELETE FROM maketable WHERE hause_id = {$hause_id}";

    if($connect->query($sql) === TRUE) {

        echo "<p>Successfully deleted!!</p>";

        echo "<a href='../home.php'><button type='button'>Back</button></a>";

    } else {

        echo "Error updating record : " . $connect->error;

    }

 

    $connect->close();

}

 

?>