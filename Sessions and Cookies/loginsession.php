<?php
session_start();

$email="";
$pass="";
$msg="";


if(isset($_POST['login'])){

$email=$_POST['email'];
$pass=$_POST['pwd'];

$_SESSION['user_email']=$email;
$_SESSION['password']=$pass;

if(!empty($email) && !empty($pass)){
  $msg = "Welcome ".$_SESSION['user_email']."FROM SESSION"."<br>";
}else{
  $msg= "Error in sessions";
}


}





?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="alert alert-success">
  <?= $msg?>
  <a class='btn btn-primary' href="logoutsession.php">Logout</a>
</div>
<div class="container">
  <h2>Login</h2>
  <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" required>
    </div>
    
    <button type="submit" class="btn btn-default" name="login" >Login</button>
  </form>
</div>

</body>
</html>
