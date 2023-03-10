<?php
$to = "info@dortemprotirakovine.cz";
$from = $_POST['email'];
$fullname = $_POST['fullname'];
$subject = $_POST['subject'];
$msg = $_POST['message'];

$message = '
<html>
    <head>
        <title>Dortem proti rakovině</title>
    </head>
    <body>
        <div style="max-width: 680px; margin: 0 auto;">
            <table width="100%">
                <tr>
                    <td width="75px"><div style="background: #000; color: #fff; width: 75px; height: 75px; line-height: 22px; text-align: center; font-size: 11px;"></div></td>
                    <td width="550px" style="background: #ED1651; border-left:15px solid #fff; padding-left:30px; font-size:26px; font-weight:bold; letter-spacing:-1px; color:white;">Zpráva od ' . $fullname . '</td>
                </tr>
            </table> 
            <h3>Kontaktní údaje odesílatele</h3>
            <table width="100%" style="border-collapse: collapse;">
                <tr>
                    <td width="80px" style="background: #eee; text-transform: uppercase; padding: 15px 5px 15px 15px; font-size: 11px;">E-mail<td>
                    <td style="border-top: 1px solid #eee; border-bottom: 1px solid #eee;">' . $from . '<td>
                </tr>
                <tr>
                    <td style="background: #eee; text-transform: uppercase; padding: 15px 5px 15px 15px; font-size: 11px;">Celé jméno<td>
                    <td style="border-top: 1px solid #eee; border-bottom: 1px solid #eee;">' . $fullname . '<td>
                </tr>
            </table>
            <h2>' . $subject . '</h2>
            <p>' . $msg . '</p>
        </div>
    </body>
</html>
';

$message_to = '
<html>
    <head>
        <title>Dortem proti rakovině</title>
    </head>
    <body>
        <div style="max-width: 680px; margin: 0 auto;">
            <table width="100%">
                <tr>
                    <td width="75px"><div style="background: #000; color: #fff; width: 75px; height: 75px; line-height: 22px; text-align: center; font-size: 11px;"></div></td>
                    <td width="550px" style="background: #ED1651; border-left:15px solid #fff; padding-left:30px; font-size:26px; font-weight:bold; letter-spacing:-1px; color:white;">Kopie Vaší zprávy</td>
                </tr>
            </table> 
            <h3>Vaše kontaktní údaje</h3>
            <table width="100%" style="border-collapse: collapse;">
                <tr>
                    <td width="80px" style="background: #eee; text-transform: uppercase; padding: 15px 5px 15px 15px; font-size: 11px;">E-mail<td>
                    <td style="border-top: 1px solid #eee; border-bottom: 1px solid #eee;">' . $from . '<td>
                </tr>
                <tr>
                    <td style="background: #eee; text-transform: uppercase; padding: 15px 5px 15px 15px; font-size: 11px;">Celé jméno<td>
                    <td style="border-top: 1px solid #eee; border-bottom: 1px solid #eee;">' . $fullname . '<td>
                </tr>
            </table>
            <h2>' . $subject . '</h2>
            <p>' . $msg . '</p>
        </div>
    </body>
</html>
';

// It is mandatory to set the content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers. From is required, rest other headers are optional
$headers .= 'From: DortemProtiRakovině <info@dortemprotirakovine.cz>' . "\r\n";

// Mail it
mail($to, $subject, $message, $headers);
mail($from, $subject, $message_to, $headers);

header('Location: index.html');

exit;
?>
