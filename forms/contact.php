<?php
 $name=$_POST['name'];
 $visitor_email=$_POST['email'];
 $message= $_POST['message'];

 $email_from= 'ruzulsharma007+work@gmail.com';
 $email_subject= "New response detected on portfolio.";
 $email_body= "Username: $name. \n".
                "User_email: $visitor_email. \n".
                "Message: $messgae. \n";


  $to="ruzulsharma007@gmail.com";

  $headers= "From: $email_from \r\n";
  $headers .=" Reply-To:$visitor_email \r\n ";

  mail($to, $email_subject, $email_body, $headers );

  header("Location: index.html");



?>
