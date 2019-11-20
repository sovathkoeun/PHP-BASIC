<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>form Username and password</title>
</head>
<style>
    body{
        background:url(image/register.jpg);
        background-size:cover;
        background-repeat:no-repeat;
        background-position:center center;
    }
</style>
<body>
    <div class="container mt-5" class="p-3 mb-2 bg-warning text-dark".bg-warning>
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <div class="card">
                    <h2 class="card-header text-center">Register Form </h2>
                    <div class="card-body">
                        <form action="index.php" method="post">
                            <div class="form-group">
                                <label for="fname">Username:</label>
                                <input type="text" name="Username" id="fname" placeholder="Username" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" name="password" id="pwd" placeholder="Password" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label for="Email">Email:</label>
                                <input type="Email" name="Email" id="Email" placeholder="Email" class="form-control"/>
                            </div>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" value="Login" class="btn btn-primary"/>
                                <a href="index.php" class="btn btn-danger float-right">Back to Login</a>
                            </div>
                            <a href="index.phph"></a>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
</body>
</html>