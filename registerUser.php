<?php

if (isset($_POST["submit"])){
    include 'connection.php';	

    $name=$_POST["name"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $address=$_POST["address"];
    $password=$_POST["password"];
    $guardianContact=$_POST["guardianContact"];
    $image = $_FILES["image"]['name'];
      
    if (!$con) {
        die("Database connection failed");
    }
      
    $sql = "INSERT INTO trainee (fullname, email, phone, addresss, passwordd, guardiancontact, imagee) VALUES ('$name', '$email', '$phone','$address','$password', '$guardianContact', '$image')";

    $con -> query($sql);
    $con -> close();
    header("location: loginUser.html");
  }
?>