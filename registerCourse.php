<?php

if (isset($_POST["submit"])){
    include 'connection.php';	

    $email=$_POST["email"];
    $name=$_POST["name"];
    $class=$_POST["class"];
    $member=$_POST["member"];
      
    if (!$con) {
        die("Database connection failed");
    }
      
    $sql = "INSERT INTO membership (email, namee, class, member) VALUES ('$email', '$name', '$class','$member')";

    $con -> query($sql);
    $con -> close();
    header("location: indexUser.html");
  }
?>