<?php
    include_once "sql_connect.php";
    $id = $_GET['id'];
    $query = "DELETE FROM extra WHERE id = ".$id;
    $result = mysqli_query($connect, $query);
    if($result){
        header("location: index.php");
    }else{
        echo "Cannot delete";
    }
?>