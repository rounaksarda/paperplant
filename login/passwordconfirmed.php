<?php
session_start();

try 
{
  if (strlen($_POST["password"])==null or strlen($_POST["password"])<8 or strlen($_POST["password"])>30 )
  {
  // header("location:index.html");
    $_SESSION['message']="The password is not in required formate";
    header("location:confirmpassword.php");
  } 

  if ($_POST["confirmpassword"] != $_POST["password"] )
  {
   $_SESSION['message']="The password not matched";
   header("location:confirmpassword.php");

  // header("location:index.html");
 } 
 else
 {

  $_SESSION['message']="You successfully updated your password please login!";
  require("../connection.php");
  $sql = "UPDATE user_table SET status=1, remember_tocken=null, password='".$_POST["password"]."' WHERE remember_tocken='".$_SESSION["tocken"]."'"; 
  // echo "hello"; die;
  $pdo->exec($sql); 
  //session_destroy();
  
  header("location:index.php");
  
}
}
catch (Exception $e)
{
	echo $e;
}
?>