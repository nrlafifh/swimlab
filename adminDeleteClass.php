<?php
    include 'connection.php';
    $id = $_GET['id'];

    $sql = "DELETE FROM class WHERE id='$id'";

    $result = $con -> query($sql);
    $con-> close();
    header("location: adminClass.php");
?>