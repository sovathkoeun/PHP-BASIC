<!DOCTYPE html>
<html>
 <head>
  <title>How to create PHP Login Script using Cookies</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>
  <br />
  <div class="container">
   <h2 align="center">How to create PHP Login Script using Cookies</h2>
   <br />
   <div class="col-4"></div>
    <div class="col-4">
   <div class="panel panel-default">
    <div class="panel-heading">Login</div>
    <div class="panel-body">
     <form action="coolie.php" method="post">
      <div class="form-group">
       <label>User Email</label>
       <input type="text" name="user_email" id="user_email" class="form-control" />
      </div>
      <div class="form-group">
       <label>Password</label>
       <input type="password" name="user_password" id="user_password" class="form-control" />
      </div>
      <div class="form-group">
       <input type="submit" name="login" id="login" class="btn btn-info" value="Login" />
      </div>
     </form>
    </div>
   </div>
   </div>
     <div class="col-4"></div>
   <br />
   <p>Admin email - john_smith@gmail.com</p>
   <p>Admin Password - password</p>
   <p>All user password is 'password'</p>
  </div>
 </body>
</html>

<span>
    <?php echo $message; ?>
</span>