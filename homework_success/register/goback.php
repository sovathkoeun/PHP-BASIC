<?php 

// error back of message folder arlet-register adn file error.php and register.php
if (isset($_GET['go-back']) || isset($_GET['process-login'])){
    header('location:../control.php');
}
?>
