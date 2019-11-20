<?php
// start session from folder
session_start();
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $_SESSION['name'] = $username;
    $_SESSION['pwd'] = $password;

    if (empty($username) || empty($password)) {
        header('Location: ../message/error.php');
    }elseif(empty($username=="admin") || empty($password=="password")) {
        header('Location: ../message/admin.php');
    }elseif(!empty($username) || !empty($password)) {
        header('Location: ../message/success.php');
    }
}
?>

