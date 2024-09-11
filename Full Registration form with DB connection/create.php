<?php
include("connection.php");


$sql = "CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL
);";

if (mysqli_query($conn, $sql)) {
    echo "Table Employee created successfully"."<br>";
    } else {
    echo "Error creating table: " . mysqli_error($conn);
    }
?>