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
                        <form action="#" method="post">
                           <div class="form-group">
                                <label for="">Name:</label>
                                <input type="text" name="username" class="form-control">
                           </div>
                           <div class="form-group">
                                <label for="">Province:</label>
                                <input type="text" name="province" class="form-control" required>
                           </div>
                            <a href="index.php" class="btn btn-success">Go back</a>
                            <button class="btn btn-primary float-right" type="submit" name="add">Add New</button>
                        </form>
                    </div>
                </div>
            </div>
            <?php
                include_once "sql_connect.php";
                if(isset($_POST['add'])){
                    $username = $_POST['username'];
                    $province = $_POST['province'];
                    $query    = "INSERT INTO extra(username,province)VALUES ('$username','$province')";
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