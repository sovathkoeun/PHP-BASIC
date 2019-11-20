<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="add.php">Add New</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Fullname</th>
            <th>Gender</th>
            <th>Password</th>
            <th>Action</th>
        </tr>
        <?php
            include_once "dbname.php";
            $query = "SELECT * FROM users";
            $data = mysqli_query($connection,$query);

            foreach ($data as $rows){
        ?>
        <tr>
            <td><?php echo $rows['id'];?></td>
            <td><?php echo $rows['fullname'];?></td>
            <td><?php echo $rows['gender'];?></td>
            <td><?php echo $rows['password'];?></td>
            <td>
                <a href="delete.php?id=<?php echo $rows['id']?>">delete</a>
                <a href="update.php">update</a>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>