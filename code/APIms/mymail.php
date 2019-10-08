<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

    function sendmain($subject,$body){
    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    try {
        //Server settings
        $mail->SMTPDebug = 1;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';                     // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'jobigniter@gmail.com';                 // SMTP username ..sender email
        $mail->Password = 'igvynufyyztugsrk';             // SMTP password ..sender password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 465;//587;                                   // TCP port to connect to
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->CharSet = 'UTF-8';                             //Support for many different languages
  
        //Recipients

        // $name="User";
        $mail->setFrom('jobigniter@gmail.com');
        // $mail->addAddress($address, $name);     // Add a recipient
        $mail->addAddress('jobigniter@gmail.com');//name is optional
        //$mail->addReplyTo('ahsanzaid1995@gmail.com');
       // $mail->addCC('k152886@nu.edu.pk');
      
       
  
        //Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
  
        //Content
       $subject = "ahsanansjhdjhsadsadsad";
        $mail->Subject = $subject;
        //$body="sdsdsds";//$msg;
     
        $body = "sdsdsa";
        $mail->Body = $body;
        $mail->AltBody = $body;
  
        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    }
}

sendmain("jsdjksjdkjsd","aklsjkajskjaksjaksj");

    ?>