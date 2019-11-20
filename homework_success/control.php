<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<!-- background of image register -->
<style>
    body {
        background:url(image/register.jpg);
        background-size:cover;
        background-repeat:no-repeat;
        background-position: 10% 60%;
    }
</style>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <div class="card">
                    <div class="card-header text-center"><h2>Register Form</h2></div>
                    <div class="card-body">
                    <form action="register/submit.php" method="post">
                        <div class="form-group">
                        <label for="fname">Unername:</label>
                        <input type="text" name="Username" id="Username" placeholder="Username" class="form-control" >
                        </div>
                        <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="Password" name="Password" id="Password" placeholder="Password"  class="form-control">
                        </div>
                        <div class="form-group">
                        <label for="Email">Email:</label>
                        <input type="Email" name="Email" id="Email" placeholder="Email"  class="form-control">
                        </div>
                        <div class="form-group">
                        <label for="sms">Message:</label>
                        <textarea rows="2" name="message" id="message" class="form-control" ></textarea>
                        </div>
                        <div class="form-group">
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        <a href="index.php" class="btn btn-danger float-right">Back to Login</a>
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