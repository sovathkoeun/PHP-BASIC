<?php
    include_once "dbname.php";
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
<?php 
    $id = $_GET['id'];
    $query = "SELECT * FROM users WHERE id = $id";
?>
    <form action="#" method="post">
        <input type="text" name="fullname" placeholder="fullname" value="<?php echo $result['fullname'];?>">
        <br>
        <br>
        <select name="gender" value="<?php echo $result['gender'];?>">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>
        <br>
        <br> 
        <input type="text" name="password" placeholder="password" value="<?php echo $result['passwords'];?>">
        <br>
        <br>
        <input type="submit" name="edit" value="edit information">
    </form>
</body>
</html>

<?php
    if(isset($_POST['edit'])){
        $fulname = $_POST['fullname'];
        $gender = $_POST['gender'];
        $password = md5($_POST['password']);

        $query = "UPDATE * FROM fullname ='$fulname',gender='$gender',passwords='$password'";
        $result = mysqli_query($connection,$query);

        if($result){
            header("Location: index.php>");
        }else{
            echo "Cannot insert data!!!";
        }
    }
?>
