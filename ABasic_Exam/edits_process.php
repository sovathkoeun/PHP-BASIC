<?php
    include_once "connection.php";
    if(isset($_POST['edit'])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $id = $_POST['id'];
        $result = mysqli_query($connection,"UPDATE tbl_contact SET firstname = '$firstname', lastname = '$lastname', gender = '$gender', email = '$email', phone ='$phone' WHERE id = '$id'");
        if($result == TRUE){
            header("Location: index.php");
        }else{
            echo "Cannot update";
        }
    }
?>