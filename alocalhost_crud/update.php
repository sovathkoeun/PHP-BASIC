
<?php
    include_once "sql_connect.php";
    $id = $_GET['id'];
    $query = "SELECT * FROM extra WHERE id = ".$id;
    echo $id;
    $result = mysqli_query($connect, $query);
    if($result){
       foreach($result as $user) {
     
?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<style>
    body{
        background: black;
    }
</style>
<div class="container mt-5">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <div class="card">
                <div class="card-header">
                    <div class="card-body">
                        <form action="edit.php" method="post">
                           <div class="form-group">
                                <label for="">Name:</label>
                                <input type="text" name="username" class="form-control" required value="<?php echo $user['username'] ?>">
                           </div>
                           <div class="form-group">
                                <label for="">Province:</label>
                                <input type="text" name="province" class="form-control" required value="<?php echo $user['province'] ?>">
                           </div>
                            <a href="index.php" class="btn btn-success">Go back</a>
                            <button class="btn btn-primary float-right" type="submit" name="update">Add New</button>
                        </form>
                    </div>
                </div>
            </div>
            <?php
                  
                }
                }else{
                    echo "Cannot update";
                }
                if(isset($_POST['update'])){
                    $username = $_POST['username'];
                    $province = $_POST['province'];
                    $query    = "UPDATE extra SET username='$username',province='$province' WHERE id = ".$id;
                    $result   = mysqli_query($connect, $query);
                    if($result){
                        header('location: index.php');
                    }else{
                        echo "Insert failed!!!";
                    }
                }
            ?>
        </div>
        <div class="col-4"></div>
    </div>
</div>