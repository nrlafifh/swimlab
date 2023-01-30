<?php
session_start();

	include("connection.php");	

	if(isset($_POST['login']))
	{
		//SOMETHING WAS POSTED
		$id = $_POST['id'];
		$password = $_POST['password'];
		
		if(!empty($id) && !empty($password))
		   {
			   
			//read from database
		
			$query="select * from admin where id = '$id' limit 1";
			
			$result = mysqli_query($con, $query);
			
			if($result && mysqli_num_rows($result)>0)
			{
				$user_data = mysqli_fetch_assoc($result);
				
				if($user_data['password'] == $password)
				{
          $query=mysqli_query($con,"SELECT * FROM admin WHERE id = '$id' AND password = '$password'");
          $num_rows=mysqli_num_rows($query);
          $row=mysqli_fetch_array($query);
          $_SESSION["admin"]=$row['id'];
					header("Location: indexAdmin.html");
					die;
				}
			}

      $_SESSION['admin'] = 'admin';
		}
			echo "<script>alert('Wrong email or password!');</script>";
		   }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>SwimLab - It's Going Swimmingly</title>
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
                <a href="index.html" class="nav-item nav-link">Home</a>
                <a href="about.html" class="nav-item nav-link">About</a>
                <a href="course.html" class="nav-item nav-link">Courses</a>
                <a href="trainer.html" class="nav-item nav-link">Trainers</a>
                <div class="nav-item dropdown">
                  <a
                    href="#"
                    class="nav-link dropdown-toggle"
                    data-toggle="dropdown"
                    >Blog</a
                  >
                  <div class="dropdown-menu rounded-0 m-0">
                    <a href="blog.html" class="dropdown-item">Blog List</a>
                    <a href="single.html" class="dropdown-item">Blog Detail</a>
                  </div>
                </div>
                <a href="contact.html" class="nav-item nav-link">Contact</a>
              </div>

              <a
                class="btn btn-primary py-2 px-4 ml-auto d-none d-lg-block"
                href="register.html"
                >Join Now</a
              >
            </div>
          </nav>
        </div>
      </div>
    </div>
    <!-- Navbar End -->

    <!-- Registration Start -->
    <div class="container-fluid py-5">
      <div class="container py-5">
        <div class="text-center mb-5">
          <h5
            class="text-primary text-uppercase mb-3"
            style="letter-spacing: 5px"
          >
            Login
          </h5>
          <h1>Let's Go Kuak Lentang!</h1>
        </div>
        <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="contact-form bg-secondary rounded p-5">          
                      <form action="#" method="POST">
                      <div class="control-group">
                          <input type="text" class="form-control m-2" id="id" name="id" placeholder="Enter Your Admin ID">
                      </div>
                      <div class="control-group">
                          <input type="password" class="form-control m-2" id="password" name="password" placeholder="Enter Your Password">
                      </div><br>
                            <div class="text-center">
                                <button class="btn-submit-signup py-3 px-5" type="submit" id="submitButton"name="login">Sign up</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
      </div>
    </div>
    <!-- Registration End -->

    <!-- Footer Start -->
    <div
      class="container-fluid bg-dark text-white py-5 px-sm-3 px-lg-5"
      style="margin-top: 90px"
    >
      <div class="row pt-5">
        <div class="col-lg-7 col-md-12">
          <div class="row">
            <div class="col-md-6 mb-5">
              <h5
                class="text-primary text-uppercase mb-4"
                style="letter-spacing: 5px"
              >
                Get In Touch
              </h5>
              <p>
                <i class="fa fa-map-marker-alt mr-2"></i>8 Jalan Orkid, Arau,
                Perlis
              </p>
              <p><i class="fa fa-phone-alt mr-2"></i>+60 14 385 6980</p>
              <p><i class="fa fa-envelope mr-2"></i>swimlab@gmail.com</p>
              <div class="d-flex justify-content-start mt-4">
                <a class="btn btn-outline-light btn-square mr-2" href="#"
                  ><i class="fab fa-twitter"></i
                ></a>
                <a class="btn btn-outline-light btn-square mr-2" href="#"
                  ><i class="fab fa-facebook-f"></i
                ></a>
                <a class="btn btn-outline-light btn-square mr-2" href="#"
                  ><i class="fab fa-linkedin-in"></i
                ></a>
                <a class="btn btn-outline-light btn-square" href="#"
                  ><i class="fab fa-instagram"></i
                ></a>
              </div>
            </div>
            <div class="col-md-6 mb-5">
              <h5
                class="text-primary text-uppercase mb-4"
                style="letter-spacing: 5px"
              >
                Our Courses
              </h5>
              <div class="d-flex flex-column justify-content-start">
                <a class="text-white mb-2" href="course.html"
                  ><i class="fa fa-angle-right mr-2"></i>Fundamentals of a
                  Swimmer</a
                >
                <a class="text-white mb-2" href="course.html"
                  ><i class="fa fa-angle-right mr-2"></i>Swimming but
                  Elegantly</a
                >
                <a class="text-white mb-2" href="course.html"
                  ><i class="fa fa-angle-right mr-2"></i>Swimming as a Team</a
                >
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-md-12 mb-5">
          <h5
            class="text-primary text-uppercase mb-4"
            style="letter-spacing: 5px"
          >
            Newsletter
          </h5>
          <p>Join the newsletter for SwimLab now!</p>
          <div class="w-100">
            <div class="input-group">
              <input
                type="text"
                class="form-control border-light"
                style="padding: 30px"
                placeholder="Your Email Address"
              />
              <div class="input-group-append">
                <button class="btn btn-primary px-4">Sign Up</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div
      class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5"
      style="border-color: rgba(256, 256, 256, 0.1) !important"
    >
      <div class="row">
        <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
          <p class="m-0 text-white">
            &copy; <a href="#">Domain Name</a>. All Rights Reserved. Designed by
            <a href="https://htmlcodex.com">HTML Codex</a>
          </p>
        </div>
        <div class="col-lg-6 text-center text-md-right">
          <ul class="nav d-inline-flex">
            <li class="nav-item">
              <a class="nav-link text-white py-0" href="#">Privacy</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white py-0" href="#">Terms</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white py-0" href="#">FAQs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white py-0" href="#">Help</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"
      ><i class="fa fa-angle-double-up"></i
    ></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
  </body>
</html>
