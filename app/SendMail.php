<?php
namespace App\Classes;

use PDO;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

               // Passing `true` enables exceptions

class SendMail extends Baseclass{

    protected $db_conn;
    protected $base;
    protected $mailer_error;

    function __construct(){
        require("db.php");
        //Initialize Baseclass
        $this->base = new Baseclass();
    }



    private function MailTemplate($subject, $content, $company, $logo_url){
        $year = date('Y');
        $template = "<html>

        <body style='background-color: #9bda54; padding: 50px; '>	
        <center>		
            <table cellpadding='10' border='0' width='700'style='border: 1px solid #000' >
            <tr style='background-color: rgb(19, 58, 7);'>
            <td width='30%' colspan='4' align='center'>
            <img src='".$logo_url."' width='auto' height='60' style='background: #fff; padding: 10px;'/>
            </td>
            
            </tr>
            
            <tr>
            <td style='color: #fff; font-weight: bolder; background-color: rgb(194, 104, 69);' colspan='3' align='center'>".$subject."</td>
            </tr>
            <tr>
            <td style='color: #000; background-color: #fff;' colspan='3' align='left'>
                ".$content."
            </td>
            </tr>
            <tr>
            <td style='color: #fff; background-color: rgb(19, 58, 7)' colspan='3' align='center'>&copy; ".$company." ". $year." | Powered by <a href='http://ewebstech.xyz'>Ewebstech.XYZ</a> </td>
            </tr>
            
            </table>
        </center>	
    </body>
    </html>";

        return $template;

    }

    public function SendMail($subject, $content, $reciever, $company, $logo_url){
        
        try {
	
            //Recipients
            $mail = new PHPMailer(true); 
            include("MailSettings.php");
            
            $Template = $this->MailTemplate($subject, $content, $company, $logo_url);
            $mail->addAddress($reciever);     // Add a recipient
        
            //Content
            $mail->isHTML(true);         // Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = $Template;
            
            
           if($mail->send()){
               $status['success'] = "Message Sent";
           }

            
        } catch (Exception $e) {
            $this->mailer_error =  $mail->ErrorInfo;
            $status['failure'] = $this->mailer_error;
        }

        return $status;

        }


 }