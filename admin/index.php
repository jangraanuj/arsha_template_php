<?php 
include "config.php";
session_start();
if(isset($_SESSION["username"]) AND isset($_SESSION["email"])){
header("Location: http://localhost/arsha/");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Inner Page - Arsha Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js" integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>  


  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" type="text/css" rel="stylesheet">
  <link href="custum.css" type="text/css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">Arsha</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link   scrollto" href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="getstarted scrollto" href="#about">Get Started</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">
  <div class="background">
            <div class="shape"></div>
            <div class="shape"></div>
          </div>

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        

        <h2 >All Posts</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
        <style>

            /* Style the form container */
#manage_user {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #f9f9f9;
}

/* Style the form fields */
.form-group {
    margin-bottom: 15px;
}

.form-control {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

/* Style the error message */
#error_msg {
    color: red;
    margin-bottom: 15px;
}

/* Style the submit button */
.btn-success {
    background-color: #28a745;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 4px;
    cursor: pointer;
}

.btn-success:hover {
    background-color: #218838;
}
        </style>

    <form action="<?php $_SERVER =['PHP_SELF']; ?>" method="post" id="manage_user">
    <div class="form-group">
        <input type="text" class="form-control form-control-sm" name="username" placeholder="Enter Username">
    </div>
    <div class="form-group">
        <input type="email" class="form-control form-control-sm" name="email" placeholder="test@gmail.com">
    </div>
    <div class="form-group">
        <input type="password" class="form-control form-control-sm" name="password" placeholder="*************">
    </div>
    <div id="error_msg"></div>
    <div class="form-group">
        <button class="btn btn-success" name="login"  type="submit">Submit</button>
    </div>
</form>
<?php 

                        if(isset($_POST['login'])){
                            include "config.php";
                            $username = mysqli_real_escape_string($conn, $_POST['username']);
                            $email = mysqli_real_escape_string($conn, $_POST['email']);
                            $password = md5($_POST['password']);

                            $sql = "SELECT user_id, username, email, role FROM user WHERE username = '{$username}' and email = '{$email}'";
                            $result = mysqli_query($conn, $sql) or die("Query Failed.");

                            if(mysqli_num_rows($result) > 0){

                                while($row = mysqli_fetch_assoc($result)){
                                    session_start();                                  
                                    $_SESSION["username"] = $row['username'];                                   
                                    $_SESSION["email"] = $row['email'];                                   
                                    $_SESSION["user_id"] = $row['user_id'];                                   
                                    $_SESSION["user_role"] = $row['role'];

                                    header("Location: http://localhost/arsha/");

                                    }

                            }else{

                            echo '<div class="alert alert-danger">Username and Password are not matched.</div>';
                            }

                        }
                        
                        ?>

    </section>

    <section>
    div id="top-header">
		<div class="container">
			<ul class="header-links pull-left">
				<li><a href="#"><i class="fa fa-phone"></i>0833300716</a></li>
				<li><a href = "https://www.facebook.com/Chikara-Electric-104182552149002" target="_blank"><i class = "fa fa-facebook-square"></i>Chikara</a></li>
				<li><a href="https://www.google.com/maps/place/H%E1%BB%8Dc+vi%E1%BB%87n+Ng%C3%A2n+h%C3%A0ng/@21.0091314,105.8266192,17z/data=!3m1!4b1!4m5!3m4!1s0x3135ac800f450807:0x419a49bcd94b693a!8m2!3d21.0091264!4d105.8288132" target="_blank"><i class="fa fa-map-marker"></i>123 Main Street, Bangalore, India</a></li>
			</ul>
			<ul class="header-links pull-right" id ="header__right">
				<!-- <li><a href="#"><i class="fa fa-dollar"></i> VND</a></li> -->
				<li><a href="#modalRegister" class="trigger-btn" data-toggle="modal">Register</a></li>
				<li><a href="#modalLogin" class="trigger-btn" data-toggle="modal">Log in</a></li>
			</ul>
		</div>
	</div>
	<!-- Right -->
	<div id="modalLogin" class="modal fade">
		<div class="modal-dialog modal-login">
			<div class="modal-content">
				<div class="modal-header">
					<div class="avatar">
						<img src="img/avatar.png" alt="Avatar">
					</div>				
					<h4 class="modal-title">Log in</h4>	
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<form action="actions/User/Login.php" method="POST">
						<div class="form-group">
						<input type="text" class="form-control" name="phonenumber" placeholder="Phone number" required="required">		
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="password" placeholder="Password" required="required">	
						</div>        
						<div class="form-group">
							<button type="submit" class="btn btn-primary btn-lg btn-block login-btn">OK</button>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<a href="#">Forgot your password?</a>
				</div>
			</div>
		</div>
	</div>   

	<div id="modalRegister" class="modal fade">
		<div class="modal-dialog modal-login">
			<div class="modal-content">
				<div class="modal-header">
					<div class="avatar">
						<img src="img/avatar.png" alt="Avatar">
					</div>				
					<h4 class="modal-title">Sign Up</h4>	
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<form action="actions/User/Register.php" method="POST" onsubmit="return check_psw()">
						<div class="form-group">
						<input type="text" class="form-control" name="hoten" placeholder="Full name" required="required">		
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="phonenumber" placeholder="Phone number" required="required">		
					</div>
					<div class="form-group">
						<input type="password" id="psw_register" class="form-control" name="password" placeholder="Password" required="required">	
					</div>    
					<div class="form-group">
						<input type="password" id="re_psw_register" class="form-control" name="re-password" placeholder="Confirm Password" required="required">	
						</div>        
						<div class="form-group">
							<button id = "btn_dk--ok" type="submit" class="btn btn-primary btn-lg btn-block login-btn">OK</button>
						</div>
					</form>
          <?php
    session_start();
    include ("config.php");
    $id = $_POST[""];
    $pws = $_POST["password"];
    $sql = "SELECT * FROM `user` WHERE `id` = '$id' AND `password` = '$pws'";
    $result = $conn -> query($sql);
    if($result -> num_rows <= 0)
    {
        echo "
        <script>
            alert('Wrong phone number or password');
            window.history.go(-1);
        </script>";
    }
    else 
    {
        $sql_check = $conn -> query("SELECT is_deleted FROM usr WHERE id = '$id'");
        $rows = $sql_check -> fetch_array();
        $check = $rows[0];
        if($check == 1){
            session_destroy();
            echo "
            <script>
                alert('account is locked');
                window.history.go(-1);
            </script>";
        }
        else
        {
            $row = $result->fetch_assoc();
            $_SESSION["active"] = $id;
            $_SESSION["role"] = $row["role_id"];
            header('location: index.php');
        }
    }
?> 
				</div>
			</div>
		</div>
	</div> 
    </section>


    
    



  </main> <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Arsha</h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Arsha</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js" integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="assets/js/main.js"></script>
  <script src="action.js"></script>

</body>

</html>