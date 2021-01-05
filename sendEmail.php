<?php



if(isset($_POST['send'])){
    
    if (isset($_POST['name']) && isset($_POST['email'])) {
        $name = '';
        $name = $_POST['first-name'] ." ". $_POST['last-name'];
        $email = '';
        $email = $_POST['email'];
        $subject = '';
        $subject = $_POST['subject'];
        
        $body = "<h3>From :  $email . <br>Full name :  . $name </h3>";
            
        $body .= "<h3><br>Message: <br> $message </h3>";
        

        

        //email where i recieve contact info
        $to_email = "unlimiteddez@gmail.com";
        
        //header info
        $headers = "From: ".$name."\'s email";
        
        
        
        
        
        
        
        
        
        
 
        if (mail($to_email, $subject, $body, $headers)) {
            echo "Email successfully sent to $to_email...";
        } 
        else {
            echo "Email sending failed...";
        }
        
        
        
        
         
    }
       

     
}
    
    
    
    
    
    
    
    
    
    











?>