<?php

try
{

require("../connection.php");
$sql = "SELECT email,first_name,last_name,status,remember_tocken,password  FROM user_table where email='".$_POST['email']."'"; 
$res = $pdo->query($sql); 

      if ( $res->rowCount() > 0 ) 
        {  
          $row = $res->fetch();
          
          if ($row["status"]=='1')
          {
            session_start();
            $_SESSION["email"]=$_POST['email'];
            require("verify.php");
             
            $_SESSION["message"]="Password change link sent to your email-address.";
            header("location:index.php");

          }
          if ($row['status']=="0")
          {
             session_start();
            $_SESSION["message"]="Account is freezed by the company. contact to the company";
            header("location:index.php");
          }
          if ($row['status']=="2" && $row['remember_tocken']!=null)
          {
             session_start();
            $_SESSION["message"]="You need to verify your email address. ";
            header("location:index.php");
          }
        }
        else
        {
          session_start();
          $_SESSION["message"]="Account does not exist .";
          header("location:forgottenpassword.php");
        }
        
}

catch(Exception $e)
{
echo $e ;
} 

?>