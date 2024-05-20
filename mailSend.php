<?php 
// echo '<pre>';print_r($_POST);exit;
if(isset($_POST['email'])){
ini_set("SMTP", "smtp.gmail.com");
ini_set("smtp_port", "25");
ini_set("sendmail_from", "dhanushmohan555@gmail.com");

    $to = "mohan@enovasolutions.com"; // this is your Email address
    $from = 'dhanushmohan555@gmail.com'; // this is the sender's Email address
    $first_name = $_POST['name'];
    $subject = "Form submission";
    $message = $first_name . "(".$_POST['email'].")". "wrote the following:" . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $result = mail($to,$subject,$message,$headers);
    // echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";

  
   if( $result == true ){  
      echo "Message sent successfully...";  
   }else{  
      echo "Sorry, unable to send mail...";  
   } 


    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>