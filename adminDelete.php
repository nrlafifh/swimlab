<?php
    include 'connection.php';
    $id = $_GET['id'];

    $sql = "DELETE FROM membership WHERE id='$id'";

    $result = $con -> query($sql);
    $con-> close();
    header("location: adminMembership.php");
?>