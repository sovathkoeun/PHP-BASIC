<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <div class="card">
                    <div class="card-header">
                        <div class="card-body">
                            <form action="add_process.php" method="post">
                            <div class="div">
                                <label for="">FirstName:</label>
                                <input type="text" name="firstname" class="form-control" placeholder="firsname">
                            </div>
                            <div class="div">
                                <label for="">Lastname:</label>
                                <input type="text" name="lastname" class="form-control" placeholder="lastname">
                            </div>
                            <div class="div">
                                <label for="">Gender:</label>
                                <input type="text" name="gender" class="form-control" placeholder="gender">
                            </div>
                            <div class="div">
                                <label for="">Email:</label>
                                <input type="email" name="email" class="form-control" placeholder="email">
                            </div>
                            <div class="div">
                                <label for="">Phone:</label>
                                <input type="text" name="phone" class="form-control" placeholder="phone">
                            </div>
                            <br>
                            <input type="submit" name="Create" value="Create" class="flaot-right btn btn-success">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
</body>
</html>
