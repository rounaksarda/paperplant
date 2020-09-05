<?php

try 
{ 
   require("../connection.php");
    $sql = "SELECT email,verifyemail FROM user_table where remember_tocken='".$_GET['remember_tocken']."' AND verifyemail='".$_GET['email_id']."'"; 
    $res = $pdo->query($sql); 
    if ($res->rowCount() > 0) 
    { 
     $row = $res->fetch();
            //  echo "".$row['remember_tocken'].""; 
       $sql = "UPDATE user_table SET status=1,email='".$_GET['email_id']."', remember_tocken=null,verifyemail=null WHERE remember_tocken='".$_GET['remember_tocken']."'"; 
                $pdo->exec($sql); 
                session_start();
                $_SESSION["verified"]="You are successfully changed your email id ! Now you can login." ;
                header("location:../login/index.php");
    } 
    else 
    { 
        echo "No matching records are found."; 
    } 
} 
catch (PDOException $e)
{ 
    die("ERROR: Could not able to execute $sql. " .$e->getMessage()); 
} 
unset($res);
unset($pdo); 
?> 

