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
        background:url(image/background.jpg);
        background-size:cover;
        background-repeat:no-repeat;
        background-position:center center;
    }
</style>
<body>
    <div class="container mt-5" class="p-3 mb-2 bg-warning text-dark mt-5".bg-warning>
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <div class="card">
                    <h2 class="card-header text-center">Login Form</h2>
                    <div class="card-body">
                        <form action="contact.php" method="post">
                            <div class="form-group">
                                <label for="fname">Username:</label>
                                <input type="text" name="Username" id="pwd" placeholder="Username" class="form-control" required/>
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" name="password" id="pwd" placeholder="Password" class="form-control"/>
                            </div>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" value="Submit" class="btn btn-primary"/>
                                <a href="register.php" class="btn btn-danger float-right">Register</a>
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