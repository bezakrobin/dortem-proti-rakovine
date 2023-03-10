<?php
$variable = date_timestamp_get(date_create());
$to = "info@dortemprotirakovine.cz";
$from = $_POST['email'];
$fullname = $_POST['fullname'];
$subject = 'Instrukce k zaslání příspěvku';
$price = $_POST['price'];

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
                    <td width="550px" style="background: #ED1651; border-left:15px solid #fff; padding-left:30px; font-size:26px; font-weight:bold; letter-spacing:-1px; color:white;">Příspěvek od ' . $fullname . '</td>
                </tr>
            </table> 
            <h3>Kontaktní údaje zákazníka</h3>
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
            <h3>Instrukce k platbě</h3>
            <table width="100%" style="border-collapse: collapse; border-bottom:1px solid #eee;">
                <tr>
                    <td style="background: #eee; text-transform: uppercase; padding: 15px; font-size: 11px; border-right: 1px solid #eee;">Bankovním převodem</td>
                </tr>
                <tr>
                    <td style="padding: 7px 14px; border-left: 1px solid #eee; border-right: 1px solid #eee;">Číslo účtu: <b>2902058729/2010</b><br>Variabilní symbol: <b>' . $variable . '</b><br>Částka: <b>' . $price . ',- Kč</b></td>
                </tr>
            </table>
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
                    <td width="550px" style="background: #ED1651; border-left:15px solid #fff; padding-left:30px; font-size:26px; font-weight:bold; letter-spacing:-1px; color:white;">Instrukce k zaslání příspěvku</td>
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
            <h3>Instrukce k platbě</h3>
            <table width="100%" style="border-collapse: collapse; border-bottom:1px solid #eee;">
                <tr>
                    <td style="background: #eee; text-transform: uppercase; padding: 15px; font-size: 11px; border-right: 1px solid #eee;">Bankovním převodem</td>
                </tr>
                <tr>
                    <td style="padding: 7px 14px; border-left: 1px solid #eee; border-right: 1px solid #eee;">Číslo účtu: <b>2902058729/2010</b><br>Variabilní symbol: <b>' . $variable . '</b><br>Částka: <b>' . $price . ',- Kč</b></td>
                </tr>
            </table>
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
