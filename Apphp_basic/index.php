
<?php
include_once "connection.php";

$query = mysqli_query($connection, "SELECT * FROM tbl_contact");
require_once "partials/header.php";
?>

    <div class="container">
        <div class="row">
            <a href="add.php" class="btn btn-success">Add new contact</a>
        </div>
        <div class="row">
            <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Profile</th>
            <th>FullName</th>
            <th>Gender</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Action</th>
        </tr>
        <?php
            while($result = mysqli_fetch_array($query)){ 
        ?>
        <tr>
                
            <td><?php echo $result['id'];?></td>
            <td><img src="img/<?php echo $result['profile']?>" width="120px" alt="<?php echo $result['profile']?>"></td>
            <td><?php echo $result['firstname']." ".$result['lastname'];?></td>
            <td><?php echo $result['gender']?></td>
            <td><?php echo $result['email']?></td>
            <td><?php echo $result['phone']?></td>
            <td><a href="delete.php">Delete</a></td>
        </tr>
        <?php 
            }
        ?>

    </table>
        </div>
    </div>
</body>
</html>
                     
