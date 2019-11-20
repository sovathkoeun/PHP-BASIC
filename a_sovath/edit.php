
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<div class="container mt-5">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <div class="card">
                <div class="card-header">Add New</div>
                <div class="card-body">
                <?php
                    include_once "connect.php";
                    $id = $_GET['id'];
                    $query = mysqli_query($connection,"SELECT * FROM student WHERE id = '$id'");
                    while($result = mysqli_fetch_array($query)){
                    ?>
                    <form action="edit_proccess.php" method="post">
                    <input type="hidden" value="<?php echo $id ?>" name="id">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="username" class="form-control" value="<?php echo $result['name'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Province</label>
                            <input type="text" name="province" class="form-control" value="<?php echo $result['province'];?>">
                        </div>
                        <div class="form-group">
                            <label>Gender</label>
                            <select name="gender" class="form-control">
                                <option></option>
                                <option value="Female">Female</option>
                                <option value="Male">Male</option>
                            </select>
                           
                        </div>
                        <button class="btn btn-info btn-block" type="submit" name="edit" >Update</button>
                    </form>
                </div>
            </div>
            <?php 
               }
            ?>
        </div>
        <div class="col-4"></div>
    </div>
</div>
