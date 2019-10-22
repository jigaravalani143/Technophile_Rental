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

  </head>
  <body>

    <div id="all">
    <!-- Navbar Start-->
    <header class="nav-holder make-sticky">
      <div id="navbar" role="navigation" class="navbar navbar-expand-lg">
        <div class="container"><a href="homepage.php" class="navbar-brand home"><img src="logo.jpg" alt="logo" class="d-none d-md-inline-block"><img src="logo.jpg" alt="logo" class="d-inline-block d-md-none"><span class="sr-only">Technophile - go to homepage</span></a>
          <button type="button" data-toggle="collapse" data-target="#navigation" class="navbar-toggler btn-template-outlined"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
          <div id="navigation" class="navbar-collapse collapse">
            <ul class="nav navbar-nav ml-auto">
              <li class="nav-item dropdown active"><a href="homepage.php">Home <b class="caret"></b></a>
              </li>
              <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Categories<b class="caret"></b></a>
                <ul class="dropdown-menu megamenu">
                  <li>
                    <div class="row">
                      <div class="col-lg-6"><img src="../html1/img/BestSeller1.png" alt="" class="img-fluid d-none d-lg-block"></div>
                      <div class="col-lg-3 col-md-6">
                        <h5>Best Sellers</h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="speaker.php" class="nav-link">Speaker</a></li>
                          <li class="nav-item"><a href="hoverboard.php" class="nav-link">Hoverboards and Drones</a></li>
                          <li class="nav-item"><a href="playstation.php" class="nav-link">PlayStation</a></li>
                          <li class="nav-item"><a href="karoke.php" class="nav-link">karoke</a></li>
                          <li class="nav-item"><a href="karoke.php" class="nav-link">Remote control</a></li>
                          <li class="nav-item"><a href="board.php" class="nav-link">Board Games</a></li>
                          <li class="nav-item"><a href="camera.php" class="nav-link">Camera's</a></li>
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
                          <li class="nav-item"><a href="showcart.php" class="nav-link">Your Cart
                                              <i class="fa fa-shopping-cart" style="font-size:24px;color:white;">
                                                 <?php
                                                  include 'countcart.php';
                                                  echo "<span class='badge' style='background-color:#6394F8;border-radius:10px;font-size:12px;padding:3px 7px;'>".$count."</span>";
                                                ?>

                                            </i></a>
                                          </li>
                          <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
                        </ul>
                  </li>
                </ul>
              </li>
              <!-- <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Register <b class="caret"></b></a>
                <ul class="dropdown-menu megamenu">
                  <li>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="signup.php" class="nav-link">Sign Up</a></li>
                          <li class="nav-item"><a href="signup.php" class="nav-link">Sign In</a></li>
                        </ul>
                  </li>
                </ul>
              </li> -->
              <li class="nav-item dropdown menu-large">
                <a href="showcart.php">
                 <i class="fa fa-shopping-cart" style="font-size:24px;color:black;">

                      <?php
                     include 'countcart.php';
                     echo "<span class='badge' style='background-color:#6394F8;border-radius:10px;font-size:12px;padding:3px 7px;'>".$count."</span>";
                   ?>

               </i>
             </a>
              </li>
              <!-- ========== Contact dropdown ==================-->
              <li class="nav-item dropdown"><a href="contactus.php">Contact Us <b class="caret"></b></a>
              </li>

            </ul>

          </div>


      <!-- Navbar End-->
      <div class="row">
        <div class="col-lg-8">
      <header class="nav-holder make-sticky">

          </div>
        </div>
      </header>


          </div>
        </div>
      </header>
      <!-- Navbar End-->
     <form action="search1.php" method="post">

      <div class="container h-100">
      <div class="d-flex justify-content-end h-100">
      <div class="searchbar">
        <input class="search_input" type="text" name="search" placeholder="Search...">
        <a href="search1.php" class="search_icon"><i class="fa fa-search"></i></a>
      </div>
    </div>
  </div>
    </form>


    <div id="content">
      <div class="container">
        <div class="row bar">
          <div class="col-md-3">
            <!-- MENUS AND FILTERS-->
            <div class="panel panel-default sidebar-menu">
              <div class="panel-heading">
                <h3 class="h4 panel-title">Categories</h3>
              </div>
              <div class="panel-body">
                <ul class="nav nav-pills flex-column text-sm category-menu">
                  <li class="nav-item"><a href="homepage.php" class="nav-link active d-flex align-items-center justify-content-between"><span>Best Sellers </span><?php
                      include 'databaseconnection.php';
                      $sql="Select * from product_catalogue";
                      $result=mysqli_query($conn,$sql);
                      $count=mysqli_num_rows($result);
                      echo "<span class='badge badge-light'>$count</span>";

                  ?></a>


                  </li>
                  <li class="nav-item"><a href="speaker.php" class="nav-link d-flex align-items-center justify-content-between"><span>Speakers </span><?php
                      include 'databaseconnection.php';
                      $sql="Select * from speaker";
                      $result=mysqli_query($conn,$sql);
                      $count=mysqli_num_rows($result);
                      echo "<span class='badge badge-light'>$count</span>";

                  ?></a>

                  </li>
                  <li class="nav-item"><a href="hoverboard.php" class="nav-link d-flex align-items-center justify-content-between"><span>Hoverboards and Drones </span><?php
                      include 'databaseconnection.php';
                      $sql="Select * from hoveranddrone";
                      $result=mysqli_query($conn,$sql);
                      $count=mysqli_num_rows($result);
                      echo "<span class='badge badge-light'>$count</span>";

                  ?></a>

                  </li>
                  <li class="nav-item"><a href="playstation.php" class="nav-link d-flex align-items-center justify-content-between"><span>PlayStation </span><?php
                      include 'databaseconnection.php';
                      $sql="Select * from playstation";
                      $result=mysqli_query($conn,$sql);
                      $count=mysqli_num_rows($result);
                      echo "<span class='badge badge-light'>$count</span>";

                  ?></a>

                  </li>
                  <li class="nav-item"><a href="karoke.php" class="nav-link d-flex align-items-center justify-content-between"><span>Karaoke and remote controls </span><?php
                      include 'databaseconnection.php';
                      $sql="Select * from karoke";
                      $result=mysqli_query($conn,$sql);
                      $count=mysqli_num_rows($result);
                      echo "<span class='badge badge-light'>$count</span>";

                  ?></a>

                  </li>
                  <li class="nav-item"><a href="board.php" class="nav-link d-flex align-items-center justify-content-between"><span>Board Games  </span><?php
                      include 'databaseconnection.php';
                      $sql="Select * from boardgames";
                      $result=mysqli_query($conn,$sql);
                      $count=mysqli_num_rows($result);
                      echo "<span class='badge badge-light'>$count</span>";

                  ?></a>

                  </li>
                   <li class="nav-item"><a href="camera.php" class="nav-link d-flex align-items-center justify-content-between"><span>Camera's </span><?php
                      include 'databaseconnection.php';
                      $sql="Select * from camera";
                      $result=mysqli_query($conn,$sql);
                      $count=mysqli_num_rows($result);
                      echo "<span class='badge badge-light'>$count</span>";

                  ?></a>

                  </li>
                </ul>
              </div>
            </div>

          </div>
            <div class="col-md-9">
              <p class="text-muted lead">Kids this  section is for you!</p>
              <div class="row products products-big">


                      <?php
                        include 'databaseconnection.php';
                        $sql="Select Pid,Name,Image, Perday from playstation";
                        $result=mysqli_query($conn,$sql);

                        while($row=mysqli_fetch_assoc($result)){
                        echo "<div class='col-lg-4 col-md-6'>
                                  <div class='product'>
                                            <div class='image'><a href='display.php?Pid=".$row['Pid']."&test=4'><img src='".$row['Image']."' alt='Cannot display image' class='img-fluid image1'></a></div>

                                          <h3 class='h5'><a href='display.php?Pid=".$row['Pid']."&test=4'>'".$row["Name"]."'</a></h3>

                                          <div class='text'>

                                          <p class='price'>Perday rent:<i class='fa fa-rupee'> <b>".$row["Perday"]."</b></i></p>
                                      </div>


                                  </div>
                              </div>";



                            }
                      ?>
              </div>

                          </div>
          </div>
        </div>
      </div>
      <!-- GET IT-->





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



      <!-- FOOTER -->

    </div>
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
  </body>
</html>
