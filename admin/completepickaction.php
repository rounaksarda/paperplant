


<?php



try
{
require("../connection.php");
//$sql="DELETE FROM newpickup where Mobile_No='".$_GET['num']."'";
//$pdo->exec($sql);
$sql1 = "SELECT Name from newpickup where Mobile_No='".$_GET['num']."'";
$name = $pdo->query($sql1);
foreach($name as $i)
{
	echo $i[0];
	$sql2 = "INSERT INTO scrap_pick (Name,Mobile_No)
            VALUES ('".$i[0]."', '".$_GET['num']."')";
	$pdo->exec($sql2);
}
$sql="DELETE FROM newpickup where Mobile_No='".$_GET['num']."'";
$pdo->exec($sql);
header("location:pending.php");
die;
}
catch(Exception $e)
{
	echo $e;
} 


?>

