<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<!-- for login user : admin adn password -->

<!-- background of index.php -->
<style mt-5>
    body {
        background:url(image/background.jpg);
        background-size:cover;
        background-repeat:no-repeat;
        background-position: 10% 40%;
    }
</style>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <div class="card">
                    <div class="card-header text-center"><h2>Login Form</h2></div>
                    <div class="card-body">
                        <form action="action/login.php" method="post">
                            <div class="form-group">
                                <label>Username:</label>
                                <input type="text" name="username" id="Username" placeholder="Username"  class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Password:</label>
                                <input type="password" name="password" id="pwd" placeholder="Password" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-info" name="login">Login</button>
                            <a href="control.php"  class="btn btn-danger float-right">Register</a>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
</body>
</html>
