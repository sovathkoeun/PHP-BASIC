<?php
include_once "connection.php";
    if(isset($_POST['Create'])){
        $fname = $_POST['tname'];
        
        $query = mysqli_query($connection,"INSERT INTO tbl(firstname) VALUES('$firstname')");
        if($query == TRUE){
            header("Location: index.php");
        }else{
            echo "Cannot Insert new record!";
        }
    }
?>