<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['id'])){
   header('location:loginAdmin.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin Page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>Hi, <span>Admin</span></h3>
      <h1>Welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
      <p>this is an admin page</p>
      <a href="add_data_admin.php" class="btn">Add Data</a>
      <a href="search_pdata.html" class="btn">Search Patient</a>
	  <a href="display_add_admin.php" class="btn">Update / Delete Data</a>
      <a href="logout.php" class="btn">logout</a>
   </div>

</div>

</body>
</html>