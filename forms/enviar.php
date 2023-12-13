<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  /*$receiving_email_address = 'Alexduva12@hotmail.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->subject = $_POST['subject'];*/

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  /*$contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['message'], 'Message', 10);

  echo $contact->send();*/


  $name = $_POST['name'];
  $mail = $_POST['email'];
  $message = $_POST['message'];
  
  $header = 'From: ' . $mail . " \r\n";
  $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
  $header .= "Mime-Version: 1.0 \r\n";
  $header .= "Content-Type: text/plain";
  
  $message = "Este mensaje fue enviado por: " . $name . " \r\n";
  $message .= "Su e-mail es: " . $mail . " \r\n";
  $message .= "Teléfono de contacto: " . $phone . " \r\n";
  $message .= "Mensaje: " . $_POST['message'] . " \r\n";
  $message .= "Enviado el: " . date('d/m/Y', time());
  
  $para = 'Alexduva12@hotmail.com';
  $asunto = 'Mensaje';
  
  mail($para, $asunto, utf8_decode($message), $header);
  
  header("Location:index.html");
  

?>
