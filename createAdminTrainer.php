<?php
    include 'connection.php';
    $name = $_POST["name"];
    $email = $_POST["email"];
    $image = $_FILES["image"]["name"];

    $sql = "INSERT INTO trainer (name, email, imagee) values ('$name', '$email', '$image')";

    $con -> query($sql);
    $con -> close();
    header("location: adminTrainer.php");
?>