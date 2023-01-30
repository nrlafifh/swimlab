<?php
    include 'connection.php';
    $id = $_POST['id'];
    $namee = $_POST['namee'];
    $class = $_POST['class'];
    $member = $_POST['member'];

    $sql = "UPDATE membership SET namee='$namee', class='$class', member='$member' WHERE id='$id'";

    $result = $con -> query($sql);
    $con -> close();
    header("location: adminMembership.php");
?>