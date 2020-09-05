<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home</title>
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
	<link rel="stylesheet" href="css/mycss.css">
</head>

<?php
session_start();
require("head.php");
?>
    <!-- Carousel -->
	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/pic1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/pic2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/pic3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    <div class="pp-center">
<p style="font-size:2.5vw">Our goal</p>
<p style="font-size:1.5vw"> our goal is to centralise the scattered and unmanaged sector of scrap handling</p>
</div>	
<hr />

    <section class="text-center w-90 border-bottom border-left border-right">
        <div class="container">
  <div class="row" style="font-size:2vw;">
    <div class="col"><a href="sell.php" style="text-decoration:none"><img src="Images/newspaper.png" alt="sell" style="width: 50%"><br>Sell scrap</a></div>
    <div class="col"><a href="donate.php" style="text-decoration:none"><img src="Images/magazines.png" style="width: 50%"><br>Donate scrap</a></div>
    <div class="w-100"></div>
    <hr />
	<div class="col"><a href="factory.php" style="text-decoration:none"><img src="Images/newspaper2.png" style="width:50%"><br>Buy scrap</a></div>
    <div class="col"><a href="plants.php" style="text-decoration:none"><img src="Images/plant.png" style="width: 50%"><br>Buy plants</a></div>
  </div>
</div>
        <!--end of container-->
    </section>
    <hr />
    <!-- </section>  -->
    <!-- Footer -->
    <footer id="footer">
        <div class="pp-row pp-black">
            <div class="pp-third" style="font-size:1.5vw">
                Download The App Now
				<br>
                <a href="#"><img src="Images/gplay.png" width="25%"></a>
                <a href="#"><img src="Images/astore.png" width="22%"></a>
            </div>
            <div class="pp-third pp-center" style="font-size:1.5vw">
                <a href="#" style="color:#FFFFFF">About Us</a>
                <br>
                <a href="#" style="color:#FFFFFF">Privacy Policies</a>
                <br>
                <a href="#" style="color:#FFFFFF">Careers</a>
                <br>
                <a href="#" style="color:#FFFFFF">Advertise With Us</a>
            </div>
            <div class="pp-third" style="font-size:1.5vw">
                &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspJoin Us <br>
                <a href="#" ><img src="Images/google.png" width="15%" style="float:right"></a>
				<a href="#"><img src="Images/twitter.png" width="15%" style="float:right"></a>
                <a href="#"><img src="Images/facebook.png" width="15%" style="float:right"></a>

            </div>
        </div>
    </footer>
    <div style=" background-color:#dd4b39; color:white ;font-size:14px;">
        <div style="text-align:center;">© - Paper Plant Technologies</div>
        </div>
    <!-- Footer -->
    <footer class="footer text-center">
        <div class="container"> </div>
    </footer>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for this template -->
    <script src="js/style.min.js"></script>
</body>

</html>