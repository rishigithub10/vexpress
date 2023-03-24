<?php 
    $result = "";
    $error  = "";
  if(isset($_POST['submit']))
  {
    require 'phpmailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;
    //smtp settings
    $mail->isSMTP(); // send as HTML
    $mail->Host = "smtp.gmail.com"; // SMTP servers
    $mail->SMTPAuth = true; // turn on SMTP authentication
    $mail->Username = "touch.suppor@gmail.com"; // Your mail
    $mail->Password = 'psmnoassixhvvaqy'; // Your password mail
    $mail->Port = 587; //specify SMTP Port
    $mail->SMTPSecure = 'tls';                               
    $mail->setFrom($_POST['email'],$_POST['name']);
    $mail->addAddress('touch.suppor@gmail.com');
    $mail->addReplyTo($_POST['email'],$_POST['name']);
    $mail->isHTML(true);
    $mail->Subject='Contact:' .$_POST['subject'];
    $mail->Body='<h3>Name :'.$_POST['name'].'<br> Email: '.$_POST['email-1'].'<br>Contact Number: '.$_POST['number-915'].'<br>Message: '.$_POST['message'].'</h3>';
    if(!$mail->send())
    {
      $error = "Something went worng. Please try again.";
    }
    else 
    {
      //$result="Thanks\t" .$_POST['name']. " for contacting us.";//
      mail($address, $e_subject, $msg, $headers );
      header('Location: ../Thankyou.html');
    }
  }

?>
