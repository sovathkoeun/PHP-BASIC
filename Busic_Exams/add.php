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
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-body">
                           <form action="add_process.php" method="post">
                           <input type="hidden" name="id" value="<?php echo $result['id'];?>">
                             <div class="form-group">
                              <label for="">Firsname:</label>
                              <input type="text" name="firstname" placeholder="Firstname">
                             </div>
                             <div class="form-group">
                              <label for="">Lastname:</label>
                              <input type="text" name="lastname" placeholder="lastname">
                             </div>
                             <div class="form-group">
                              <label for="">Gender:</label>
                              <input type="text" name="gender" placeholder="gender">
                             </div>
                             <div class="form-group">
                              <label for="">Email:</label>
                              <input type="text" name="email" placeholder="email">
                             </div>
                             <div class="form-group">
                              <label for="">Phone:</label>
                              <input type="text" name="phone" placeholder="phone">
                             </div>
                              <input type="submit" name="Create" value="Create" class="btn btn-success">
                           </form>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</body>
</html>