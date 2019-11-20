<?php 

// error back, get the folder message and file error.php and success.php
if (isset($_GET['error-back']) || isset($_GET['success-back']) || isset($_GET['con-back'])){
    header('location: ../index.php');
}
?>
