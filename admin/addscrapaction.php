<?php
	
	$purprice=(int)$_POST['cost'];
	$sellprice=$purprice+8;
	
	$name = $_FILES['scrapimage']['name'];
  $target_dir = "scrapimage/";
  $target_file = $target_dir . basename($_FILES['scrapimage']['name']);

  // Select file type
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","png","gif");

  // Check extension
  if( in_array($imageFileType,$extensions_arr) ){
	 
	require("../connection.php");
	//$description=cleanInputSQL($_POST['description']);
	$sql = "INSERT INTO scrap (Name, PR_GOOD, PR_MED, PR_BAD, Purchase_rate, Sell_rate, Unit, image, status)
            VALUES ('".$_POST['scrapname']."', 1.0, 0.8, 0.5, ".$purprice.",".$sellprice.", '".$_POST['unit']."', '".$name."','".$_POST['status']."')";
            $pdo->exec($sql);
			
			// Upload file
     move_uploaded_file($_FILES['scrapimage']['tmp_name'],$target_dir.$name);
    header("location:showscrap.php");        
  }

?>

