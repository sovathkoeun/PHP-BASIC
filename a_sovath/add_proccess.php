<?php
    include_once "connect.php";
    if(isset($_POST['add'])){
        $username = $_POST['username'];
        $province = $_POST['province'];
        $gender   = $_POST['gender'];

        $query = mysqli_query($connection, "INSERT INTO student(name,province,gender)VALUES ('$username','$province','$gender')");
        if($query == true){
            header("location: index.php");
        }else{
            echo "Cannot insert data";
        }
    }
?>