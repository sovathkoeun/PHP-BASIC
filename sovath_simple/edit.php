<?php 
    include_once "connection.php";
    $id = $_GET['id'];

    $query = mysqli_query($connection, "SELECT * FROM demo WHERE id = $id");
    while($result = mysqli_fetch_array($query)){

        ?>
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
                                    <form action="edit_process.php" method="post">
                                        <input type="hidden" name="id" value="<?php echo $result['id'];?>">
                                        <div class="form-group">
                                        <label for="">fullname:</label>
                                        <input type="text" name="fullname" placeholder="Fullname" class="form-control" value="<?php echo $result['fullname'];?>">
                                        </div>
                                        <br>
                                        <input type="submit" name="edit" value="Edit" class="btn btn-success">
                                        <br>
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
    <?php
    }
    ?>

    