<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Scrap Price</title>
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
<!-- Pricing section -->
    <div class="space-md" id="pricing">
        <div class="container">
           
            <div class="row">
              

<?php
 $i=1;   

function printResultSet(&$rowset, $i)
{  
  $key=0; 
    foreach ($rowset as $row) 
    {   
         $count=1;
        echo "<div class=\"col-md-4\">  
                    <div class=\"card pricing-v3 p-md-5 p-sm-3 text-center\">
                        <div class=\"v3-row\">";

                         //<a href=\"plandetail.php?id=".$key."\">

       foreach ($row as $col) 
       {    
            if($count==1)
            {
                echo "<div class=\"mt-4\"><img src='admin/scrapimage/".$col."' height=\"200\" width=\"200\"></div>";
                $count++;
				continue;
            }
			
			if($count==2)
            {
                echo "<p class=\"mb-3\">".$col."</p>";
                $count++;
                continue;
            }
            if($count==3)
            {
                echo "<h3><b>Rs. ".$col."</b></h6>"; 
            // echo "<a class=\"btn btn-outline-primary\" href=\"#\">Start Free Trial</a>";
                $count++;
				continue;
            }
			if($count==4)
            {
                echo "<p class=\"mb-3\">".$col."</p></div></div></div>"; 
            // echo "<a class=\"btn btn-outline-primary\" href=\"#\">Start Free Trial</a>";
                continue;
            }
            
       }
       //echo "</a>";
    
    }
}

try
{
  //  $i=0;
    require("connection.php");
    $sql="SELECT image, Name, Purchase_rate, Unit from scrap where status=1";
    $stmt = $pdo->query($sql); 

    do
    {
        $rowset = $stmt->fetchAll(PDO::FETCH_NUM);
        
        if ($rowset) 
        {
        printResultSet($rowset, $i);
        //echo $i;
        }
        $i++;

    }
    while ($stmt->nextRowset());

}   
catch(Exception $e)
{
    echo $e;
}
?>



            </div>
        </div>
    </div>
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