<?php
try
{
	
	require("D:/Programs/xampp/PHPMailer_5.2.4/PHPMailer_5.2.4/class.phpmailer.php");

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);
    //Server settings
    $mail->SMTPDebug = 2;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'sg3plcpnl0050.prod.sin3.secureserver.net';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'rounak@vkreate.in';                     // SMTP username
    $mail->Password   = 'hpldowuavdvmtnat';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('rounak@vkreate.in', 'Mailer');

}
catch(Exception $e)
{
	echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

}

?>