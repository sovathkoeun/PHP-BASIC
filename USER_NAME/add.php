<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        <input type="text" name="fullname" placeholder="fullname">
        <br>
        <br>
        <select>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>
        <br>
        <br>
        <input type="text" name="password" placeholder="password">
        <br>
        <br>
        <input type="submit" name="create" value="Create">
    </form>
</body>
</html>

<?php
    if(isset($_POST['create'])){
        $fulname = $_POST['fullname'];
        $gender = $_POST['gender'];
        $password = $_POST['password'];

        $query = "INSERT INTO users(fullname,gender,passwords)VALUES ('$fulname','$gender','$password')";
        $result = mysqli_query($connection,$query);

        if($result){
            header("Location: index.php");
        }else{;
        }
            echo "Cannot insert data!!!";
    }
?>
