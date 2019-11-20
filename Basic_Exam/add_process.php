<?php
include_once "connection.php";
    if(isset($_POST['Create'])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        
        $query = mysqli_query($connection,"INSERT INTO tbl_contact(firstname,lastname,gender,email,phone) VALUES('$firstname','$lastname','$gender','$email','$phone')");
        if($query == TRUE){
            header("Location: index.php");
        }else{
            echo "Cannot Insert new record!";
        }
    }
?>