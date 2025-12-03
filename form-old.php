<?php
session_start();
ob_start();
$to = "info@patnysystems.com";
$to = "anjali@grank.co.in";
$web = "PATNY SYSTEMS PVT LTD";


    $subject = "Contact us From ".$_POST['name'];
	$email = $_POST['email'];
	$emailTo = "info@".$web;
    $message=  "Hello, <br />".
				"Name : ".$_POST['name']."&nbsp; <br /><br />".
		        "Email : ".$_POST['email']."<br /><br />".
		       	"TelePhone : ".$_POST['phone']."<br /><br />".
					"Subject : ".$_POST['form_sub']."<br /><br />".
                "Comments: ".$_POST['message']."<br /><br />";
				
	header( "refresh:2;url=index.html" );
   $headers = 'From: ' . $web . ' <' . $emailTo . '>' . "\r\n" . 'Reply-To: ' . $email . "\r\n";
   $headers  .= 'MIME-Version: 1.0' . "\r\n";
   $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
   $headers .= 'X-Mailer: PHP/' . phpversion() . "\r\n";
   $headers .= "X-Priority: 1 (Higuest)\n";
   $headers .= "X-MSMail-Priority: High\n";
   $headers .= "Importance: High\n";
    $header = "BCC:anjali@grank.co.in \r\n";
   if (filter_var($email, FILTER_VALIDATE_EMAIL)) { mail($to,$subject,$message,$headers)or die('Error sending Mail');//This method sends the mail.
echo "Your email was sent!"; // success message
}else{
echo "Invalid Email, please provide an correct email.";
}


ob_flush();
?>

  


  
