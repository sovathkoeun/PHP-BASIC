<?php
// start session
session_start();
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $_SESSION['name'] = $username;
    $_SESSION['pwd'] = $password;

    if (empty($username) || empty($password)) {
        header('Location: ../message/error.php');
    }else {
        header('Location: ../message/success.php');
    }
}

