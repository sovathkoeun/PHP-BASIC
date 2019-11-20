<?php
    include_once "connection.php";
    $query = mysqli_query($connection, "SELECT * FROM demo");
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
    <div class="container">
        <div class="row">
        <a href="add.php">Add New</a>
            <div class="col-12">
                    <tr>
                        <th>ID</th>
                        <th>Fullname</th>
                    </tr>
                    <?php
                        while($result = mysqli_fetch_array($query)){
                    ?>
                    <tr>
                        <td><?php echo $result['id']?></td>
                        <td><?php echo $result['fullname']?></td>
                        <td>
                            <a href="#" class="btn btn-danger">Delete</a>
                            <a href="#" class="btn btn-success">Delete</a>
                        </td>
                    </tr>
                    <?php
                     }
                     ?>
        </div>
    </div>
</body>
</html>