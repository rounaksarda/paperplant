<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Sign Up</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

		
		<link rel="stylesheet" href="css/style.css">
		<script>
		

		</script>
	</head>

	<body>

		<div class="wrapper" style="background-image: url('images/bg-registration-form-1.jpg');">
			<div class="inner">
				<div class="image-holder">
					<img src="images/registration-form-1.jpg" alt="">
				</div>
				<form name="myForm" onSubmit="return checkLength()" action="validate.php" method="POST">
					<h3>Registration Form</h3>
					<?php
						session_start();
						//print_r($_SESSION);

						if(isset($_SESSION) && !empty($_SESSION["error"])){
							//session_start();
							//echo "hello";
							$i=0;
							$error=array();
							$error=$_SESSION["error"]; 
							//print_r($_SESSION);
							//echo $error[i]; 
							$count=sizeof($error);
							echo "<fieldset><legend>Error encountered</legend>";
							while($i<$count)
							{
							global $i;
							$er=$error[$i];
							echo "<style=\"color:red;\">*".$er."</style><br>";
							global $i;
							$i++;
							}
							echo "</fieldset>";
							echo "<br>";
							session_destroy();
							//die;
					//print_r($_SESSION);	
					?>

					<?php }
					else {
						//echo "else";
						} ?>
					<div class="form-group">
						<input type="text" name="firstname" placeholder="First Name" class="form-control" pattern=".{3,}" required title="3 characters minimum">
						<input type="text" name="lastname" placeholder="Last Name" class="form-control" pattern=".{3,}" required title="3 characters minimum">
					</div>
					<!--<div class="form-wrapper">
						<input type="text" name="username" placeholder="Username" class="form-control" pattern=".{5,}" required title="5 characters minimum">
						<i class="zmdi zmdi-account"></i> 
					</div>-->
					<div class="form-wrapper">
						<input type="email" name="email" placeholder="Email Address" class="form-control" pattern=".{8,}" required title="8 characters minimum">
						<i class="zmdi zmdi-email"></i>
					</div>
					<div class="form-wrapper">
						<select name="gender" id="" class="form-control" required>
							<option value="" disabled selected>Gender</option>
							<option value="m">Male</option>
							<option value="f">Female</option>
							<option value="u">Other</option>
						</select>
						<i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
					</div>
					<div class="form-wrapper">
						<input type="password" name="password" placeholder="Password" class="form-control" pattern=".{8,}" required title="8 characters minimum">
						<i class="zmdi zmdi-lock"></i>
					</div>
					<div class="form-wrapper">
						<input type="password" name="confirmpassword" placeholder="Confirm Password" class="form-control" pattern=".{8,}" required title="8 characters minimum">
						<i class="zmdi zmdi-lock"></i>
					</div>
					<button onclick="checkAllLength()">Register
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
				</form>
			</div>
		</div>
		
	</body>
</html>