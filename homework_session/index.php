<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel ="stylesheet" href="stylesheet.css"/>
    <title>Document</title>
</head>
<style>
   body {
    background:teal;
}
</style>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <div class="card">
                    <div class="card-header text-center btn-"><h3>Login</h3></div>
                    <div class="card-body">
                         <form action="homepage.php" method="post">
                                <div class="form-group">
                                    <label>Username:</label>
                                    <input type="text" name="username" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Password:</label>
                                    <input type="password" name="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Phone:</label>
                                    <input type="number" name="number" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Email:</label>
                                    <input type="email" name="email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Gendar:</label>
                                    <input type="radio" name="gendar" value="Male">Male: 
                                     <input type="radio" name="gendar" value="False">FALSE:
                                </div>
                                <div class="form-group">
                                <label for="interest">Interest:</label>
                                <input type="checkbox" name="interest[]" value="No interest" checked style="display:none;">
                                <input type="checkbox" name="interest[]" value="php">PHP
                                <input type="checkbox" name="interest[]" value="database">DATABASE
                                <input type="checkbox" name="interest[]" value="java">JAVA
                                </div>
                                <div class="form-group">
                                <label for="file">Picture:</label>
                                <input type="file" name="picture" id="file"> <br>
                                </div>
                                <div class="form-group">
                                    <label>Comment:</label>
                                    <textarea name="comment" rows="4" cols="80"></textarea>
                                </div>                              
                                <br>
                                <br>
                                <button type="submit" class="btn btn-info btn-block" name="login">Login</button>
                           </form>
                    </div>
                </div>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
</body>
</html>