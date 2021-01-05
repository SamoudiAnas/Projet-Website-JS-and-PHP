<?php

use PHPMailer\PHPMailer\PHPMailer;

require_once 'PHPMailer/PHPMailer.php';
require_once 'PHPMailer/SMTP.php';
require_once 'PHPMailer/Exception.php';



$mail = new PHPMailer(true);
$alert = '';

if(isset($_POST['send'])){
    
    if (isset($_POST['name']) && isset($_POST['email'])) {
        $name = '';
        $c_name = $_POST['company-Name'];
        $c_type = $_POST['company-Type'];
        $c_email = $_POST['company-email'];
        $p_subject = $_POST['p_subject'];
        $p_name = $_POST['p-name'];
        $p_type = $_POST['p-type'];
        $p_budget = $_POST['p-budget'];
        $p_desciption = $_POST['description'];
        

        

        

        
        try {
            
            //SMTP Settings
            $mail->isSMTP();
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPAuth = true;
            $mail->Username = 'websiteanas700@gmail.com';
            $mail->Password = '123456789anas';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587; //587
             //tls

            //Email Settings
            
            $mail->setFrom("websiteanas700@gmail.com");
            $mail->addAddress("websiteanas700@gmail.com");
            
            $mail->isHTML(true);
            $mail->Subject = $subject;
            
            $body = "<h3>From :  $c_email  . <br>Company name :  . $c_name </h3><br>";
            $body = "<h3>Company Type :  $c_type  . <br>Project Subjet :  . $p_subject </h3><br>";
            $body = "<h3>Project Name :  $p_name  . <br>Project Type :  . $p_type </h3><br>";
            $body = "<h3>Project budget :  $p_budget ";
            
            $body .= "<h3><br>Project description: <br> $p_description </h3>";
            
            
            $mail->Body = $body;
            if(!$mail->Send()) {
                echo "Mailer Error: " . $mail->ErrorInfo;
            } else {
                echo "Message has been sent";
            }            
          
            
            
        } catch (Exception $e) {
            //Catch Statement
            echo "failed";
            
            
            
        }
       

        
    }
    
    
    
    
    
    
    
    
    
    
}










?>