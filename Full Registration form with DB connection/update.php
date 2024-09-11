<?php

include('connection.php');
$id=$_GET['id'];

if(isset($_POST['update'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $pass=$_POST['pwd'];
    $gender=$_POST['gender'];

    if(!empty($fname)&& !empty($lname)&& !empty($email)&& !empty($pass) && !empty($gender)){
        $sql="UPDATE `users` SET `first_name`='$fname',`last_name`='$lname',`email`='$email',`password`='$pass',`gender`='$gender' WHERE `id`='$id'";

            $result=mysqli_query($conn,$sql);

            if($result){
                echo "Data Updated Successfully";
                header('refresh:2,URL=./select.php');
            }else{
                echo "Error Updating data ".mysqli_error($conn);
            }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Update</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>update data</h2>
  <form action="<?php $_PHP_SELF?>" method="post">
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
    
    <button type="submit" class="btn btn-default" name="update">Update</button>
  </form>
</div>

</body>
</html>