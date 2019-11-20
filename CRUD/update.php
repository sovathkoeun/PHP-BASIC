<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
                            <form action="edit.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="">Firsname:</label>
                                <input type="text" name="firstname" placeholder="firstname" class="form-control">
                             </div>
                            <div class="form-group">
                                <label for="">Lastname:</label>
                                <input type="text" name="lastname" placeholder="lastname" class="form-control">
                             </div>
                            <div class="form-group">
                                <label for="">Email:</label>
                                <input type="email" name="email" placeholder="Email" class="form-control">
                             </div>
                            <div class="form-group">
                                <label for="">Firsname:</label>
                                <input type="text" name="phone" placeholder="phone" class="form-control">
                             </div>
                            <div class="form-group">
                                <label for="">Firsname:</label>
                                <input type="file" name="file" class="form-control">
                             </div>
                            <div class="form-group">
                                <label for="">Gender:</label>
                                    <select name="gender">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                             </div>                                                                                                                                       
                               <input type="submit" name="edit" value="Create new Contact"></br>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>