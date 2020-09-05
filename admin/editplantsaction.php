<?php 
try
{
	session_start();
	$type=$_POST['planttype'];
//$description ="<pre>".addslashes( $description )."</pre>";
	$purprice=(int)$_POST['cost'];
	$sellprice=$purprice+50;
	
	 
	require("../connection.php");
	//$description=cleanInputSQL($_POST['description']);
  $sql = "UPDATE plant SET Name='".$_POST['name']."',Location='".$_POST['planttype']."',Purchase_Price=".$purprice.",Sell_Price=".$sellprice.",status=".$_POST['status']." WHERE Plant_ID=".$_SESSION['id'].""; 
    $pdo->exec($sql);		
	header("location:plants.php"); 
	} 

catch(Exception $e)
{
echo "Error".$e;
}
?>