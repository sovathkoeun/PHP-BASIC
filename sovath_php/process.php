<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
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
                    <form action="control.php" method="post">
                        <div class="form-group">
                        <label for="fname">Unername:</label>
                        <input type="text" name="Username"  id="Username" placeholder="Username"  class="form-control" required>
                        </div>
                        <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" name="pswd" id="pwd" placeholder="Password"  class="form-control" required>
                        </div>
                        <div class="form-group">
                        <button type="submit" class="btn btn-primary">Login</button>
                        <button type="submit" class="btn btn-danger float-right">Register</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
</body>
</html>