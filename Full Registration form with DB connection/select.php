<?php
include("connection.php");

$id = $_GET['id'];

$delquery = "DELETE FROM `users` WHERE `id`= '$id' ";
$result = mysqli_query($conn,$delquery);

if($result){
    echo "Deleted Successfully";
}else{
    echo "Error ". mysqli_connect($conn);
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Users Table</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Users Table</h2>          
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>First name</th>
        <th>Last name</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Other</th>
      </tr>
    </thead>
    <tbody>
        <?php
            $sql="SELECT `id`, `first_name`, `last_name`, `email`,`gender` FROM `users`";
            $result = mysqli_query($conn,$sql);

            if(mysqli_num_rows($result)>0){
                foreach($result as $row){
                    echo "<tr>
                    <td>{$row['first_name']}</td>
                    <td>{$row['last_name']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['gender']}</td>
                    <td>
                    <a class='btn btn-primary' href='update.php?id={$row['id']}'>update</a>
                    <a href=\"select.php?id=$row[id]\" onClick=\"return confirm('Are you sure?')\">Delete</a>
                    </td>
                        </tr>";
                    }
                }else{echo '0 records';}
        
        ?>
    </tbody>
  </table>
</div>

</body>
</html>
