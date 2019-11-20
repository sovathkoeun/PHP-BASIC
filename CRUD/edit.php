<?php
     include_once "connection.php";
     if(isset($_POST['edit'])){
         $fistname = $_POST['firstname'];
         $lastname = $_POST['lastname'];
         $gender   = $_POST['gender'];
         $email    = $_POST['email'];
         $phone    = $_POST['phone'];
 
         $fistname = $_FILES['file']['name'];
         $filelocation = $_FILES['file']['tmp_name'];
 
         move_uploaded_file($filelocation,"imag/".$filename);
         $quey = mysqli_query($connection, "UPDATE tbl_contacT SET firstname='$firstname',lastname='$lastname',gender='$gender',email='$email',phone='$phone',profile='$profile' ");
           if($quey == TRUE){
             header ("$location: index.html");
         }else{
             echo "cannot show information!!!";
         }
     }
   
?>