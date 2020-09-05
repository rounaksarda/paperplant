<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <!-- top bar -->
  <!--  <div class="top-bar">  -->
        <div class="container">
            <div class="row">
<!--<div class="col-md-9">Have you heard?&nbsp;Our new show <strong><em>Scale or Die</em></strong><em> </em>is trending Apple's New &amp; Noteworthy 7 weeks in a row!</div>-->
            </div>
      <!--  </div> -->
    </div>
    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-expand-lg navbar-dark bg-dark"> 
	<?php
            //session_start();
            if(isset($_SESSION) && !empty($_SESSION["email"]))
              {  
				$_SESSION['em']=$_SESSION['email'] ;
              }
        ?>
        <div class="container"> <a class="navbar-brand js-scroll-trigger" href="index.php">PAPERPLANT</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
            <div class="collapse navbar-collapse" id="navbarResponsive" style="color:black">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"> <a class="nav-link js-scroll-trigger" href="index.php">Home</a> </li>
                    <!-- <li class="nav-item"> <a class="nav-link js-scroll-trigger" href="#service">Services</a> </li> -->
                    <li class="nav-item"> <a class="nav-link js-scroll-trigger" href="scrap.php">Price List</a> </li>
					<li class="nav-item"> <a class="nav-link js-scroll-trigger" href="sell.php">Schedule Pickup</a> </li>
                  <!--  <li class="nav-item"> <a class="nav-link js-scroll-trigger" href="#signup">Sign up</a> </li> -->
					<?php
					
						if(isset($_SESSION) && !empty($_SESSION["email"]))
						{
							echo "<li class=\"nav-item\"> <a class=\"nav-link js-scroll-trigger\" href=#><img src=\"images/cart.jpg\" height=\"30\" width=\"30\"> Cart</a> </li>";
						}
					?>
				</ul>
            </div> 
                    <?php

                    if (isset($_SESSION) && !empty($_SESSION["email"]))
                    {
                    ?>
        

                    <body>
                    <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<?php
					echo strtoupper($_SESSION["firstname"]." ".$_SESSION["lastname"]) ;
					?>
					</a>
                    <!--<img src="account/imagedown.png" width="20%" height="20%">-->
                    <!--<button class="dropbtn">Account </button>-->
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <!--        <a href="#">Profile</a> -->
                    <a class="dropdown-item" href="logout.php" onclick="index" > Logout</a>

					<script type="text/javascript">

                        
                    </script>
                    </div>
                    </div>

                    </body>


                    <?php
                    unset($_SESSION['status']);

                    //echo "<a class=\"btn btn-light bg-light border ml-4\" href=\"login/index.php\">Logout</a>";
                   // session_destroy();
                    }  
                    else 
                    { 
                    echo "<a class=\"btn btn-light bg-light border ml-4\" href=\"signup/signup.php\">Signup</a>";
					echo "<a class=\"btn btn-light bg-light border ml-4\" href=\"login/index.php\">Login </a>" ;
                    }                    
                ?>
        </div>
    </nav>