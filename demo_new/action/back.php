<?php 

// error back
if (isset($_GET['error-back']) || isset($_GET['success-back'])){
    header('location: ../index.php');
}
