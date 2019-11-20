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
            <div class="col-4"></div>
            <div class="col-4">
                <div class="alert alert-danger">
                    <p><strong>Fieles Cannot Empty!</strong> You should fill in all the fields</p>
                </div>
                <form action="../register/goback.php">
                    <button class="btn btn-info btn-block" type="submit" name="go-back">Back to register</button>
                </form>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
</body>
</html>