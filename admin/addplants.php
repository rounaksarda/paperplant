<?php
	
	$type=$_POST['planttype'];
//$description ="<pre>".addslashes( $description )."</pre>";
	$purprice=(int)$_POST['cost'];
	$sellprice=$purprice+50;
	
	$name = $_FILES['plantimage']['name'];
  $target_dir = "plantimage/";
  $target_file = $target_dir . basename($_FILES['plantimage']['name']);

  // Select file type
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","png","gif");

  // Check extension
  if( in_array($imageFileType,$extensions_arr) ){
	 
	require("../connection.php");
	//$description=cleanInputSQL($_POST['description']);
	$sql = "INSERT INTO plant (Name, Location, Purchase_Price, Sell_Price, image, status)
            VALUES ('".$_POST['plantname']."', '".$type."', ".$purprice.",".$sellprice.", '".$name."','".$_POST['r1']."')";
            $pdo->exec($sql);
			
			// Upload file
     move_uploaded_file($_FILES['plantimage']['tmp_name'],$target_dir.$name);
    header("location:plants.php");        
  }

?>

