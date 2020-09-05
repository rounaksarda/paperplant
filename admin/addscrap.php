<?php

session_start();
if ($_SESSION['type']!=2)
{
header("location:../index.php");
die;
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Scrap</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons CSS -->

 <!-- side nav css file -->
 <link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
 <!-- side nav css file -->
 
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts--> 

<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->

</head> 
<body class="cbp-spmenu-push">
    <div class="main-content">
    <div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
        <!--left-fixed -navigation-->
        <aside class="sidebar-left">
      <nav class="navbar navbar-inverse">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <h1><a class="navbar-brand" href="../index.php"><span class="fa fa-area-chart"></span> PAPERPLANT<span class="dashboard_text">Be Eco-Friendly</span></a></h1>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="sidebar-menu">
              <li class="header">MAIN NAVIGATION</li>
              <li class="treeview">
                <a href="index.php">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
              </li>
              
              <li class="treeview">
               <!--  <a href="users.php"> -->
                <a href="#">
                <i class="fa fa-table"></i> <span>Users</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                 <ul class="treeview-menu">
                  <li><a href="users.php"><i class="fa fa-angle-right"></i> All Users</a></li>
                  
                </ul>
                <!-- </a> -->
                
              </li>
			  <li class="treeview">
               <!--  <a href="users.php"> -->
                <a href="#">
                <i class="fa fa-table"></i> <span>Pending</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                 <ul class="treeview-menu">
                  <li><a href="pending.php"><i class="fa fa-angle-right"></i> Pending request</a></li>
                </ul>
                <!-- </a> -->
                
              </li>
              
                <li class="treeview">
                <a href="#">
                <i class="fa fa-table"></i> <span>Plants</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                    <ul class="treeview-menu">
                    <li><a href="plants.php"><i class="fa fa-angle-right"></i> Show Plants</a></li>
                    <li><a href="add.php"><i class="fa fa-angle-right"></i> Add Plants</a></li>
                    <!-- <li><a href="delete.php"><i class="fa fa-angle-right"></i> Delete Plan </a></li> -->
                    </ul>
              </li>
			  
			  <li class="treeview">
                <a href="#">
                <i class="fa fa-table"></i> <span>Scrap</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                    <ul class="treeview-menu">
                    <li><a href="showscrap.php"><i class="fa fa-angle-right"></i> Show Scraps</a></li>
                    <li><a href="addscrap.php"><i class="fa fa-angle-right"></i> Add Scraps</a></li>
                    </ul>
              </li>
              
              
            </ul>
          </div>
          <!-- /.navbar-collapse -->
      </nav>
    </aside>
    </div>
        <!--left-fixed -navigation-->
        
        <!-- header-starts -->
        <div class="sticky-header header-section ">
            <div class="header-left">
                
                <!--toggle button start-->
                <button id="showLeftPush"><i class="fa fa-bars"></i></button>
                <!--toggle button end-->
                
                <!--notification menu end -->
                <div class="clearfix"> </div>
            </div>
            <div class="header-right">
                
                
                <!--search-box-->
                <div class="search-box">
                    <form class="input">
                        <input class="sb-search-input input__field--madoka" placeholder="Search..." type="search" id="input-31" />
                        <label class="input__label" for="input-31">
                            <svg class="graphic" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                            </svg>
                        </label>
                    </form>
                </div><!--//end-search-box-->
                
                <div class="profile_details">       
                    <ul>
                        <li class="dropdown profile_details_drop">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <div class="profile_img">   
                                    <span class="prfil-img"><img src="images/admin.png" alt=""> </span> 
                                    <div class="user-name">
                                        <p><?php echo $_SESSION['firstname']." ".$_SESSION['lastname']; ?></p>
                                        <span>Administrator</span>
                                    </div>
                                    <i class="fa fa-angle-down lnr"></i>
                                    <i class="fa fa-angle-up lnr"></i>
                                    <div class="clearfix"></div>    
                                </div>  
                            </a>
                            <ul class="dropdown-menu drp-mnu">
                                <li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
                                <li> <a href="#"><i class="fa fa-user"></i> My Account</a> </li>
                                <li> <a href="#"><i class="fa fa-suitcase"></i> Profile</a> </li> 
                                <li> <a href="../logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"> </div>               
            </div>
            <div class="clearfix"> </div>   
        </div>
        <!-- //header-ends -->
        <!-- main content start-->
        <div id="page-wrapper">
            <div class="main-page">
                
            <div class="row">
                        <h3 class="title1">Scrap Detail Page :</h3>
                        <div class="form-three widget-shadow">
                            <form action="addscrapaction.php" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="focusedinput" class="col-sm-2 control-label">Scrap Name</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control1" id="focusedinput" name="scrapname" placeholder="Name of Scrap">
                                    </div>
                                    <!--<div class="col-sm-2">
                                        <p class="help-block">Your help text!</p>
                                    </div>-->
                                </div>
                                <div class="form-group">
                                    <label for="disabledinput" class="col-sm-2 control-label">Scrap Purchase Cost </label>
                                    <div class="col-sm-8">
                                        <input type="number" class="form-control1" id="focusedinput" name="cost" placeholder="Enter cost per kg">
                                    </div>
                                </div>
								
								<div class="form-group">
                                    <label for="radio" class="col-sm-2 control-label">Scrap Purchase Unit</label>
                                    <div class="col-sm-8">
                                        <div class="radio block"><label><input type="radio" name="unit" value="per kg"> Per kg</label></div>
                                        <div class="radio block"><label><input type="radio" name="unit" value="per piece"> Per piece</label></div>
                                    </div>
                                </div>
								
								<div class="form-group">
                                    <label for="uploadimage" class="col-sm-2 control-label">Scrap Image </label>
                                    <div class="col-sm-8">
                                        <input type="file" class="form-control1" id="scrapimage" name="scrapimage">
                                    </div>
                                </div>
								
                                <div class="form-group">
                                    <label for="radio" class="col-sm-2 control-label">Scrap Status</label>
                                    <div class="col-sm-8">
                                        <div class="radio block"><label><input type="radio" name="status" value="1"> Active</label></div>
                                        <div class="radio block"><label><input type="radio" name="status" value="0"> Unactive</label></div>
                                    </div>
                                </div>
						
								<div class="col-sm-offset-2"> <button type="submit" class="btn btn-default">Add</button> </div>
                                
                            </form>
                        </div>
                    </div>
        </div>
        

    </div>
    
    <!-- side nav js -->
    <script src='js/SidebarNav.min.js' type='text/javascript'></script>
    <script>
      $('.sidebar-menu').SidebarNav()
    </script>
    <!-- //side nav js -->
    
    <!-- Classie --><!-- for toggle left push menu script -->
        <script src="js/classie.js"></script>
        <script>
            var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
                showLeftPush = document.getElementById( 'showLeftPush' ),
                body = document.body;
                
            showLeftPush.onclick = function() {
                classie.toggle( this, 'active' );
                classie.toggle( body, 'cbp-spmenu-push-toright' );
                classie.toggle( menuLeft, 'cbp-spmenu-open' );
                disableOther( 'showLeftPush' );
            };
            
            function disableOther( button ) {
                if( button !== 'showLeftPush' ) {
                    classie.toggle( showLeftPush, 'disabled' );
                }
            }
        </script>
    <!-- //Classie --><!-- //for toggle left push menu script -->
    
    <!--scrolling js-->
    <script src="js/jquery.nicescroll.js"></script>
    <script src="js/scripts.js"></script>
    <!--//scrolling js-->
    
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.js"> </script>
    
</body>
</html>