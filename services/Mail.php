<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

class Mail 
{

  public $email;
  public $subject;
  public $message;
  public $body;

  public function __construct($email, $subject, $message, $body)
  {
    $this->email = $email;
    $this->subject = $subject;
    $this->message = $message;
    $this->body = $body;
  }

  public function send() 
  {
    try {
      //Server settings
      $phpmailer = new PHPMailer();
      $phpmailer->isSMTP();
      $phpmailer->Host = 'sandbox.smtp.mailtrap.io';
      $phpmailer->SMTPAuth = true;
      $phpmailer->Port = 2525;
      $phpmailer->Username = '978d57af2cc5fa';
      $phpmailer->Password = 'd4c4a0b2f107c4';
    
      //Recipients
      $phpmailer->setFrom($this->email, 'Mailer');
      $phpmailer->addAddress('joe@example.net', 'Joe User');     //Add a recipient
      $phpmailer->addAddress('ellen@example.com');               //Name is optional
      $phpmailer->addReplyTo('info@example.com', 'Information');
      $phpmailer->addCC('cc@example.com');
      $phpmailer->addBCC('bcc@example.com');
    
      //Content
      $phpmailer->isHTML(true);                                  //Set email format to HTML
      $phpmailer->Subject = $this->subject;
      $phpmailer->Body    = $this->message;
      $phpmailer->AltBody = $this->body;
    
      $phpmailer->send();
      echo 'Message has been sent';
    } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$phpmailer->ErrorInfo}";
    }
  }
}

