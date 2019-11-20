<?php
 //start session
  session_start();
  
  // Accessing session data
 if (isset($_POST['login'])) {
     $username = $_POST['username'];
     $password = $_POST['password'];

    echo $_SESSION['name'] = $username. ".<br>";
    echo $_SESSION['pwd'] = $password. "</br>";
} 
?>


