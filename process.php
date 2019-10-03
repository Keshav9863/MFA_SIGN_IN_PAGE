<?php
/*session_start();
$rndno=rand(100000, 999999);//OTP generate
$message = urlencode("otp number.".$rndno);
$to=$_POST['email'];
$subject = "OTP";
$txt = "OTP: ".$rndno."";
$headers = "From: keshavy@maqsoftware.com" . "\r\n" .
"CC: keshavy@maqsoftware.com";
mail($to,$subject,$txt,$headers);
if(isset($_POST['btn-save']))
{
$_SESSION['name']=$_POST['name'];
$_SESSION['email']=$_POST['email'];
$_SESSION['phone']=$_POST['phone'];
$_SESSION['otp']=$rndno;
header( "Location: otp.php" );
} */?>
<?php
$rndno=rand(100000, 999999);//OTP generate
$txt = "OTP: ".$rndno."";
require 'phpmailer/PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPSecure = 'tls';
$mail->Host = 'smtp.gmail.com';
$mail->Port = 25;
$mail->SMTPAuth = true;
$mail->Username = 'nodedatamfa@gmail.com';
$mail->Password = '#1Password';
$mail->setFrom('nodedatamfa@gmail.com', 'Keshav Yadav');
$mail->addReplyTo('nodedatamfa@gmail.com', 'Keshav Yadav');
$mail->addAddress('keshavy@maqsoftware.com', 'Keshav Kumar');
$mail->Subject = 'Authentication Required';
$mail->Body=$txt;
$mail->AltBody = 'This is a plain text message body';
if (!$mail->send()) {
    echo 'Mailer Error: ';
    
} else {
    echo 'Message sent!';
}

/*
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "test@hostinger-tutorials.com";
    $to = "nodedatamfa@gmail.com";
    $subject = "Checking PHP mail";
    $message = "PHP mail works just fine";
    $headers = "From:" . $from;
    if(mail($to,$subject,$message, $headers))
    {
        echo "The email message was sent.";    
    }
    else
    {
        echo 'Something Went wrong'
    }
    

/*
//nodedatamfa@gmail.com, #1Password
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require 'phpmailer/PHPMailerAutoload.php';
require 'phpmailer/class.phpmailer.php';
$mail = new PHPMailer;
$mail->isSendmail();
$mail->isSMTP();
$mail->Host  = 'smtp.gmail.com';
$mail->Port  = 587;
$mail->SMTPAuth = true;
$mail->SMTPAutoTLS = true;
$mail->SMTPSecure='tls';
$mail->Username='nodedatamfa@gmail.com';
$mail->Passowrd='#1Password';
$mail->setFrom('nodedatamfa@gmail.com','Keshav Yadav');
$mail->addAddress('kk250578@gmail.com');
$mail->addReplyTo('kk250578@gmail.com','Keshav Kumar');
$mail->SMTPDebug=1;
//$mail->SMTPDebug = 2;
$mail->Subject='Form Submission';
$mail->Body='Test Mail authentication';
if(!$mail->send()){
    echo $mail->ErrorInfo;
}
else
{
    echo 'Something went wrong';
}
require 'class.PHPMailer.php';

$mail->isSMTP();

$mail->SMTPSecure = 'tls';
$mail->SMTPAuth   = true;
$mail->Username   = 'keshavy@maqsoftware.com';
$mail->Password   = 'qxwgwwwcgnxvqmxn';
$mail->SetFrom('keshavy@maqsoftware.com', 'FromEmail');
$mail->addAddress('kk250578@gmail.com', 'ToEmail');
//$mail->SMTPDebug  = 3;
//$mail->Debugoutput = function($str, $level) {echo "debug level $level; message: $str";}; //$mail->Debugoutput = 'echo';
$mail->IsHTML(true);

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if (!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}*/
?>
