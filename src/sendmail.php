<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require './inclued/vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);
$alert = '';

if (isset($_POST['submit'])) {
    # code...
    $name = $_POST['name']; 
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    // echo '<script type="text/javascript">alert("404 seucessfylly! We will contact you shortly")</script>';
    
    try {
        //Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth = true;                                   //Enable SMTP authentication
        $mail->Username   = 'yegnabetsew@gmail.com';                     //SMTP username
        $mail->Password   = 'ntezxguqbgyzydwo';                               //SMTP password
        // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;  //Enable implicit TLS encryption
        $mail->SMTPSecure = "tls";          
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    // echo '<script type="text/javascript">alert("sucessful connection")</script>';

        //Recipients
        $mail->setFrom('yegnabetsew@gmail.com', 'Azael Printing Service'); //
        $mail->addAddress('semahegntilahun18@gmail.com');     //here the email where the form to be submitte Add a recipient Name is optional
        // $mail->addAddress('ellen@example.com');               //
        // $mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

    //     //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
    // echo '<script type="text/javascript">alert(" seucess")</script>';

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'You have a New  Message from Azael Contact Us Form Submission | AZAEL DIGITAL PRINTING Service Company';
        $mail->Body    = "Name: $name <br> Email_address: $email <br> Subject: $subject <br> Message: $message";
    //     $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        // echo 'Message has been sent';
        // header("location: ../thankyou.php");
        echo '<script type="text/javascript">alert("Just click ok button and see your submission status bellow #Submit button on the website")</script>';
        $alert ="<div class='alert-success'><span>Your form submission has been submyited succesfylly! Thank You for contact Us! We will get back in touch You shortly!</span> </div>"; 
        
        

       
    } catch (Exception $e) {
    //     echo "Message could not be sent. Mailer Error: ";
    // header("location: ../thankyou.php");
        $alert ="<div class='alert-error'><span>'.$e -> getMessage().'</span> </div>";        
        // header("location: #contactus");

    }
        header("location:src/thankyou.php");

}
// header("location: #contactus"); 

?>