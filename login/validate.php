<?php
session_start();
try
{
  require("../connection.php");
  $sql = "SELECT id,email,first_name,last_name,status,remember_tocken,password  FROM user_table where email='".$_POST['email']."'"; 
  $res = $pdo->query($sql);
    if ( $res->rowCount() > 0 ) 
    {
      $row = $res->fetch();
      if ( $_POST['password']==$row['password'] )
      {
        if ($row['status']=='0') 
        {
          $_SESSION["message"]="Your account is freezed by the company. Contact on meinkyakaru@yopmail.com";
          header("location:index.php");
        }
        elseif ($row['status']=='1')
        {

              try 
               {
                 $sql = "UPDATE user_table SET remember_tocken=null,verifyemail=null where email='".$_POST['email']."'"; 
                $res = $pdo->query($sql);
                }
               catch(Exception $e )
               {
                echo $e;
                 die;
                }

          $_SESSION["firstname"]=$row['first_name'];
          $_SESSION["lastname"]=$row['last_name'];
          $_SESSION['id']=$row['id'];
          $_SESSION["email"]=$_POST['email'];            
          $_SESSION["status"]="1" ;              
          $sql = "SELECT type FROM user_type where id='".$_SESSION['id']."'";
          $res = $pdo->query($sql); 
          $row = $res->fetch();

          if($row['type']==2)
            {
              $_SESSION['type']=2;
             header("location: ../admin/index.php");
            }
           else
            {
              header("location: ../index.php");
            }    

        }
        elseif ($row['status']=='2')
        {
          $_SESSION["message"]="your account is not verified please go to your email address and verify";
           header("location:index.php");
        }

      }
      else
      {
        $_SESSION["message"]="Wrong password . Try forgotten Password ";
        header("location:index.php");
      }
    }
    else
    {
      $_SESSION["message"]="Either you are not registered yet , please signup , or you entered a wrong email-id" ;
      header("location:index.php");
    }
}
catch(Exception $e)
{
  echo $e;
}
unset($res);
unset($sql);
unset($pdo);
unset($row);

?>