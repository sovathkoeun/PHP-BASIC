<?php
    include_once "connect.php";
    if(isset($_POST['edit'])){
        $username = $_POST['username'];
        $province = $_POST['province'];
        $gender   = $_POST['gender'];
        $id = $_POST['id'];
        $sql = "UPDATE student SET name ='$username', province='$province',gender='$gender' WHERE id = $id";
        $query = mysqli_query($connection,  $sql);
        // var_dump($sql);
        // exit;
        if($query == true){
            header("location: index.php");
        }else{
            header("location: edit.php");
        }
    }
?>