<?php

try 
{ 
    if(!empty($_SESSION["email"]))
    {
    require("../connection.php");
    $sql = "UPDATE user_table SET password='".$_SESSION["password"]."' WHERE email='".$_SESSION['email']."'";
    $res = $pdo->query($sql); 
    session_destroy();
    session_start();
    $_SESSION["verified"]="You have successfully changed your password ! Now you can login with your new password." ;
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

