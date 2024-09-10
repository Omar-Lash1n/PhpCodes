<?php
$username = "";
$email = "";
$password = "";
$repeat_pass = "";

$usernameErr = "";
$emailErr = "";
$passwordErr = "";
$repeat_passErr = "";


if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty( $_POST["name"])){
        $usernameErr = "*Name is required";
    }
    else{
        $username = test_input($_POST["name"]);
    }
    if(empty($_POST["email"])){
        $emailErr = "*Email is required";
    }
    else{
        $email=test_input($_POST["email"]);
    }

    if(!filter_var($email, FILTER_VALIDATE_EMAIL )){
        $emailErr = "*Invalid Email Format";
    }


    if(empty($_POST["pass1"])){
        $passwordErr ="*Password is required";
    }
    else{
        $password = test_input($_POST["pass1"]);
    }

    
    if(empty($_POST["pass2"])){
        $repeat_passErr ="*Repeated password is required.";
    }elseif(!empty($_POST["pass2"])){
        $repeat_pass= test_input($_POST["pass2"]);
        if($repeat_pass!=$password ){
            $repeat_passErr = "Your password is not matched";
        } 
    }

    }





function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register form</title>
</head>
<body>
    <h2>Registeration form</h2><hr>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <input type="text" placeholder ="Enter Your Name:" name = "name"><br><span style="color:#FF0000"><?php echo $usernameErr;?></span><br>
        <input type="email" placeholder="Enter Your Email:" name = "email"><br><span style="color:#FF0000"><?php echo $emailErr;?></span><br>
        <input type="password" placeholder="Enter Password:" name = "pass1"><br><span style="color:#FF0000"><?php echo $passwordErr;?></span><br>
        <input type="password" placeholder="Repeat password" name="pass2"><br><span style="color:#FF0000"><?php echo $repeat_passErr;?></span><br>
        <br><br><input type="submit" name="submit">
    </form>
<br><br>
    <?php
    if(!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["pass1"]) && !empty($_POST["pass2"]) && $repeat_pass==$password)
    {
        echo "Your name is $username"."<br>";
        echo "Your Email is $email"."<br>";
        echo "Your Passowrd is $password"."<br>";
    }

    ?>
</body>
</html>