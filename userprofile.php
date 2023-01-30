<?php
    include 'connection.php';
    session_start();
    $email=$_SESSION['email'];
    $query=mysqli_query($con,"SELECT * FROM trainee where email='$email'");
    $row=mysqli_fetch_array($query);
    ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>SwimLab - It's Going Swimmingly!</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Free HTML Templates" name="keywords" />
    <meta content="Free HTML Templates" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
  </head>

  <body>
    <!-- Navbar Start -->
    <div class="container-fluid d-none d-lg-block">
      <div class="row align-items-center py-4 px-xl-5">
        <div class="col-lg-3">
          <a href="" class="text-decoration-none">
            <img src="img/logo.png" style="height: 80px" />
          </a>
        </div>
        <div class="col-lg-9">
          <nav
            class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0"
          >
            <a href="" class="text-decoration-none d-block d-lg-none">
              <h1 class="m-0"><span class="text-primary">SwimLab</span></h1>
            </a>
            <button
              type="button"
              class="navbar-toggler"
              data-toggle="collapse"
              data-target="#navbarCollapse"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div
              class="collapse navbar-collapse justify-content-between"
              id="navbarCollapse"
            >
              <div class="navbar-nav py-0">
              <a href="indexUser.html" class="nav-item nav-link">Home</a>
              <a href="aboutUser.html" class="nav-item nav-link">About</a>
              <a href="courseUser.html" class="nav-item nav-link">Courses</a>
              <a href="trainerUser.html" class="nav-item nav-link">Trainers</a>
              <a href="contactUser.html" class="nav-item nav-link active">Contact</a>
            </div>
            <div class="nav-item dropdown">
              <a
                href="#"
                class="nav-link dropdown-toggle"
                data-toggle="dropdown"
                >Hello Swimmer!</a
              >
              <div class="dropdown-menu rounded-0 m-0">
                <a href="userprofile.php" class="dropdown-item"
                  >My Profile</a
                >
                <a href="index.html" class="dropdown-item">Log Out</a>
              </div>
            </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
    <!-- Navbar End -->

    <!-- Profile Start -->
    

  <form method="post" action="#" enctype = "multipart/form-data">
    <div class="container-fluid p-0 pb-5 mb-5">
      <div class="container">
        <div class="main-body">
          <div class="row">
            <div class="col-lg-4">
              <div class="card">
                <div class="card-body">
                  <div
                    class="d-flex flex-column align-items-center text-center"
                  >
                    <img
                      src="img/<?php echo $row['imagee']; ?>"
                      alt="Trainee"
                      class="rounded-circle p-1 bg-primary"
                      width="110"
                    />
                    <div class="mt-3">
                      <h4><?php echo $row['fullname']; ?></h4>
                      <p class="text-muted font-size-sm">Trainee</p><br>
                      
                        <input type="file" id="image" name ="image"/><br><br>
                        <label for="image" class="btn btn-primary">Upload Photo</label>
                        <br>
                
                    </div>
                  </div>
                  <hr class="my-4" />
                  <ul class="list-group list-group-flush">
                    <li
                      class="list-group-item d-flex justify-content-between align-items-center flex-wrap"
                    >
                      <h6 class="mb-0">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          fill="none"
                          stroke="currentColor"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          class="feather feather-twitter me-2 icon-inline text-info"
                        >
                          <path
                            d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"
                          ></path></svg>Twitter
                      </h6>
                      <span class="text-secondary">@bootdey</span>
                    </li>
                    <li
                      class="list-group-item d-flex justify-content-between align-items-center flex-wrap"
                    >
                      <h6 class="mb-0">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          fill="none"
                          stroke="currentColor"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          class="feather feather-instagram me-2 icon-inline text-danger"
                        >
                          <rect
                            x="2"
                            y="2"
                            width="20"
                            height="20"
                            rx="5"
                            ry="5"
                          ></rect>
                          <path
                            d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"
                          ></path>
                          <line
                            x1="17.5"
                            y1="6.5"
                            x2="17.51"
                            y2="6.5"
                          ></line></svg>Instagram
                      </h6>
                      <span class="text-secondary">bootdey</span>
                    </li>
                    <li
                      class="list-group-item d-flex justify-content-between align-items-center flex-wrap"
                    >
                      <h6 class="mb-0">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          fill="none"
                          stroke="currentColor"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          class="feather feather-facebook me-2 icon-inline text-primary"
                        >
                          <path
                            d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"
                          ></path></svg>Facebook
                      </h6>
                      <span class="text-secondary">bootdey</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-8">
              <div class="card">
                <div class="card-body">
                  <div class="row mb-3">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <input type="text" class="form-control" name="name" value="<?php echo $row['fullname']; ?>" />
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <input type="text" class="form-control" name="email" value="<?php echo $row['email']; ?>" />
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone Number</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <input type="text" class="form-control" name="phone" value="<?php echo $row['phone']; ?>" />
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <input type="text" class="form-control" name="address" value="<?php echo $row['addresss']; ?>" />
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Password</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <input type="text" class="form-control" name="password" value="<?php echo $row['passwordd']; ?>" />
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Guardian Contact</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <input type="text" class="form-control" name="guardiancontact" value="<?php echo $row['guardiancontact']; ?>" />
                    </div>
                  </div>
                  <div class="form-group">
            <input type="submit" name="submituser" class="btn btn-primary" style="width:20em; margin:0;" value="Save"><br><br>
          </div>
                </div>
              </div>
        </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Profile End -->
  </body>
  </html>

      <?php
      if(isset($_POST['submituser'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $password = $_POST['password'];
        $guardiancontact = $_POST['guardiancontact'];
        $image= $_FILES['image']['name'];
      $query = "UPDATE trainee SET fullname = '$name', email = '$email', phone='$phone', addresss='$address',  passwordd = '$password', guardiancontact='$guardiancontact', imagee = '$image'
                      WHERE email = '$email'";
                    $result = mysqli_query($con, $query) or die(mysqli_error($con));
                    ?>
                     <script type="text/javascript">
            alert("Update Successfull.");
            window.location = "userprofile.php";
        </script>
        <?php
             }               
?>