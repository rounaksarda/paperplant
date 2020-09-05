<?php
$target_dir = "profilepicture/";

$target_file = $target_dir . basename($_FILES["profilepicture"]["name"]);
//echo $target_file;
//die;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
move_uploaded_file($_FILES["profilepicture"]["tmp_name"], $target_file);
// echo $target_file;
//   die;
// //Check if image file is a actual image or fake image
// if(isset($_POST["submit"])) {
//   echo $target_file;
//   die;
//     $check = getimagesize($_FILES["profilepicture"]["tmp_name"]);
//     if($check !== false) {
//         echo "File is an image - " . $check["mime"] . ".";
//         $uploadOk = 1;
//     } else {
//         echo "File is not an image.";
//         $uploadOk = 0;
//     }
//     if (move_uploaded_file($_FILES["profilepicture"]["tmp_name"], $target_file)) {
//         echo "The file ". basename( $_FILES["profilepicture"]["name"]). " has been uploaded.";
//     } else {
//         echo "Sorry, there was an error uploading your file.";
//     }
// }
// die;
?>


<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST")
{

  if(strlen($_POST["firstname"])<3 or strlen($_POST["firstname"])>20 or filter_var($_POST["firstname"],513)== false)
    {
      $_SESSION['message']= "First Name Error";
      header("location:../editprofile.php");
      die;
    }
  else
    {
      $firstname=$_POST["firstname"];
    }


  if(strlen($_POST["lastname"])<3 or strlen($_POST["lastname"])>20 or filter_var($_POST["lastname"],513)== false)
    {
      $_SESSION['message']="last Name Error";
      header("location:../editprofile.php");
      die;
    }
  else 
    {
      $lastname=$_POST["lastname"];
    }

 
    if(!isset($_SESSION['message']) && isset($_SESSION['email']) )
    { 
     
       try 
      {
      
      
       require("../connection.php");
     
      

        if($_FILES["profilepicture"]["tmp_name"]==null)
      {
        //echo "hello";
         $sql = "UPDATE user_table set first_name='".$firstname."' , last_name='".$lastname."' where email='".$_SESSION["email"]."'"; 
      $pdo->exec($sql);
      $_SESSION["firstname"]=$firstname;
      $_SESSION["lastname"]=$lastname;
      $_SESSION['message']="All update saved.";
      header("location:../editprofile.php");
      }
      
      else
      {
      $sql = "UPDATE user_table set first_name='".$firstname."' , last_name='".$lastname."' , profilepicture='account/profilepicture/". $_FILES["profilepicture"]["name"]."' where email='".$_SESSION["email"]."'"; 
      $pdo->exec($sql);
      $_SESSION["firstname"]=$firstname;
      $_SESSION["lastname"]=$lastname;
      $_SESSION['message']="All update saved.";
      header("location:../editprofile.php"); 
      }

      }
      catch (PDOException $e)
      { 
      die("ERROR: Could not able to execute $sql. " .$e->getMessage()); 
      } 
      unset($pdo);
    }
}
else
{
  header("location:../login/index.php");
  die;
}    
     
?>



