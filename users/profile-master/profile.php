<?php
	  session_start();
	  if(!isset($_SESSION["user"])){
	    header('Location:signup.php');
	  }
	?>
	<!DOCTYPE html>
	<html>
	  <head>
	    <meta charset="utf-8">
	    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <title>TechnophileRental</title>
	    <meta name="description" content="">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="robots" content="all,follow">
	    <!-- Bootstrap CSS-->
	    <link rel="stylesheet" href="../html1/vendor/bootstrap/css/bootstrap.min.css">
	    <!-- Font Awesome CSS-->
	    <link rel="stylesheet" href="../html1/vendor/font-awesome/css/font-awesome.min.css">
	    <!-- Google fonts - Roboto-->
	    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
	    <!-- Bootstrap Select-->
	    <link rel="stylesheet" href="../html1/vendor/bootstrap-select/css/bootstrap-select.min.css">
	    <!-- owl carousel-->
	    <link rel="stylesheet" href="../html1/vendor/owl.carousel/assets/owl.carousel.css">
	    <link rel="stylesheet" href="../html1/vendor/owl.carousel/assets/owl.theme.default.css">
	    <!-- theme stylesheet-->
	    <link rel="stylesheet" href="../html1/css/style.default.css" id="theme-stylesheet">
	    <!-- Custom stylesheet - for your changes-->
	    <link rel="stylesheet" href="../html1/css/custom.css">
	    <link rel="stylesheet" type="text/css" href="search.css">
	    <!-- Favicon and apple touch icons-->
	    <link rel="shortcut icon" href="../html1/img/technophilerentalimages/favicon.ico" type="image/x-icon">

	        <link rel="stylesheet" type="text/css" href="../css/footer.css">

	  <link rel="stylesheet" type="text/css" href="../css/searchbar.css">
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">




	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->

	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->



	  </head>
	  <body>

	    <div id="all">
	    <!-- Navbar Start-->
	    <header class="nav-holder make-sticky">
	      <div id="navbar" role="navigation" class="navbar navbar-expand-lg">
	        <div class="container"><a href="../php/homepage1.php" class="navbar-brand home"><img src="../php/logo.jpg" alt="logo" class="d-none d-md-inline-block"><img src="../php/logo.jpg" alt="logo" class="d-inline-block d-md-none"><span class="sr-only">Technophile - go to homepage</span></a>
	          <button type="button" data-toggle="collapse" data-target="#navigation" class="navbar-toggler btn-template-outlined"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
	          <div id="navigation" class="navbar-collapse collapse">
	            <ul class="nav navbar-nav ml-auto">
	              <li class="nav-item dropdown active"><a href="../php/homepage.php">Home <b class="caret"></b></a>
	              </li>
	              <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Categories<b class="caret"></b></a>
	                <ul class="dropdown-menu megamenu">
	                  <li>
	                    <div class="row">
	                      <div class="col-lg-6"><img src="../html1/img/BestSeller1.png" alt="" class="img-fluid d-none d-lg-block"></div>
	                      <div class="col-lg-3 col-md-6">
	                        <h5>Best Sellers</h5>
	                        <ul class="list-unstyled mb-3">
	                          <li class="nav-item"><a href="../php/speaker.php" class="nav-link">Speaker</a></li>
	                          <li class="nav-item"><a href="../php/hoverboard.php" class="nav-link">Hoverboards and Drones</a></li>
	                          <li class="nav-item"><a href="../php/playstation.php" class="nav-link">PlayStation</a></li>
	                          <li class="nav-item"><a href="../php/karoke.php" class="nav-link">karoke</a></li>
	                          <li class="nav-item"><a href="../php/karoke.php" class="nav-link">Remote control</a></li>
	                          <li class="nav-item"><a href="../php/board.php" class="nav-link">Board Games</a></li>
	                          <li class="nav-item"><a href="../php/camera.php" class="nav-link">Camera's</a></li>
	                        </ul>
	                      </div>
	                    </div>
	                  </li>
	                </ul>
	              </li>

	              <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" class="dropdown-toggle">
	                    <?php
	                              if(isset($_SESSION["user"])){
	                                echo "<div class='d-flex justify-content-md-end justify-content-between'>Hello, " .$_SESSION['user']."</div>";

	                                }else{
	                                echo "<div class='d-flex justify-content-md-end justify-content-between'>Login </div>";
	                              }
	                            ?>
	 <b class="caret"></b></a>
	                <ul class="dropdown-menu megamenu">
	                  <li>
	                        <ul class="list-unstyled mb-3">
	                          <li class="nav-item"><a href="../profile-master/profile.php" class="nav-link">Profile</a></li>
	                          <li class="nav-item"><a href="../php/showcart.php" class="nav-link">Your Cart
	                                              <i class="fa fa-shopping-cart" style="font-size:24px;color:white;">
	                                                 <?php
	                                                  include 'C:/xampp/htdocs/TechnophileRental/users/php/countcart.php';
	                                                  echo "<span class='badge' style='background-color:#6394F8;border-radius:10px;font-size:12px;padding:3px 7px;'>".$count."</span>";
	                                                ?>

	                                            </i></a>
	                                          </li>
	                          <li class="nav-item"><a href="../php/logout.php" class="nav-link">Logout</a></li>
	                        </ul>
	                  </li>
	                </ul>
	              </li>
	              <!-- <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Register <b class="caret"></b></a>
	                <ul class="dropdown-menu megamenu">
	                  <li>
	                        <ul class="list-unstyled mb-3">
	                          <li class="nav-item"><a href="../php/signup.php" class="nav-link">Sign Up</a></li>
	                          <li class="nav-item"><a href="../php/signup.php" class="nav-link">Sign In</a></li>
	                        </ul>
	                  </li>
	                </ul>
	              </li> -->
	              <li class="nav-item dropdown menu-large">
	                <a href="../php/showcart.php">
	                 <i class="fa fa-shopping-cart" style="font-size:24px;color:black;">

	                      <?php
	                     include '../php/countcart.php';
	                     echo "<span class='badge' style='background-color:#6394F8;border-radius:10px;font-size:12px;padding:3px 7px;'>".$count."</span>";
	                   ?>

	               </i>
	             </a>
	              </li>
	              <!-- ========== Contact dropdown ==================-->
	              <li class="nav-item dropdown"><a href="../php/contactus.php">Contact Us <b class="caret"></b></a>
	              </li>

	            </ul>

	          </div>


	      <!-- Navbar End-->
	      <div class="row">
	        <div class="col-lg-8">
	      <header class="nav-holder make-sticky">
</header>
	          </div>
	        </div>
	      </header>
	      <!-- Navbar End-->

              </div>
            </div>



	<div class="fh5co-loader"></div>

	<div id="page">
	<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-md-offset-2 text-center">
					<div class="display-t js-fullheight">
						<div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
							<div class="profile-thumb" style="background: url(images/user-3.jpg);"></div>
							<p><?php
				        include '../php/databaseconnection.php';
                    if(isset($_SESSION["user"])){
                    $email = $_SESSION['user'];
										// $user = $_GET["user"];
										// echo $user;

				            $sql="select * from signup where email='".$email."'";

				            $result=mysqli_query($conn,$sql);
				            if(mysqli_num_rows($result)>0){
				              while($row=mysqli_fetch_assoc($result)){
												echo "<h1><span>".$row["name"]." ".$row["lname"]."</span></h1>";
				                echo "<h3><span>".$row["email"]."</span></h3>";
												echo "<h3><span>".$row["phone"]."</span></h3>";
												echo "<h3><span>".$row["address"]."</span></h3>";
				              }
				            }
}
				      ?></p>
							<p>
								<ul class="fh5co-social-icons">
									<li><a href="#"><i class="icon-twitter2"></i></a></li>
									<li><a href="#"><i class="icon-facebook2"></i></a></li>
									<li><a href="#"><i class="icon-linkedin2"></i></a></li>
									<li><a href="#"><i class="icon-dribbble2"></i></a></li>
								</ul>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

</div>


        <!-- FOOTER -->
          <footer class="site-footer">

            <div class="container">
              <div class="row">
                <div class="col-md-8 col-sm-6 col-xs-12">
                  <p class="copyright-text" style="color:white">Developed with
               <a href="#" style="color:white"><i class="fa fa-heart"> by Technophile</i></a>.
                  </p>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                  <ul class="social-icons">
                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
      </footer>
        <!-- FOOTER -->

      <!-- Javascript files-->
      <script src="../html1/vendor/jquery/jquery.min.js"></script>
      <script src="../html1/vendor/popper.js/umd/popper.min.js"> </script>
      <script src="../html1/vendor/bootstrap/js/bootstrap.min.js"></script>
      <script src="../html1/vendor/jquery.cookie/jquery.cookie.js"> </script>
      <script src="../html1/vendor/waypoints/lib/jquery.waypoints.min.js"> </script>
      <script src="../html1/vendor/jquery.counterup/jquery.counterup.min.js"> </script>
      <script src="../html1/vendor/owl.carousel/owl.carousel.min.js"></script>
      <script src="../html1/vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js"></script>
      <script src="../html1/js/jquery.parallax-1.1.3.js"></script>
      <script src="../html1/vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
      <script src="../html1/vendor/jquery.scrollto/jquery.scrollTo.min.js"></script>
      <script src="../html1/js/front.js"></script>





	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>
