<?php

$url = "../";

include_once($url.'connection/mysql_connect.php');


$username          = $_POST['username'];
$email_add         = $_POST['email_add'];
$newpass           = $_POST['newpass'];

//for testing
// $username          = '161616';
// $email_add         = 'kaylalayug018@gmail.com';
// $newpass           = '123456';

//-- Pre-Req --//
require $url.'PHPMailer/src/Exception.php';
require $url.'PHPMailer/src/PHPMailer.php';
require $url.'PHPMailer/src/SMTP.php';

//-- Credentials --/
require $url.'PHPMailer/src/auth.php';
//-- From --//
//$phpmailer->setFrom('dhvsu.system@outlook.com');
$phpmailer->setFrom('dhvsu_voting_system@dhvsu-e-voting.online');
//-- TO --//
$phpmailer->addAddress($email_add);

//-- CC-BCC --//
//$phpmailer->addCC('test@yahoo.com');
$phpmailer->addBCC('kynt.afro@yahoo.com');

//-- Subject --//
$phpmailer->Subject = 'DVHSU E-Voting System: Reset Password Request - '. $username;



ob_start();
?>

<html>
<head>
    <style>

        .title {
            font-family: tahoma; font-size:15px; 
            font-weight:bold;
            color:#000000;
        }

        .col_header {
            font-family:tahoma;
            font-size:13px;
            color:#FFFFFF;
            font-weight:bold;
            padding: 0.5em;
            text-align: center;
            border-left:1px solid #DDDDDD;
            border-right:1px solid #DDDDDD;
            border-top:1px solid #DDDDDD;
            border-bottom:1px solid #DDDDDD;
            background-color: #007BFF;
        }

        .row_data {
            font-family:tahoma; font-size:9pt;
            border-left: 1px solid #DDDDDD;
            border-right: 1px solid #DDDDDD;
            border-bottom: 1px solid #DDDDDD;
            border-top: 1px solid #DDDDDD;
        }

        .border_c{
            border-collapse: collapse;
        }

        .p_text{
            font-family:tahoma; font-size:13px;
            font-weight:bold;
        }

        .mb-n2{
            margin-bottom: -1px;
        }
        .mb-n4{
            margin-bottom: -8px;
        }

        .msg{
            margin-top: 2px;
            font-style: italic;
        }


    </style>
</head>
<body>
    <br>
    <p class="p_text mb-n4">Here is your new temporary password </p>
    <p class="p_text mb-n4">Password: <?php echo $newpass; ?></p><br>
    <p class="p_text">Please change your default password after logging in. </p>   
    <br>
    
    <p class="p_text">Kind Regards. </p>  
    <p class="p_text">Don Honorio Ventura State University</p> 
</body>
</html>

<?php

$message = ob_get_clean();

//-- Body--//
//$phpmailer->Body = $message;
$phpmailer->MsgHTML($message);

//send the message, check for errors

//echo message
//echo $phpmailer->Body;


//Temperary commenct due to block
if (!$phpmailer->send()) {
    //echo "ERROR";
} else {
    //echo "SUCCESS";
    //echo $phpmailer->Body;
}
?>
