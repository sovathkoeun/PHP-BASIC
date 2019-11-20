
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
                  Username: <?php echo $_POST["username"]; ?><br>
                 Email: <?php echo $_POST["email"]; ?><br>
                 Province: <?php echo $_POST["province"]; ?><br>
                 Phone: <?php echo $_POST["phone"]; ?> <br>
                 radio : <?php echo $_POST["gender"]; ?><br>
                 Status: <?php echo $_POST["status"]; ?> <br>
                 Checkbox: <?php echo $_POST["checked"]; ?><br>
                 shortBio: <?php echo $_POST["shortBio"]; ?><br>
                 <?php
                     if($i = 0; $i < count($interest); $i++){
                         echo $interest[i];
                     }
                 }
                 echo 
                 ?>
            </div>
            <div class="col-4"></div>
         </div>
    </div>
</body>
</html>