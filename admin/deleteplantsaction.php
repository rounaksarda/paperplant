<?php
try
{
require("../connection.php");
$sql="DELETE FROM plant where Plant_ID='".$_GET['id']."'";
$pdo->exec($sql);
header("location:plants.php");
die;
}
catch(Exception $e)
{
	echo $e;
} 
?>


