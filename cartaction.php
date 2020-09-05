<?php 
try
{
	session_start();
	$orderid = json_decode($_POST['str'], true); 
	$total = json_decode($_POST['tot'], true);
	/*foreach($orderid as $id=>$qty)
	{
		print $id;
	}*/
	//print_r($orderid);
	//echo $total;
	require("connection.php");
	// To insert into order table
	$sql = "INSERT INTO plant_order(email,Total) VALUES('".$_SESSION['email']."',".$total.")"; 
    $pdo->exec($sql);

	// To fetch order id fromoreder table
	$sql1 = "SELECT Order_ID from plant_order WHERE email LIKE '".$_SESSION['email']."'";
	$stmt1 = $pdo->query($sql1);
	$oid = $stmt1->fetch(PDO::FETCH_COLUMN);
	foreach($orderid as $id=>$qty)
	{
		// To select sell price of plant from plant table
		$sql = "SELECT Sell_Price from plant WHERE Plant_ID=".$id;
		$stmt = $pdo->query($sql);
		$sellp = $stmt->fetch(PDO::FETCH_COLUMN);
		//print $sellp;
		
		$amount = $qty*$sellp;
		// To insert into sell plant if payment successful 
		$sql2 = "INSERT INTO sell_plant(Order_ID, email, Plant_ID, Qty, Amount) VALUES(".$oid[0].", '".$_SESSION['email']."', ".$id.", ".$qty.", ".$amount.")";
		$pdo->exec($sql2);
	}
	
	// To delete from cart table
	$sql3 = "DELETE FROM cart WHERE email LIKE '".$_SESSION['email']."'";
	$pdo->exec($sql3);
	
}


catch(Exception $e)
{
echo "Error".$e;
}
?>