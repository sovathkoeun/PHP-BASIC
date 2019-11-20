<?php

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "php_mini_project_wepb";
   $connection = mysqli_connect($hostname,$username,$password,$dbname);
    // if (mysqli_connect_errno() == 0){
    //     echo "Table MyGuests created successfully!!!!";
    // }else{
    //     die ("failed connection!!!!!!!!!");
    // }
?>