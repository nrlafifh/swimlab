<?php
    include 'connection.php';
    $id = $_GET['id'];

    $sql = "DELETE FROM trainer WHERE id='$id'";

    $result = $con -> query($sql);
    $con-> close();
    header("location: adminTrainer.php");
?>