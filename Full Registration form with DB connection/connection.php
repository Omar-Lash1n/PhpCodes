<?php
$user="root";
$pwd="";
$host="localhost";
$db="e-commerce";

$conn= mysqli_connect($host,$user,$pwd,$db);

if(!$conn){
    echo die("Connection Failed".mysqli_connect_error());
}else{echo "Connected Successfully" . "<br>";}


?>