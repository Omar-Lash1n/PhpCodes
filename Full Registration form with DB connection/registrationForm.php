<?php 
include("connection.php");

if(isset($_POST["submit"])){
  $fname = $_POST["fname"];
  $lname = $_POST["lname"];
  $email = $_POST["email"];
  $pass = md5($_POST["pwd"]);
  $gender = $_POST["gender"];

  $sql = "INSERT INTO `users`(`first_name`, `last_name`, `email`, `password`, `gender`) VALUES ('$fname','$lname','$email','$pass','$gender')";
  if(mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    } else{
    echo "Error: ". $sql ."<br>". mysqli_error($conn);
    }
  
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registration Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Sign Up</h2>
  <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
  <div class="form-group">
      <label for="fname">First name:</label>
      <input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="fname" required>
    </div>
    <div class="form-group">
      <label for="lname">Last Name:</label>
      <input type="text" class="form-control" id="lname" placeholder="Enter Last Name" name="lname" required>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" required>
    </div>
    <div class="checkbox">
      <label><input type="radio" name="gender" value="Male"> Male</label>
    </div>
    <div class="checkbox">
      <label><input type="radio" name="gender" value="Female"> Female</label>
    </div>
    
    <button type="submit" class="btn btn-default" name="submit">Submit</button>
  </form>
</div>

</body>
</html>
