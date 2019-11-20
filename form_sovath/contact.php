<?php
$username = $_POST['Username'];
$password = $_POST['password'];

echo $username."</br>";
echo $password."</br>";
if ($username != "" || $password != "") {
    header('location: success.php');
}
foreach($interest as $value){
    echo $value;
}
?>