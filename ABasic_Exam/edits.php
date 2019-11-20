<?php 
    include_once "connection.php";
    $id = $_GET['id'];

    $query = mysqli_query($connection, "SELECT * FROM tb WHERE id = $id");
    while($result = mysqli_fetch_array($query)){

        ?>
       //////
        <?php
    }

?>