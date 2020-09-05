<?php
session_start();
?>
<?php
{
  $i=0;
    if (strlen($_POST["email"])==null or (preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $_POST["email"]) ? FALSE : TRUE) or filter_var($_POST["email"],517)==false  )
    {
    $error = "Email-Id is not valid";
    $_SESSION["message"]=$error;
    header("location:changeemailid.php");
    }

    else
    {
      try 
      { 
      
      $pdo = new PDO("mysql:host = localhost;dbname=testvkreate"); 
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
      $sql = "SELECT email FROM user_table where email='".$_POST["email"]."'"; 
      $res = $pdo->query($sql); 
          if ($res->rowCount() > 0) 
          { 
            $error = "Email-Id already exist.";
          }
          else
          {
              if ( empty($error) )
              {
                require("D:/Programs/xampp/PHPMailer_5.2.4/PHPMailer_5.2.4/class.phpmailer.php");
                $mail = new PHPMailer(true);
                $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
                
                try 
                {
                $mail->SMTPDebug = 2;                                       // Enable verbose debug output
                $mail->isSMTP();                                            // Set mailer to use SMTP
                $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                $mail->Username   = 'sardarounak1997@gmail.com';                     // SMTP username
                $mail->Password   = 'cakixhxluakpcttl';                               // SMTP password
                $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
                $mail->Port       = 587;                                    // TCP port to connect to
                $mail->setFrom('sardarounak1997@gmail.com', 'Mailer'); 
                $mail->addAddress($email ,'Rounak Sarda');     // Add a recipient
                $tocken=md5(uniqid(rand(), true));
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = 'Please Verify';
                $mail->Body    = "Hello ".$_POST['firstname']."<br><a href=http://localhost/vkreate/test/account/validateemailid.php?remember_tocken=".$tocken."&email_id=".$email.">verify</a>" ;
                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                $mail->send();
                echo 'Message has been sent';  
                $sql = "UPDATE user_table SET remember_tocken='".$tocken."',verifyemail='".$email."' WHERE email='".$_SESSION["email"]."'"; 
                    
                  $pdo->exec($sql);
                    $_SESSION["message"]="Verification mail sent to your new email address please verify . Till than you can login from previous email-id";
                  header("location:../editprofile.php");

                }        
               
                catch (Exception $e) 
                {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                }
              } 
            } 
        }
        catch (PDOException $e)
        { 
        die("ERROR: Could not able to execute $sql. " .$e->getMessage()); 
        } 
    
    unset($pdo); 
    
    }


 }
   
   ?>