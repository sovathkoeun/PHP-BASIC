<?php
    include_once "connect.php";
    $id = $_GET['id'];
    
    $query = mysqli_query($connection,"DELETE FROM student WHERE id = '$id'");
    if($query == true){
        header("location: index.php");
    }else{
        echo "Cannot delete";
    }

?>