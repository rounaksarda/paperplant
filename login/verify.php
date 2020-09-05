<?php
try 
    {
          if ( empty($error) )
          {
            require("C:/xampp/PHPMailer_5.2.4/PHPMailer_5.2.4/class.phpmailer.php");
            $mail = new PHPMailer(true);

            try 
            {
            $mail->SMTPDebug = 2;                                       // Enable verbose debug output
            $mail->isSMTP();                                            // Set mailer to use SMTP
            $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'sardarounak1997@gmail.com';                     // SMTP username
            $mail->Password   = 'qorsrxmfbqbumvyw';                               // SMTP password
            $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
            $mail->Port       = 587;                                    // TCP port to connect to
            $mail->setFrom('sardarounak1997@gmail.com', 'Mailer'); 
            $mail->addAddress($_SESSION['email'] ,'Rounak Sarda');     // Add a recipient
            $tocken=md5(uniqid(rand(), true));
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Please Verify';
            $mail->Body    = "Hello ".$_POST['firstname']."<br><a href=http://localhost/test/login/confirmpassword.php?remember_tocken=".$tocken.">verify</a>" ;
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
            $mail->send();
            echo 'Message has been sent';  
            }        
            catch (Exception $e) 
            {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
            $servername = "localhost";
            $uname = "root";
            $pass = "";
            //$pdo = new PDO("mysql:host = localhost;dbname=testvkreate"); 
            $pdo = new PDO("mysql:host=$servername;dbname=testvkreate", $uname, $pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
             $sql = "UPDATE user_table SET remember_tocken='".$tocken."' WHERE email='".$_SESSION['email']."'"; 
                $pdo->exec($sql); 

            //session_start();
            //$_SESSION["message"] = "Account created successfully ! Please verify your Email-Id to login successfully";
            header("location:confirmpassword.php");
          }
        
      
          else
          {
   
          session_start();
          $_SESSION["error"]= $error;
          header("location:index.php");
   
          }

         }
         
         catch(Exception $e)
         {
          echo $e;
         } 

    ?>      