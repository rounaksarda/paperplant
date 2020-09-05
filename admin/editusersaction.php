<?php 
try
{
	session_start();
	require("../connection.php");


	$sql = "UPDATE user_table SET first_name='".$_POST['first_name']."',last_name='".$_POST['last_name']."',email='".$_POST['email']."',status=".$_POST['status']." WHERE id=".$_SESSION['id'].""; 
    $pdo->exec($sql);

    header("location:users.php");

}
catch(Exception $e)
{
echo $e;
}
?>