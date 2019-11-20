<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sucesss</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<style mt-5>
    body {
        background:url(../image/register.jpg);
        background-size:cover;
        background-repeat:no-repeat;
        background-position: 10% 20%;
    }
</style>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12"></div>
            <div class="col-12">
                <div class="alert alert-success">
                    <p><strong>Register success!!! </strong> Congratulation you can use the application.</p>
                </div>
                <form action="../register/goback.php">
                    <button class="btn btn-info btn-block" type="submit" name="process-login">Log out</button>
                </form>
            </div>
            <div class="col-12"></div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <ul class="list-group">
                    <!-- for Username -->
                    <?php session_start(); ?>
                    <li class="list-group-item">Username: <?php
                    if (isset($_SESSION['name']) && !empty($_SESSION['name'])) {
                        echo $_SESSION['name'];
                    }
                    ?></li>
                    <!-- for Password -->
                    <li class="list-group-item">Password: <?php 
                    if (isset($_SESSION['pwd']) && !empty($_SESSION['pwd'])) {
                         echo $_SESSION['pwd']; 
                    }
                    ?></li>
                    <!-- for Email -->
                    <li class="list-group-item">Email: <?php 
                    if (isset($_SESSION['Email']) && !empty($_SESSION['Email'])) {
                         echo $_SESSION['Email']; 
                    }
                    ?></li>
                    <!-- for message or sar -->
                    <li class="list-group-item">message: <?php 
                    if (isset($_SESSION['message']) && !empty($_SESSION['message'])) {
                         echo $_SESSION['message']; 
                    }
                    ?></li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>