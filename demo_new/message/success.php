<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sucesss</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <div class="alert alert-success">
                    <p><strong>Login success fully!</strong> Thanks!</p>
                </div>
                <form action="../action/back.php">
                    <button class="btn btn-info btn-block" type="submit" name="success-back">Back</button>
                </form>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <ul class="list-group">
                    <?php session_start(); ?>
                    <li class="list-group-item">Username: <?php
                    if (isset($_SESSION['name']) && !empty($_SESSION['name'])) {
                        echo $_SESSION['name'];
                    }
                    
                    ?></li>
                    <li class="list-group-item">Password: <?php 
                    if (isset($_SESSION['pwd']) && !empty($_SESSION['pwd'])) {
                         echo $_SESSION['pwd']; 
                    }
                    ?></li>
                </ul>
            </div>
            <a href="../action/logout.php" class="btn btn-primary">Logout</a>
        </div>
    </div>
</body>
</html>