<!DOCTYPE html>
<html>
<title>PaperPlant</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
<?php
session_start();
require("head.php");
?>
<style>
input, select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}

</style>
<script>
	
	Date.prototype.addDays = function(days) {
    var date = new Date(this.valueOf());
    date.setDate(date.getDate() + days);
    return date;
	}

	function adddate()
	{
		var list= document.getElementById('date');	
		var i;
		for(i=0;i<5;i++)
		{
			var today= new Date();
			today=today.addDays(i);
			var dd=String(today.getDate()).padStart(2,'0');	
			var mm=String(today.getMonth()+1).padStart(2,'0');
			var yyyy= today.getFullYear();
			today=dd+'/'+mm+'/'+yyyy;
			var option= document.createElement("option");
			option.text= today;
			option.value= today;
			list.add(option);
		}
		
	}
	function addtime()
	{
		var list= document.getElementById('time');
		var b=10,a=11;
		while(a<=18)
		{
			
			var option= document.createElement("option");
			var time= b+' to '+a;
			
			option.text= time;
			option.value= time;
			list.add(option);
			a++;
			b++;
		}
	}
	function ClearForm()
	{
		document.getElementById("sell").reset();
	}
</script>
<body onload="adddate(), addtime(), ClearForm()">
<hr />
<p class="text-center"style="font-size:2.5vw">Fill details</p>
<div style="margin:5%;border-radius: 5px;background-color: #f2f2f2;padding: 20px; ">
  <form id="sell" action="factoryaction.php" method="post">
    <label>Company Name</label>
    <input type="text" id="name" name="name" placeholder="Your name..">

    <label>Contact No.</label>
    <input type="number" placeholder="Enter Mobile No." id="num" name="num" maxlength="10" required>
	
	<input type="submit" value="Submit">
  </form>
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
