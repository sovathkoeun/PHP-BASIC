<?php 
    include_once "connection.php";
    if(isset($_POST['create'])){
        $fistname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $gender   = $_POST['gender'];
        $email    = $_POST['email'];
        $phone    = $_POST['phone'];

        $fistname = $_FILES['file']['name'];
        $filelocation = $_FILES['file']['tmp_name'];

        move_uploaded_file($filelocation,"imag/".$filename);
        $quey = mysqli_query($connection, "INSERT INTO tbl_contact(firstname,lastname,gender,email,phone,profile)value ('$fistname','$lastname','$gender','$email','$phone','$filename')");
          if($quey == TRUE){
            header ("$location: index.html");
        }else{
            echo "cannot show information!!!";
        }
    }
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
                            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="">Firsname:</label>
                                <input type="text" name="firstname" placeholder="firstname" class="form-control">
                             </div>
                            <div class="form-group">
                                <label for="">Lastname:</label>
                                <input type="text" name="lastname" placeholder="lastname" class="form-control">
                             </div>
                            <div class="form-group">
                                <label for="">Email:</label>
                                <input type="email" name="email" placeholder="Email" class="form-control">
                             </div>
                            <div class="form-group">
                                <label for="">Firsname:</label>
                                <input type="text" name="phone" placeholder="phone" class="form-control">
                             </div>
                            <div class="form-group">
                                <label for="">Firsname:</label>
                                <input type="file" name="file" class="form-control">
                             </div>
                            <div class="form-group">
                                <label for="">Gender:</label>
                                    <select name="gender">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                             </div>                                                                                                                                       
                               <input type="submit" name="create" value="Create new Contact"></br>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>