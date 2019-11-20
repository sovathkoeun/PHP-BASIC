<?php
    include_once "connection.php";
    $id = $_GET['id'];

    $query = mysqli_query($connection,"DELETE FROM tbl_contact WHERE id = $id");

    if($query == TRUE){
        header("Location: index.php");
    }else{
        echo "Cannot delete!!!";
    }
?>