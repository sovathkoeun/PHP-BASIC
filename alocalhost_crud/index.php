<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<div class="container mt-5">
    <div class="row">
        <div class="col-12">
        <a href="insert.php" class="btn btn-success">Add New</a>
        <hr>
            <table class="table table-bordered">
                <tr class="btn-danger">
                    <th>ID</th>    
                    <th>UserName</th>    
                    <th>Province</th> 
                    <th>Action</th>    
                </tr>
                <?php
                    include_once "sql_connect.php";
                    $query = "SELECT * FROM  extra";
                    $result = mysqli_query($connect, $query);
                    if($result){
                        foreach($result as $user){
                ?>
                 <tr>
                     <td><?php echo $user['id'];?></td>
                     <td><?php echo $user['username'];?></td>
                     <td><?php echo $user['province'];?></td>
                     <td>
                        <a href="delete.php?id=<?php echo $user['id'] ?>" class="btn btn-danger btn-sm">delete</a>
                        <a href="update.php?id=<?php echo $user['id'] ?>" class="btn btn-warning btn-sm">Update</a>
                     </td>
                 </tr>
                <?php
                 }

                 }else{
                 echo "no";
                 }
                ?>
            </table>
        </div>
    </div>
</div>