<?php
include_once "connection.php";
include "partials/header.php";
if(isset($_POST['create'])){
    $fname          = $_POST['firstname'];
    $lname          = $_POST['lastname'];
    $gender         = $_POST['gender'];
    $email          = $_POST['email'];
    $phone          = $_POST['phone'];
    $filename       = $_FILES['file']['name'];
    $fileLocation   = $_FILES['file']['tmp_name'];
    move_uploaded_file($fileLocation, "img/".$filename);
    $query = mysqli_query($connection, "INSERT INTO tbl_contact (firstname,lastname,gender,email,phone,profile)VALUES('$fname','$lname','$gender','$email','$phone','$filename')");
    if($query == TRUE){
        header("Location: index.php");
    }else{
        echo "cannot add information";
    }
}

?>
<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="card" style="width: 25rem;;">
            <div class="card-header">
                Create New Contact
            </div>
            <div class="card-body">
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="firstname">Firstname: </label>
                        <input type="text" name="firstname" id="firstname" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="lastname">Lastname: </label>
                        <input type="text" name="lastname" id="lastname" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender: </label>
                        <select name="gender" id="gender">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="email">Email: </label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone: </label>
                        <input type="text" name="phone" id="phone" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="file">Profile Picture: </label>
                        <input type="file" name="file" id="file" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="create" values="Create" class="btn btn-success">
                       <a href="index.php" class="btn btn-success float-right">Go back</a>
                    </div>
                </form>
            </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>