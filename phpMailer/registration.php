<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {

    //Variables setup
    $token = md5($_SESSION['email'].strval(time()));

    $link = $base_url."dashboard/complete_profile.php?token=".$token."";
    $dashboard_link = $base_url."student/index.php";

    //sprintf("http://localhost/wwi/view/pw_reset.php?token=%s&email=%s", $token, $email);


    //Server settings
    $mail->SMTPOptions = array(
        'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
        )
        );
        
        $mail->isSMTP('true');                                      //Send using SMTP
        $mail->Host       = 'mail.oxfordlanka.lk';                  //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'info@oxfordlanka.lk';                  //SMTP username
        $mail->Password   = '-ox9I8YrqS5(D5';                       //SMTP password
        $mail->SMTPSecure = 'ssl'; //TLS or SSL                     //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('funsmo@fundsmo.com', 'Fundsmo');
    
    //$mail->addAddress('joe@example.net', 'Joe User');     //Add a recipient
    
    $mail->addAddress($email);         //Name is optional (Recipient/S)


    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Fundsmo Confirm Your Account';

    



    $mail->Body    = '
    
   <!DOCTYPE html>

<html lang="en" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:v="urn:schemas-microsoft-com:vml">
<head>
<title></title>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/><!--[if mso]><xml><o:OfficeDocumentSettings><o:PixelsPerInch>96</o:PixelsPerInch><o:AllowPNG/></o:OfficeDocumentSettings></xml><![endif]--><!--[if !mso]><!-->
<link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet" type="text/css"/>
<link href="https://fonts.googleapis.com/css2?family=Inter&family=Work+Sans:wght@700&display=swap" rel="stylesheet" type="text/css"/><!--<![endif]-->
<style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
        }

        a[x-apple-data-detectors] {
            color: inherit !important;
            text-decoration: inherit !important;
        }

        #MessageViewBody a {
            color: inherit;
            text-decoration: none;
        }

        p {
            line-height: inherit
        }

        .desktop_hide,
        .desktop_hide table {
            mso-hide: all;
            display: none;
            max-height: 0px;
            overflow: hidden;
        }

        .image_block img+div {
            display: none;
        }

        @media (max-width:720px) {
            .desktop_hide table.icons-inner {
                display: inline-block !important;
            }

            .icons-inner {
                text-align: center;
            }

            .icons-inner td {
                margin: 0 auto;
            }

            .image_block img.big,
            .row-content {
                width: 100% !important;
            }

            .mobile_hide {
                display: none;
            }

            .stack .column {
                width: 100%;
                display: block;
            }

            .mobile_hide {
                min-height: 0;
                max-height: 0;
                max-width: 0;
                overflow: hidden;
                font-size: 0px;
            }

            .desktop_hide,
            .desktop_hide table {
                display: table !important;
                max-height: none !important;
            }

            .row-10 .column-1 .block-1.heading_block h1,
            .row-11 .column-2 .block-1.paragraph_block td.pad>div,
            .row-2 .column-2 .block-1.paragraph_block td.pad>div {
                text-align: center !important;
            }

            .row-10 .column-2 .block-1.paragraph_block td.pad {
                padding: 0 !important;
            }

            .row-10 .column-1 .block-1.heading_block td.pad {
                padding: 5px 0 0 !important;
            }

            .row-11 .column-1,
            .row-2 .column-1 {
                padding: 20px 10px !important;
            }

            .row-2 .column-2 {
                padding: 5px 25px 20px !important;
            }

            .row-8 .column-1 {
                padding: 40px 25px 10px !important;
            }

            .row-9 .column-1 {
                padding: 5px !important;
            }

            .row-10 .column-2 {
                padding: 5px 25px 30px !important;
            }

            .row-11 .column-2 {
                padding: 5px 30px 20px 25px !important;
            }
        }
    </style>
</head>
<body style="background-color: #f9f9fa; margin: 0; padding: 0; -webkit-text-size-adjust: none; text-size-adjust: none;">
<table border="0" cellpadding="0" cellspacing="0" class="nl-container" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #f9f9fa;" width="100%">
<tbody>
<tr>
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-1" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tbody>
<tr>
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-radius: 0; color: #000000; width: 700px;" width="700">
<tbody>
<tr>
<td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-bottom: 5px; padding-top: 5px; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="100%">
<div class="spacer_block block-1" style="height:15px;line-height:15px;font-size:1px;"> </div>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tbody>
<tr>
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #4f5aba; background-image: url(\'images/Header-bg.png\'); background-repeat: no-repeat; background-size: cover; border-radius: 0; color: #000000; width: 700px;" width="700">
<tbody>
<tr>
<td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-bottom: 20px; padding-left: 30px; padding-right: 10px; padding-top: 20px; vertical-align: middle; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="33.333333333333336%">
<table border="0" cellpadding="0" cellspacing="0" class="image_block block-1" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tr>
<td class="pad" style="width:100%;padding-right:0px;padding-left:0px;">
<div align="center" class="alignment" style="line-height:10px"><a href="https://www.example.com" style="outline:none" tabindex="-1" target="_blank"><img alt="Your Logo" src="images/Your-logo.png" style="display: block; height: auto; border: 0; width: 193px; max-width: 100%;" title="Your Logo" width="193"/></a></div>
</td>
</tr>
</table>
</td>
<td class="column column-2" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-bottom: 5px; padding-left: 25px; padding-right: 30px; padding-top: 5px; vertical-align: middle; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="66.66666666666667%">
<table border="0" cellpadding="0" cellspacing="0" class="paragraph_block block-1" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%">
<tr>
<td class="pad">
<div style="color:#ffffff;direction:ltr;font-family:Inter, sans-serif;font-size:16px;font-weight:400;letter-spacing:0px;line-height:120%;text-align:right;mso-line-height-alt:19.2px;">
<p style="margin: 0;">Dear Student</p>
</div>
</td>
</tr>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-3" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tbody>
<tr>
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff; color: #000000; width: 700px;" width="700">
<tbody>
<tr>
<td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-bottom: 35px; padding-left: 25px; padding-right: 25px; padding-top: 35px; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="100%">
<table border="0" cellpadding="0" cellspacing="0" class="icons_block block-1" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tr>
<td class="pad" style="vertical-align: middle; color: #201f42; font-family: inherit; font-size: 16px; letter-spacing: 0px; text-align: left;">
<table cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tr>
<td class="alignment" style="vertical-align: middle; text-align: left;"><!--[if vml]><table align="left" cellpadding="0" cellspacing="0" role="presentation" style="display:inline-block;padding-left:0px;padding-right:0px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;"><![endif]-->
<!--[if !vml]><!-->
<table cellpadding="0" cellspacing="0" class="icons-inner" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; display: inline-block; margin-right: -4px; padding-left: 0px; padding-right: 0px;"><!--<![endif]-->
<tr>
<td style="vertical-align: middle; text-align: center; padding-top: 5px; padding-bottom: 5px; padding-left: 5px; padding-right: 10px;"><img align="center" class="icon" height="32" src="images/CalendarCheck.png" style="display: block; height: auto; margin: 0 auto; border: 0;" width="30"/></td>
<td style="font-family: Inter, sans-serif; font-size: 16px; color: #201f42; vertical-align: middle; letter-spacing: normal; text-align: left;">Aug 30th 2023 at 10:30AM</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="heading_block block-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tr>
<td class="pad" style="padding-bottom:20px;padding-top:10px;text-align:center;width:100%;">
<h1 style="margin: 0; color: #4f5aba; direction: ltr; font-family: \'Noto Serif\', Georgia, serif; font-size: 38px; font-weight: 700; letter-spacing: normal; line-height: 120%; text-align: left; margin-top: 0; margin-bottom: 0;"><span class="tinyMce-placeholder">First Day Guide</span></h1>
</td>
</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="image_block block-3" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tr>
<td class="pad" style="width:100%;padding-right:0px;padding-left:0px;">
<div align="center" class="alignment" style="line-height:10px"><a href="https://www.example.com" style="outline:none" tabindex="-1" target="_blank"><img alt="Dorm Room" class="big" src="images/movein-day-hero.png" style="display: block; height: auto; border: 0; width: 650px; max-width: 100%;" title="Dorm Room" width="650"/></a></div>
</td>
</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="paragraph_block block-4" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%">
<tr>
<td class="pad" style="padding-top:30px;">
<div style="color:#201f42;direction:ltr;font-family:Inter, sans-serif;font-size:18px;font-weight:400;letter-spacing:0px;line-height:180%;text-align:left;mso-line-height-alt:32.4px;">
<p style="margin: 0;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Egestas risus, nunc, ultrices est. Tortor, turpis pellentesque cursus ornare justo, nibh in venenatis. Faucibus mattis vulputate tristique nisl, malesuada. Molestie lectus sed iaculis sapien at ipsum.</p>
</div>
</td>
</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="button_block block-5" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tr>
<td class="pad" style="padding-bottom:15px;padding-top:30px;text-align:left;">
<div align="left" class="alignment"><!--[if mso]><v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="https://www.example.com" style="height:44px;width:189px;v-text-anchor:middle;" arcsize="0%" strokeweight="0.75pt" strokecolor="#201F42" fillcolor="#201f42"><w:anchorlock/><v:textbox inset="0px,0px,0px,0px"><center style="color:#ffffff; font-family:Georgia, serif; font-size:16px"><![endif]--><a href="'.$dashboard_link.'" style="text-decoration:none;display:inline-block;color:#ffffff;background-color:#201f42;border-radius:0px;width:auto;border-top:1px solid #201F42;font-weight:400;border-right:1px solid #201F42;border-bottom:1px solid #201F42;border-left:1px solid #201F42;padding-top:5px;padding-bottom:5px;font-family:\'Noto Serif\', Georgia, serif;font-size:16px;text-align:center;mso-border-alt:none;word-break:keep-all;" target="_blank"><span style="padding-left:30px;padding-right:30px;font-size:16px;display:inline-block;letter-spacing:normal;"><span dir="ltr" style="word-break: break-word; line-height: 32px;">Go to dashboard</span></span></a><!--[if mso]></center></v:textbox></v:roundrect><![endif]--></div>
</td>
</tr>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-4" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-size: auto;" width="100%">
<tbody>
<tr>
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-size: auto; background-color: #fbfbfb; color: #000000; width: 700px;" width="700">
<tbody>
<tr>
<td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; border-top: 2px solid #4F5ABA; padding-bottom: 25px; padding-left: 25px; padding-right: 25px; padding-top: 25px; vertical-align: top; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="100%">
<table border="0" cellpadding="0" cellspacing="0" class="empty_block block-1" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tr>
<td class="pad">
<div></div>
</td>
</tr>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-5" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tbody>
<tr>
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; width: 700px;" width="700">
<tbody>
<tr>
<td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; background-color: #fbfbfb; padding-bottom: 20px; padding-left: 25px; padding-right: 25px; padding-top: 15px; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="33.333333333333336%">
<table border="0" cellpadding="10" cellspacing="0" class="text_block block-1" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%">
<tr>
<td class="pad">
<div style="font-family: Georgia, serif">
<div class="" style="font-size: 12px; font-family: \'Noto Serif\', Georgia, serif; mso-line-height-alt: 18px; color: #4f5aba; line-height: 1.5;">
<p style="margin: 0; font-size: 16px; text-align: center; mso-line-height-alt: 27px;"><span style="font-size:18px;"><strong>01.</strong></span></p>
</div>
</div>
</td>
</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="icons_block block-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tr>
<td class="pad" style="vertical-align: middle; color: #4f5aba; font-family: \'Noto Serif\', Georgia, serif; font-size: 18px; letter-spacing: 0px; text-align: center;">
<table cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tr>
<td class="alignment" style="vertical-align: middle; text-align: center;"><!--[if vml]><table align="left" cellpadding="0" cellspacing="0" role="presentation" style="display:inline-block;padding-left:0px;padding-right:0px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;"><![endif]-->
<!--[if !vml]><!-->
<table cellpadding="0" cellspacing="0" class="icons-inner" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; display: inline-block; margin-right: -4px; padding-left: 0px; padding-right: 0px;"><!--<![endif]-->
<tr>
<td style="vertical-align: middle; text-align: center; padding-top: 5px; padding-bottom: 15px; padding-left: 20px; padding-right: 20px;"><a href="https://www.example.com" style="text-decoration: none;" target="_self"><img align="center" class="icon" height="64" src="images/ICON.01.png" style="display: block; height: auto; margin: 0 auto; border: 0;" width="63"/></a></td>
</tr>
<tr>
<td style="font-family: \'Noto Serif\', Georgia, serif; font-size: 18px; color: #4f5aba; vertical-align: middle; letter-spacing: normal; text-align: center;"><a href="https://www.example.com" style="color: #4f5aba; text-decoration: none;" target="_self">DORM RULES</a></td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>
<table border="0" cellpadding="10" cellspacing="0" class="paragraph_block block-3" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%">
<tr>
<td class="pad">
<div style="color:#515151;direction:ltr;font-family:Inter, sans-serif;font-size:16px;font-weight:400;letter-spacing:0px;line-height:150%;text-align:center;mso-line-height-alt:24px;">
<p style="margin: 0;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
</div>
</td>
</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="button_block block-4" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tr>
<td class="pad" style="padding-bottom:15px;padding-left:10px;padding-right:10px;padding-top:10px;text-align:center;">
<div align="center" class="alignment"><!--[if mso]><v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="https://www.example.com" style="height:42px;width:145px;v-text-anchor:middle;" arcsize="0%" strokeweight="1.5pt" strokecolor="#201F42" fill="false"><w:anchorlock/><v:textbox inset="0px,0px,0px,0px"><center style="color:#201f42; font-family:Georgia, serif; font-size:14px"><![endif]--><a href="https://www.example.com" style="text-decoration:none;display:inline-block;color:#201f42;background-color:transparent;border-radius:0px;width:auto;border-top:2px solid #201F42;font-weight:400;border-right:2px solid #201F42;border-bottom:2px solid #201F42;border-left:2px solid #201F42;padding-top:5px;padding-bottom:5px;font-family:\'Noto Serif\', Georgia, serif;font-size:14px;text-align:center;mso-border-alt:none;word-break:keep-all;" target="_blank"><span style="padding-left:30px;padding-right:30px;font-size:14px;display:inline-block;letter-spacing:normal;"><span dir="ltr" style="word-break: break-word; line-height: 28px;">READ NOW</span></span></a><!--[if mso]></center></v:textbox></v:roundrect><![endif]--></div>
</td>
</tr>
</table>
</td>
<td class="column column-2" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; background-color: #ffffff; padding-bottom: 20px; padding-left: 25px; padding-right: 25px; padding-top: 15px; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="33.333333333333336%">
<table border="0" cellpadding="10" cellspacing="0" class="text_block block-1" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%">
<tr>
<td class="pad">
<div style="font-family: Georgia, serif">
<div class="" style="font-size: 12px; font-family: \'Noto Serif\', Georgia, serif; mso-line-height-alt: 18px; color: #4f5aba; line-height: 1.5;">
<p style="margin: 0; font-size: 16px; text-align: center; mso-line-height-alt: 27px;"><span style="font-size:18px;"><strong>02.</strong></span></p>
</div>
</div>
</td>
</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="icons_block block-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tr>
<td class="pad" style="vertical-align: middle; color: #4f5aba; font-family: \'Noto Serif\', Georgia, serif; font-size: 18px; letter-spacing: 0px; text-align: center;">
<table cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tr>
<td class="alignment" style="vertical-align: middle; text-align: center;"><!--[if vml]><table align="left" cellpadding="0" cellspacing="0" role="presentation" style="display:inline-block;padding-left:0px;padding-right:0px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;"><![endif]-->
<!--[if !vml]><!-->
<table cellpadding="0" cellspacing="0" class="icons-inner" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; display: inline-block; margin-right: -4px; padding-left: 0px; padding-right: 0px;"><!--<![endif]-->
<tr>
<td style="vertical-align: middle; text-align: center; padding-top: 5px; padding-bottom: 15px; padding-left: 20px; padding-right: 20px;"><a href="https://www.example.com" style="text-decoration: none;" target="_self"><img align="center" class="icon" height="64" src="images/ICON-02.png" style="display: block; height: auto; margin: 0 auto; border: 0;" width="64"/></a></td>
</tr>
<tr>
<td style="font-family: \'Noto Serif\', Georgia, serif; font-size: 18px; color: #4f5aba; vertical-align: middle; letter-spacing: normal; text-align: center;"><a href="https://www.example.com" style="color: #4f5aba; text-decoration: none;" target="_self">DOs & DON\'Ts</a></td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>
<table border="0" cellpadding="10" cellspacing="0" class="paragraph_block block-3" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%">
<tr>
<td class="pad">
<div style="color:#515151;direction:ltr;font-family:Inter, sans-serif;font-size:16px;font-weight:400;letter-spacing:0px;line-height:150%;text-align:center;mso-line-height-alt:24px;">
<p style="margin: 0;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
</div>
</td>
</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="button_block block-4" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tr>
<td class="pad" style="padding-bottom:15px;padding-left:10px;padding-right:10px;padding-top:10px;text-align:center;">
<div align="center" class="alignment"><!--[if mso]><v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="https://www.example.com" style="height:42px;width:160px;v-text-anchor:middle;" arcsize="0%" strokeweight="1.5pt" strokecolor="#201F42" fill="false"><w:anchorlock/><v:textbox inset="0px,0px,0px,0px"><center style="color:#201f42; font-family:Georgia, serif; font-size:14px"><![endif]--><a href="https://www.example.com" style="text-decoration:none;display:inline-block;color:#201f42;background-color:transparent;border-radius:0px;width:auto;border-top:2px solid #201F42;font-weight:400;border-right:2px solid #201F42;border-bottom:2px solid #201F42;border-left:2px solid #201F42;padding-top:5px;padding-bottom:5px;font-family:\'Noto Serif\', Georgia, serif;font-size:14px;text-align:center;mso-border-alt:none;word-break:keep-all;" target="_blank"><span style="padding-left:30px;padding-right:30px;font-size:14px;display:inline-block;letter-spacing:normal;"><span dir="ltr" style="word-break: break-word; line-height: 28px;">LEARN MORE</span></span></a><!--[if mso]></center></v:textbox></v:roundrect><![endif]--></div>
</td>
</tr>
</table>
</td>
<td class="column column-3" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; background-color: #fbfbfb; padding-bottom: 20px; padding-left: 25px; padding-right: 25px; padding-top: 15px; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="33.333333333333336%">
<table border="0" cellpadding="10" cellspacing="0" class="text_block block-1" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%">
<tr>
<td class="pad">
<div style="font-family: Georgia, serif">
<div class="" style="font-size: 12px; font-family: \'Noto Serif\', Georgia, serif; mso-line-height-alt: 18px; color: #4f5aba; line-height: 1.5;">
<p style="margin: 0; font-size: 16px; text-align: center; mso-line-height-alt: 27px;"><span style="font-size:18px;"><strong>03.</strong></span></p>
</div>
</div>
</td>
</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="icons_block block-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tr>
<td class="pad" style="vertical-align: middle; color: #4f5aba; font-family: \'Noto Serif\', Georgia, serif; font-size: 18px; letter-spacing: 0px; text-align: center;">
<table cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tr>
<td class="alignment" style="vertical-align: middle; text-align: center;"><!--[if vml]><table align="left" cellpadding="0" cellspacing="0" role="presentation" style="display:inline-block;padding-left:0px;padding-right:0px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;"><![endif]-->
<!--[if !vml]><!-->
<table cellpadding="0" cellspacing="0" class="icons-inner" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; display: inline-block; margin-right: -4px; padding-left: 0px; padding-right: 0px;"><!--<![endif]-->
<tr>
<td style="vertical-align: middle; text-align: center; padding-top: 5px; padding-bottom: 15px; padding-left: 20px; padding-right: 20px;"><a href="https://www.example.com" style="text-decoration: none;" target="_self"><img align="center" class="icon" height="64" src="images/ICON-03.png" style="display: block; height: auto; margin: 0 auto; border: 0;" width="64"/></a></td>
</tr>
<tr>
<td style="font-family: \'Noto Serif\', Georgia, serif; font-size: 18px; color: #4f5aba; vertical-align: middle; letter-spacing: normal; text-align: center;"><a href="https://www.example.com" style="color: #4f5aba; text-decoration: none;" target="_self">CHECKLIST T</a></td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>
<table border="0" cellpadding="10" cellspacing="0" class="paragraph_block block-3" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%">
<tr>
<td class="pad">
<div style="color:#515151;direction:ltr;font-family:Inter, sans-serif;font-size:16px;font-weight:400;letter-spacing:0px;line-height:150%;text-align:center;mso-line-height-alt:24px;">
<p style="margin: 0;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
</div>
</td>
</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="button_block block-4" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tr>
<td class="pad" style="padding-bottom:15px;padding-left:10px;padding-right:10px;padding-top:10px;text-align:center;">
<div align="center" class="alignment"><!--[if mso]><v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="https://www.example.com" style="height:42px;width:131px;v-text-anchor:middle;" arcsize="0%" strokeweight="1.5pt" strokecolor="#201F42" fill="false"><w:anchorlock/><v:textbox inset="0px,0px,0px,0px"><center style="color:#201f42; font-family:Georgia, serif; font-size:14px"><![endif]--><a href="https://www.example.com" style="text-decoration:none;display:inline-block;color:#201f42;background-color:transparent;border-radius:0px;width:auto;border-top:2px solid #201F42;font-weight:400;border-right:2px solid #201F42;border-bottom:2px solid #201F42;border-left:2px solid #201F42;padding-top:5px;padding-bottom:5px;font-family:\'Noto Serif\', Georgia, serif;font-size:14px;text-align:center;mso-border-alt:none;word-break:keep-all;" target="_blank"><span style="padding-left:30px;padding-right:30px;font-size:14px;display:inline-block;letter-spacing:normal;"><span dir="ltr" style="word-break: break-word; line-height: 28px;">FILL OUT</span></span></a><!--[if mso]></center></v:textbox></v:roundrect><![endif]--></div>
</td>
</tr>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-6" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tbody>
<tr>
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; width: 700px;" width="700">
<tbody>
<tr>
<td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; background-color: #ffffff; padding-bottom: 20px; padding-left: 25px; padding-right: 25px; padding-top: 15px; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="33.333333333333336%">
<table border="0" cellpadding="10" cellspacing="0" class="text_block block-1" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%">
<tr>
<td class="pad">
<div style="font-family: Georgia, serif">
<div class="" style="font-size: 12px; font-family: \'Noto Serif\', Georgia, serif; mso-line-height-alt: 18px; color: #4f5aba; line-height: 1.5;">
<p style="margin: 0; font-size: 16px; text-align: center; mso-line-height-alt: 27px;"><span style="font-size:18px;"><strong>04.</strong></span></p>
</div>
</div>
</td>
</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="icons_block block-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tr>
<td class="pad" style="vertical-align: middle; color: #4f5aba; font-family: \'Noto Serif\', Georgia, serif; font-size: 18px; letter-spacing: 0px; text-align: center;">
<table cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tr>
<td class="alignment" style="vertical-align: middle; text-align: center;"><!--[if vml]><table align="left" cellpadding="0" cellspacing="0" role="presentation" style="display:inline-block;padding-left:0px;padding-right:0px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;"><![endif]-->
<!--[if !vml]><!-->
<table cellpadding="0" cellspacing="0" class="icons-inner" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; display: inline-block; margin-right: -4px; padding-left: 0px; padding-right: 0px;"><!--<![endif]-->
<tr>
<td style="vertical-align: middle; text-align: center; padding-top: 5px; padding-bottom: 15px; padding-left: 20px; padding-right: 20px;"><a href="https://www.example.com" style="text-decoration: none;" target="_self"><img align="center" class="icon" height="64" src="images/ICON-04.png" style="display: block; height: auto; margin: 0 auto; border: 0;" width="65"/></a></td>
</tr>
<tr>
<td style="font-family: \'Noto Serif\', Georgia, serif; font-size: 18px; color: #4f5aba; vertical-align: middle; letter-spacing: normal; text-align: center;"><a href="https://www.example.com" style="color: #4f5aba; text-decoration: none;" target="_self">WHAT TO BRING</a></td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>
<table border="0" cellpadding="10" cellspacing="0" class="paragraph_block block-3" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%">
<tr>
<td class="pad">
<div style="color:#515151;direction:ltr;font-family:Inter, sans-serif;font-size:16px;font-weight:400;letter-spacing:0px;line-height:150%;text-align:center;mso-line-height-alt:24px;">
<p style="margin: 0;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
</div>
</td>
</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="button_block block-4" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tr>
<td class="pad" style="padding-bottom:15px;padding-left:10px;padding-right:10px;padding-top:10px;text-align:center;">
<div align="center" class="alignment"><!--[if mso]><v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="https://www.example.com" style="height:42px;width:153px;v-text-anchor:middle;" arcsize="0%" strokeweight="1.5pt" strokecolor="#201F42" fill="false"><w:anchorlock/><v:textbox inset="0px,0px,0px,0px"><center style="color:#201f42; font-family:Georgia, serif; font-size:14px"><![endif]--><a href="https://www.example.com" style="text-decoration:none;display:inline-block;color:#201f42;background-color:transparent;border-radius:0px;width:auto;border-top:2px solid #201F42;font-weight:400;border-right:2px solid #201F42;border-bottom:2px solid #201F42;border-left:2px solid #201F42;padding-top:5px;padding-bottom:5px;font-family:\'Noto Serif\', Georgia, serif;font-size:14px;text-align:center;mso-border-alt:none;word-break:keep-all;" target="_blank"><span style="padding-left:30px;padding-right:30px;font-size:14px;display:inline-block;letter-spacing:normal;"><span dir="ltr" style="word-break: break-word; line-height: 28px;">VIEW GUIGE</span></span></a><!--[if mso]></center></v:textbox></v:roundrect><![endif]--></div>
</td>
</tr>
</table>
</td>
<td class="column column-2" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; background-color: #fbfbfb; padding-bottom: 20px; padding-left: 25px; padding-right: 25px; padding-top: 15px; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="33.333333333333336%">
<table border="0" cellpadding="10" cellspacing="0" class="text_block block-1" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%">
<tr>
<td class="pad">
<div style="font-family: Georgia, serif">
<div class="" style="font-size: 12px; font-family: \'Noto Serif\', Georgia, serif; mso-line-height-alt: 18px; color: #4f5aba; line-height: 1.5;">
<p style="margin: 0; font-size: 16px; text-align: center; mso-line-height-alt: 27px;"><span style="font-size:18px;"><strong>05.</strong></span></p>
</div>
</div>
</td>
</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="icons_block block-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tr>
<td class="pad" style="vertical-align: middle; color: #4f5aba; font-family: \'Noto Serif\', Georgia, serif; font-size: 18px; letter-spacing: 0px; text-align: center;">
<table cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tr>
<td class="alignment" style="vertical-align: middle; text-align: center;"><!--[if vml]><table align="left" cellpadding="0" cellspacing="0" role="presentation" style="display:inline-block;padding-left:0px;padding-right:0px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;"><![endif]-->
<!--[if !vml]><!-->
<table cellpadding="0" cellspacing="0" class="icons-inner" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; display: inline-block; margin-right: -4px; padding-left: 0px; padding-right: 0px;"><!--<![endif]-->
<tr>
<td style="vertical-align: middle; text-align: center; padding-top: 5px; padding-bottom: 15px; padding-left: 20px; padding-right: 20px;"><a href="https://www.example.com" style="text-decoration: none;" target="_self"><img align="center" class="icon" height="64" src="images/ICON-05.png" style="display: block; height: auto; margin: 0 auto; border: 0;" width="89"/></a></td>
</tr>
<tr>
<td style="font-family: \'Noto Serif\', Georgia, serif; font-size: 18px; color: #4f5aba; vertical-align: middle; letter-spacing: normal; text-align: center;"><a href="https://www.example.com" style="color: #4f5aba; text-decoration: none;" target="_self">CLUBS & STUDY GROUPS</a></td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>
<table border="0" cellpadding="10" cellspacing="0" class="paragraph_block block-3" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%">
<tr>
<td class="pad">
<div style="color:#515151;direction:ltr;font-family:Inter, sans-serif;font-size:16px;font-weight:400;letter-spacing:0px;line-height:150%;text-align:center;mso-line-height-alt:24px;">
<p style="margin: 0;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
</div>
</td>
</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="button_block block-4" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tr>
<td class="pad" style="padding-bottom:15px;padding-left:10px;padding-right:10px;padding-top:10px;text-align:center;">
<div align="center" class="alignment"><!--[if mso]><v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="https://www.example.com" style="height:42px;width:118px;v-text-anchor:middle;" arcsize="0%" strokeweight="1.5pt" strokecolor="#201F42" fill="false"><w:anchorlock/><v:textbox inset="0px,0px,0px,0px"><center style="color:#201f42; font-family:Georgia, serif; font-size:14px"><![endif]--><a href="https://www.example.com" style="text-decoration:none;display:inline-block;color:#201f42;background-color:transparent;border-radius:0px;width:auto;border-top:2px solid #201F42;font-weight:400;border-right:2px solid #201F42;border-bottom:2px solid #201F42;border-left:2px solid #201F42;padding-top:5px;padding-bottom:5px;font-family:\'Noto Serif\', Georgia, serif;font-size:14px;text-align:center;mso-border-alt:none;word-break:keep-all;" target="_blank"><span style="padding-left:30px;padding-right:30px;font-size:14px;display:inline-block;letter-spacing:normal;"><span dir="ltr" style="word-break: break-word; line-height: 28px;">FORUM</span></span></a><!--[if mso]></center></v:textbox></v:roundrect><![endif]--></div>
</td>
</tr>
</table>
</td>
<td class="column column-3" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; background-color: #ffffff; padding-bottom: 20px; padding-left: 25px; padding-right: 25px; padding-top: 15px; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="33.333333333333336%">
<table border="0" cellpadding="10" cellspacing="0" class="text_block block-1" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%">
<tr>
<td class="pad">
<div style="font-family: Georgia, serif">
<div class="" style="font-size: 12px; font-family: \'Noto Serif\', Georgia, serif; mso-line-height-alt: 18px; color: #4f5aba; line-height: 1.5;">
<p style="margin: 0; font-size: 16px; text-align: center; mso-line-height-alt: 27px;"><span style="font-size:18px;"><strong>06.</strong></span></p>
</div>
</div>
</td>
</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="icons_block block-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tr>
<td class="pad" style="vertical-align: middle; color: #4f5aba; font-family: \'Noto Serif\', Georgia, serif; font-size: 18px; letter-spacing: 0px; text-align: center;">
<table cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tr>
<td class="alignment" style="vertical-align: middle; text-align: center;"><!--[if vml]><table align="left" cellpadding="0" cellspacing="0" role="presentation" style="display:inline-block;padding-left:0px;padding-right:0px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;"><![endif]-->
<!--[if !vml]><!-->
<table cellpadding="0" cellspacing="0" class="icons-inner" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; display: inline-block; margin-right: -4px; padding-left: 0px; padding-right: 0px;"><!--<![endif]-->
<tr>
<td style="vertical-align: middle; text-align: center; padding-top: 5px; padding-bottom: 15px; padding-left: 20px; padding-right: 20px;"><img align="center" class="icon" height="64" src="images/ICON-06.png" style="display: block; height: auto; margin: 0 auto; border: 0;" width="58"/></td>
</tr>
<tr>
<td style="font-family: \'Noto Serif\', Georgia, serif; font-size: 18px; color: #4f5aba; vertical-align: middle; letter-spacing: normal; text-align: center;">CAMPUS NEWSLETTER</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>
<table border="0" cellpadding="10" cellspacing="0" class="paragraph_block block-3" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%">
<tr>
<td class="pad">
<div style="color:#515151;direction:ltr;font-family:Inter, sans-serif;font-size:16px;font-weight:400;letter-spacing:0px;line-height:150%;text-align:center;mso-line-height-alt:24px;">
<p style="margin: 0;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
</div>
</td>
</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="button_block block-4" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tr>
<td class="pad" style="padding-bottom:15px;padding-left:10px;padding-right:10px;padding-top:10px;text-align:center;">
<div align="center" class="alignment"><!--[if mso]><v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="https://www.example.com" style="height:42px;width:143px;v-text-anchor:middle;" arcsize="0%" strokeweight="1.5pt" strokecolor="#201F42" fill="false"><w:anchorlock/><v:textbox inset="0px,0px,0px,0px"><center style="color:#201f42; font-family:Georgia, serif; font-size:14px"><![endif]--><a href="https://www.example.com" style="text-decoration:none;display:inline-block;color:#201f42;background-color:transparent;border-radius:0px;width:auto;border-top:2px solid #201F42;font-weight:400;border-right:2px solid #201F42;border-bottom:2px solid #201F42;border-left:2px solid #201F42;padding-top:5px;padding-bottom:5px;font-family:\'Noto Serif\', Georgia, serif;font-size:14px;text-align:center;mso-border-alt:none;word-break:keep-all;" target="_blank"><span style="padding-left:30px;padding-right:30px;font-size:14px;display:inline-block;letter-spacing:normal;"><span dir="ltr" style="word-break: break-word; line-height: 28px;">SUBSCRIBE</span></span></a><!--[if mso]></center></v:textbox></v:roundrect><![endif]--></div>
</td>
</tr>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-7" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tbody>
<tr>
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-radius: 0; color: #000000; background-color: #ffffff; width: 700px;" width="700">
<tbody>
<tr>
<td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-bottom: 5px; padding-top: 5px; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="100%">
<div class="spacer_block block-1" style="height:60px;line-height:60px;font-size:1px;"> </div>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-8" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-size: auto;" width="100%">
<tbody>
<tr>
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff; background-size: auto; color: #000000; width: 700px;" width="700">
<tbody>
<tr>
<td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; border-top: 2px solid #4F5ABA; padding-bottom: 10px; padding-left: 25px; padding-right: 25px; padding-top: 25px; vertical-align: top; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="100%">
<table border="0" cellpadding="0" cellspacing="0" class="empty_block block-1" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tr>
<td class="pad">
<div></div>
</td>
</tr>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-9" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-size: auto;" width="100%">
<tbody>
<tr>
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff; background-size: auto; color: #000000; width: 700px;" width="700">
<tbody>
<tr>
<td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="100%">
<div class="spacer_block block-1" style="height:35px;line-height:35px;font-size:1px;"> </div>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-10" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tbody>
<tr>
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #4f5aba; background-image: url(\'images/Header-bg.png\'); background-repeat: no-repeat; background-size: cover; border-radius: 0; color: #000000; width: 700px;" width="700">
<tbody>
<tr>
<td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-bottom: 30px; padding-left: 25px; padding-right: 25px; padding-top: 30px; vertical-align: middle; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="50%">
<table border="0" cellpadding="0" cellspacing="0" class="heading_block block-1" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tr>
<td class="pad" style="padding-bottom:20px;padding-top:20px;text-align:center;width:100%;">
<h1 style="margin: 0; color: #ffffff; direction: ltr; font-family: \'Noto Serif\', Georgia, serif; font-size: 40px; font-weight: 700; letter-spacing: normal; line-height: 120%; text-align: left; margin-top: 0; margin-bottom: 0;"><span class="tinyMce-placeholder">Need help?</span></h1>
</td>
</tr>
</table>
</td>
<td class="column column-2" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-bottom: 5px; padding-left: 25px; padding-right: 25px; padding-top: 5px; vertical-align: middle; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="50%">
<table border="0" cellpadding="0" cellspacing="0" class="paragraph_block block-1" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%">
<tr>
<td class="pad">
<div style="color:#ffffff;direction:ltr;font-family:Inter, sans-serif;font-size:16px;font-weight:400;letter-spacing:0px;line-height:120%;text-align:center;mso-line-height-alt:19.2px;">
<p style="margin: 0;"><a href="https://www.example.com" rel="noopener" style="text-decoration: underline; color: #ffffff;" target="_blank"><u>CONTACT US -></u></a></p>
</div>
</td>
</tr>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-11" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-size: auto;" width="100%">
<tbody>
<tr>
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-radius: 0; color: #000000; background-size: auto; background-color: #201f42; width: 700px;" width="700">
<tbody>
<tr>
<td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-bottom: 20px; padding-left: 30px; padding-right: 10px; padding-top: 20px; vertical-align: middle; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="33.333333333333336%">
<table border="0" cellpadding="0" cellspacing="0" class="image_block block-1" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tr>
<td class="pad" style="width:100%;padding-right:0px;padding-left:0px;">
<div align="center" class="alignment" style="line-height:10px"><a href="https://www.example.com" style="outline:none" tabindex="-1" target="_blank"><img alt="your-logo" src="images/Your-logo.png" style="display: block; height: auto; border: 0; width: 155px; max-width: 100%;" title="your-logo" width="155"/></a></div>
</td>
</tr>
</table>
</td>
<td class="column column-2" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-bottom: 5px; padding-left: 25px; padding-right: 30px; padding-top: 5px; vertical-align: middle; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="66.66666666666667%">
<table border="0" cellpadding="0" cellspacing="0" class="paragraph_block block-1" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%">
<tr>
<td class="pad">
<div style="color:#ffffff;direction:ltr;font-family:Inter, sans-serif;font-size:14px;font-weight:400;letter-spacing:0px;line-height:120%;text-align:right;mso-line-height-alt:16.8px;">
<p style="margin: 0;">Copyright © 2023 Oxfordlanka, All rights reserved.</p>
</div>
</td>
</tr>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-12" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tbody>
<tr>
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; width: 700px;" width="700">
<tbody>
<tr>
<td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-bottom: 5px; padding-top: 5px; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="100%">
<table border="0" cellpadding="0" cellspacing="0" class="icons_block block-1" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tr>
<td class="pad" style="vertical-align: middle; color: #9d9d9d; font-family: inherit; font-size: 15px; padding-bottom: 5px; padding-top: 5px; text-align: center;">
<table cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tr>
<td class="alignment" style="vertical-align: middle; text-align: center;"><!--[if vml]><table align="left" cellpadding="0" cellspacing="0" role="presentation" style="display:inline-block;padding-left:0px;padding-right:0px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;"><![endif]-->
<!--[if !vml]><!-->
<table cellpadding="0" cellspacing="0" class="icons-inner" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; display: inline-block; margin-right: -4px; padding-left: 0px; padding-right: 0px;"><!--<![endif]-->
<tr>
<td style="vertical-align: middle; text-align: center; padding-top: 5px; padding-bottom: 5px; padding-left: 5px; padding-right: 6px;"><a href="https://www.designedwithbee.com/" style="text-decoration: none;" target="_blank"><img align="center" alt="Designed with BEE" class="icon" height="32" src="images/bee.png" style="display: block; height: auto; margin: 0 auto; border: 0;" width="34"/></a></td>
<td style="font-family: Inter, sans-serif; font-size: 15px; color: #9d9d9d; vertical-align: middle; letter-spacing: undefined; text-align: center;"><a href="https://www.designedwithbee.com/" style="color: #9d9d9d; text-decoration: none;" target="_blank">Designed with BEE</a></td>
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
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table><!-- End -->
</body>
</html>

    ';

    $mail->AltBody = 'Dear Customer,<br>
    This email is sent to you in order to confirm your email for the FUNDSMO website. Please click the link below to complete the registration
    <a href="'.$link.'">Please Click here to complete Registration</a> ';

    if ($mail->send()) 
    {
        //echo 'Message has been sent';
        $verify_query = "INSERT INTO `email_token` (`token`, `email`) VALUES ('$token', '$email');";
        mysqli_query($con, $verify_query);
        
//         $_SESSION['alert'] = "success";
// 		$_SESSION['alert_message'] = "We've sent you an email.";
		//$_SESSION['redirect'] = $base_url."login.php";
        
    }else {
        $_SESSION['alert'] = "error";
		$_SESSION['alert_message'] = "registration email could not sent!";
    }

    

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>