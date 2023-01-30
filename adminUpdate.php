<?php
    include 'connection.php';
    $id = $_POST['id'];
	$trainer = $_POST['trainer'];
    $member = $_POST['member'];

    $sql = "UPDATE class SET trainer_id='$trainer', membership_id='$member' WHERE id='$id'";

    $result = $con -> query($sql);
    $con -> close();
    header("location: adminClass.php");
?>