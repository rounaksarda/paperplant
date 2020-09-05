


<?php



try
{
require("../connection.php");
$sql="DELETE FROM user_table where id='".$_GET['id']."'";
$pdo->exec($sql);
header("location:users.php");
die;
}
catch(Exception $e)
{
	echo $e;
} 


?>

