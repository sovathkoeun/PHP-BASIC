<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<style>
    body{
        background:LightGray;
    }
</style>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <div class="card">
                    <div class="card-header" style="background:rgb(60, 179, 113);">
                    <h4 class=" text-center">Login</h4></div>
                    <div class="card-body">
                        <form action="action/login.php" method="post">
                            <div class="form-group">
                                <label>Username:</label>
                                <input type="text" name="username" placeholder="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Password:</label>
                                <input type="password" name="password" placeholder="password" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block" name="login">Login</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
</body>
</html>