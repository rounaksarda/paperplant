<?php
 session_start();
 

 if (strlen($_POST["newpassword"])==null or strlen($_POST["newpassword"])<8 or strlen($_POST["newpassword"])>30)
 {
 //echo "hello";
 //die;  
 	// or  
  $_SESSION["message"]="Password entered Error";

  header("location:changepassword.php");
  die;
 } 

 if ($_POST["confirmpassword"] != $_POST["newpassword"] )
 {
  $_SESSION["message"]="Both new password's not matched ";
  header("location:changepassword.php");
  die;
 } 

 
 {
 	try 
	{ 
    if(!empty($_SESSION["email"]))
    {
    require("../connection.php");
    $sql = "SELECT password FROM user_table where email='".$_SESSION['email']."'"; 
	$res = $pdo->query($sql); 
    $row = $res->fetch();
    	if ($row['password']==$_POST["oldpassword"])
    	{

		$sql = "Update user_table SET password='".$_POST["newpassword"]."' WHERE email='".$_SESSION['email']."'"; 
		$res = $pdo->query($sql);
		session_destroy();
    	session_start();

    	$_SESSION["verified"]="You have successfully changed your password ! Now you can login with your new password." ;
    	header("location:../login/index.php");
    	//session_destroy();
    	die;
    	}
    	else
    	{
  			$error = "You entered wrong old password!";
  			$_SESSION["message"]=$error;
  			header("location:changepassword.php");
    	}	
    } 
    else 
    { 
        echo "Something big happend just now ! Switch off your laptop"; 
    } 
	} 
	catch (PDOException $e)
	{ 
    die("ERROR: Could not able to execute $sql. " .$e->getMessage()); 
	} 
	unset($res);
	unset($pdo); 
 } 

?>