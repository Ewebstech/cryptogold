<?php

//Server settings
$mail->SMTPDebug = 2;                                 // Enable verbose debug output
$mail->isSMTP(); 
// Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'ewebsorg@gmail.com';                 // SMTP username
$mail->Password = '#hexagonal#';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to
$mail->setFrom('ewebsorg@gmail.com', 'Ewebs Technologies');
//$mail->addReplyTo('drugconsultpharm.com.ng', 'Drug Consult Pharmacy');