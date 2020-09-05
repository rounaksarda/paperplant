<?php
try
{
require("../connection.php");
$sql="DELETE FROM scrap where Scrap_ID='".$_GET['id']."'";
$pdo->exec($sql);
header("location:showscrap.php");
die;
}
catch(Exception $e)
{
	echo $e;
} 
?>


