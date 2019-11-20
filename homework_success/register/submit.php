<?php
// start sessionn message register and pwd, username get of the data
session_start();
if (isset($_POST['submit'])) {
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    $Email = $_POST['Email'];
    $message = $_POST['message'];

    $_SESSION['name'] = $Username;
    $_SESSION['pwd'] = $Password;
     $_SESSION['Email'] = $Email;
     $_SESSION['message'] = $message;

    if (empty($Username) || empty($Password) && (empty($Email) || empty($message))){
        header('Location: ../arlert-register/error.php');
    }
    if((!empty($Username) || !empty($Password) && !empty($Email) || !empty($message))){
        header('Location: ../arlert-register/register.php');
    }
}
