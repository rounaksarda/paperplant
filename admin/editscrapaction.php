<?php 
try
{
	session_start();
	$purprice=(int)$_POST['cost'];
	$sellprice=$purprice+8;
	
	 
	require("../connection.php");
	//$description=cleanInputSQL($_POST['description']);
  $sql = "UPDATE scrap SET Name='".$_POST['scrapname']."',Purchase_rate=".$purprice.",Sell_rate=".$sellprice.",Unit='".$_POST['unit']."',status=".$_POST['status']." WHERE Scrap_ID=".$_SESSION['id'].""; 
    $pdo->exec($sql);		
	header("location:showscrap.php"); 
	} 

catch(Exception $e)
{
echo "Error".$e;
}
?>