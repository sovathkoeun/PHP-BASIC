<?php
    include_once "connection.php";
    $query = mysqli_query($connection,"SELECT * FROM tbl_contact");
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
               <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-body">
                            <a href="add.php" class="btn btn-success">Add New</a>
                            <hr>
                                <table class="table table-bordered">
                                    <tr>
                                        <th>ID</th>
                                        <th>Firsname</th>
                                        <th>Lastname</th>
                                        <th>Gender</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Action</th>
                                    </tr>
                                    <?php
                                    while($result = mysqli_fetch_array($query))
                                    {
                                    ?>
                                        <tr>
                                            <td><?php echo $result['id'];?></td>
                                            <td><?php echo $result['firstname'];?></td>
                                            <td><?php echo $result['lastname'];?></td>
                                            <td><?php echo $result['gender'];?></td>
                                            <td><?php echo $result['email'];?></td>
                                            <td><?php echo $result['phone'];?></td>
                                            <td>
                                                <a href="edit.php?id=<?php echo $result['id']; ?>" class="btn btn-success">Edit</a>
                                                <a href="delete.php?id=<?php echo $result['id']; ?>" class="btn btn-danger">Delete</a>
                                            </td>

                                        </tr>
                                    <?php 
                                    }
                                    ?>
                                </table>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </body>
    </html>