<?php
   // Check for empty fields
   if(empty($_POST['firstname'])      ||
      empty($_POST['lastname'])      ||
      empty($_POST['email'])     ||
      empty($_POST['phone#'])     ||
      empty($_POST['city'])      ||
      empty($_POST['service'])      ||
      empty($_POST['message'])   ||
      !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
         echo "No arguments Provided!";
         return false;
      }

   $firstname = strip_tags(htmlspecialchars($_POST['firstname']));
   $lastname= strip_tags(htmlspecialchars($_POST['lastname']));
   $email_address = strip_tags(htmlspecialchars($_POST['email']));
   $phone = strip_tags(htmlspecialchars($_POST['phone#']));
   $city = strip_tags(htmlspecialchars($_POST['city']));
   $service = strip_tags(htmlspecialchars($_POST['service']));
   $message = strip_tags(htmlspecialchars($_POST['message']));

   // Create the email and send the message
   $to = 'ralph@studgate.com';
   $email_subject = "Website Contact Form:  $name";
   $email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nFirst Name: $firstname\n\nLast Name: $lastname\n\nEmail: $email_address\n\nPhone: $phone\n\nCity: $city\n\nService: $service\n\nMessage:\n$message";
   $headers = "From: noreply@studgate.com\n";
   $headers .= "Reply-To: $email_address";
   mail($to,$email_subject,$email_body,$headers);
   return true;
?>
