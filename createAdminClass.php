<?php
    include 'connection.php';
    $trainer = $_POST["trainer"];
    $day = $_POST["day"];
    $time = $_POST["time"];

    $sql = "INSERT INTO class (trainer_id, day, time) values ('$trainer', '$day', '$time')";

    $con -> query($sql);
    $con -> close();
    header("location: adminClass.php");
?>