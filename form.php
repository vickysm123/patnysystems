<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';


if($_POST['name']!=NULL){ $name=$_POST['name']; }
if($_POST['email']!=NULL){ $email=$_POST['email']; }
if($_POST['phone']!=NULL){ $mobile=$_POST['phone']; }
if($_POST['form_sub']!=NULL){ $form_sub=$_POST['form_sub']; }
if($_POST['message']!=NULL){ $message=$_POST['message']; }

if($email != NULL || $email != '' || $mobile != NULL || $mobile != '')
{
date_default_timezone_set("Asia/Kolkata");

$subject = 'Enquiry for Patny Systems';

$message = "<!DOCTYPE HTML>
<html xmlns='http://www.w3.org/1999/xhtml'>

<head><meta http-equiv='Content-Type' content='text/html; charset=utf-8'>




    
    <meta name='viewport' content='width=device-width; initial-scale=1.0; maximum-scale=1.0;'>
    <title>Email Template</title>
    <style type='text/css'>
    body {
        width: 100%;
        background-color: #EFEFEF;
        margin: 0;
        padding: 0;
        -webkit-font-smoothing: antialiased;
    }
    html {
        width: 100%;
    }
    table {
        font-size: 14px;
        border: 0;
    }
    @media only screen and (max-width: 640px) {
        .header-bg {
            width: 440px !important;
            height: 10px !important;
        }
        .main-header {
            line-height: 28px !important;
        }
        .main-subheader {
            line-height: 28px !important;
        }
        .container {
            width: 440px !important;
        }
        .container-middle {
            width: 420px !important;
        }
        .mainContent {
            width: 400px !important;
        }
        .main-image {
            width: 400px !important;
            height: auto !important;
        }
        .banner {
            width: 400px !important;
            height: auto !important;
        }
        .section-item {
            width: 400px !important;
        }
        .section-img {
            width: 400px !important;
            height: auto !important;
        }
        .prefooter-header {
            padding: 0 10px !important;
            line-height: 24px !important;
        }
        .prefooter-subheader {
            padding: 0 10px !important;
            line-height: 24px !important;
        }
        .top-bottom-bg {
            width: 420px !important;
            height: auto !important;
        }
    }

    @media only screen and (max-width: 479px) {

        .header-bg {
            width: 280px !important;
            height: 10px !important;
        }
        .top-header-left {
            width: 260px !important;
            text-align: center !important;
        }
        .top-header-right {
            width: 260px !important;
        }
        .main-header {
            line-height: 28px !important;
            text-align: center !important;
        }
        .main-subheader {
            line-height: 28px !important;
            text-align: center !important;
        }

        .logo {
            width: 260px !important;
        }
        .nav {
            width: 260px !important;
        }
        .container {
            width: 280px !important;
        }
        .container-middle {
            width: 260px !important;
        }
        .mainContent {
            width: 240px !important;
        }
        .main-image {
            width: 240px !important;
            height: auto !important;
        }
        .banner {
            width: 240px !important;
            height: auto !important;
        }

        .section-item {
            width: 240px !important;
        }
        .section-img {
            width: 240px !important;
            height: auto !important;
        }

        .prefooter-header {
            padding: 0 10px !important;
            line-height: 28px !important;
        }
        .prefooter-subheader {
            padding: 0 10px !important;
            line-height: 28px !important;
        }

        .top-bottom-bg {
            width: 260px !important;
            height: auto !important;
        }
    }

    </style>
</head>

<body leftmargin='0' topmargin='0' marginwidth='0' marginheight='0'>
    <table border='0' width='100%' cellpadding='0' cellspacing='0'>
        <tr>
            <td height='20'></td>
        </tr>
                    <tr>
                        <td>
                            <table border='0' width='560' align='' cellpadding='0' cellspacing='0' class='container-middle'>
                                <tr bgcolor='ffffff'>
                                    <td>
                                        <table width='528' border='0' align='center' cellpadding='0' cellspacing='0' class='mainContent'>

                                            <tr>
                                                <td mc:edit='subtitle1' class='main-subheader' style='color: #555; font-size: 15px; font-weight: normal; font-family: Helvetica, Arial, sans-serif;'>
                                                    <multiline>
                                                        Name : ".$name."
                                                    </multiline>
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td height='20'></td>
                                            </tr>
                                            <tr>
                                                <td mc:edit='subtitle1' class='main-subheader' style='color: #555; font-size: 15px; font-weight: normal; font-family: Helvetica, Arial, sans-serif;'>
                                                    <multiline>
                                                       Email: ".$email."
                                                    </multiline>
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td height='20'></td>
                                            </tr>
                                            <tr>
                                                <td mc:edit='subtitle1' class='main-subheader' style='color: #555; font-size: 15px; font-weight: normal; font-family: Helvetica, Arial, sans-serif;'>
                                                    <multiline>
                                                        Phone: ".$mobile."
                                                    </multiline>
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td height='20'></td>
                                            </tr>
                                            <tr>
                                                <td mc:edit='subtitle1' class='main-subheader' style='color: #555; font-size: 15px; font-weight: normal; font-family: Helvetica, Arial, sans-serif;'>
                                                    <multiline>
                                                        Subject: ".$form_sub."
                                                    </multiline>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td height='20'></td>
                                            </tr>
                                            <tr>
                                                <td mc:edit='subtitle1' class='main-subheader' style='color: #555; font-size: 15px; font-weight: normal; font-family: Helvetica, Arial, sans-serif;'>
                                                    <multiline>
                                                        Message : ".$message."
                                                    </multiline>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td height='20'></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td height='30'></td>
        </tr>
    </table>

</body>
</html>";
$response = $_POST["token"];
    $ch = curl_init();

    curl_setopt_array($ch, [
        CURLOPT_URL => 'https://www.google.com/recaptcha/api/siteverify',
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => [
            'secret' => '6LfkdGIhAAAAANrw8kDaGp0uMOvMQ3u9CQJ_Kax6',
            'response' => $_POST["token"],
            'remoteip' => $_SERVER['REMOTE_ADDR']
        ],
        CURLOPT_RETURNTRANSFER => true
    ]);

    $output = curl_exec($ch);
    curl_close($ch);

    $json = json_decode($output);
    
    if ($json->success==false) {
        echo "Captcha Verification Failed";
    } else if ($json->success==true) {

	$mail = new PHPMailer();		
    	$mail->From      = 'noreply@patnysystems.com';		
    	$mail->FromName  = "PATNY SYSTEMS PVT LTD";		
    	$mail->Subject   = $subject;		
    	$mail->Body      = $message;		
    	$mail->SetFrom( "noreply@patnysystems.com", 'PATNY SYSTEMS PVT LTD');
    // $mail->AddAddress('saisreeja@grank.co.in', 'PATNY SYSTEMS PVT LTD');
    // $mail->AddAddress('vineeth@grank.co.in', 'PATNY SYSTEMS PVT LTD');
        $mail->AddAddress('vpatny@gmail.com', 'PATNY SYSTEMS PVT LTD');
        $mail->AddAddress('info@patnysystems.com', 'PATNY SYSTEMS PVT LTD');
        $mail->AddBCC('anjali@grank.co.in', 'PATNY SYSTEMS PVT LTD');
        $mail->AddBCC('seo.grank@gmail.com', 'PATNY SYSTEMS PVT LTD');
        

    $mail->IsHTML(true);

if($mail->send())
    {    
    header('Location:index.php');
    }

else
    {
	echo "Email Not Sent!!. Please try again";
    }
	
}
}
else
    {
	echo "Email or Phone Number is empty";
    }





?>
