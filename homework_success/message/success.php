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
        background:url(../image/background.jpg);
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
                <div class="alert alert-success">
                    <p><strong>Login success!!!</strong>Congratulation have done a great job </p>
                </div>
                <form action="../action/back.php">
                    <button class="btn btn-info btn-block" type="submit" name="success-back">Log out</button>
                </form>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
</body>
</html>