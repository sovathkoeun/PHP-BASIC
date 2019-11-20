<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database_name = "php_mini_project_wepb";

$connection = mysqli_connect($hostname,$username,$password,$database_name);

// if(mysqli_connect_errno() != 0) {
//     die("Connection Failed");
// }else{
//     echo "Connection Successfully!!!";
//     echo "</br>";
// }

?>