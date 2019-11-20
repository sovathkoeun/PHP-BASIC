<?php
    include_once "connection.php";
   $id = $_GET['id'];
   $query = mysqli_query($connection, "SELECT * FROM demo WHERE id = $id");
   while($result = mysqli_fecth_array($query)){
       echo $result["fullname"];
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <div class="card">
                <div class="card-header">
                    <div class="card-body">
                    <form action="add">
                        <input type="text" name="username" placeholder="username">
                        <br>
                        <input type="submit" name="edut" value ="Edit">
                        <br>
                    </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4"></div>
    </div>
</div>
</body>
</html>