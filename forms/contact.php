<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once "vendor/autoload.php";

//PHPMailer Object
$mail = new PHPMailer(true); //Argument true in constructor enables exceptions

//From email address and name
$mail->From = $_POST['email'];
$mail->FromName = $_POST['name'];

//To address and name
$mail->addAddress("email@zainuddinhazin.ga", "zai");

//Send HTML or Plain Text email
$mail->isHTML(true);

$mail->Subject = $_POST['subject'];
$mail->Body = $_POST['message'];

$response = $_POST["g-recaptcha-response"];
$url = 'https://www.google.com/recaptcha/api/siteverify';
$data = array(
    'secret' => '6Le7VmghAAAAAFNUMSzjmqVtlDBKglWpvzaYwNSi',
    'response' => $_POST["g-recaptcha-response"]
);
$options = array(
    'http' => array(
        'method' => 'POST',
        'content' => http_build_query($data)
    )
);
$context  = stream_context_create($options);
$verify = file_get_contents($url, false, $context);
$captcha_success=json_decode($verify);

if ($captcha_success->success==false) {
    echo "Captcha wrong";
} elseif ($captcha_success->success==true) {
    if (!$mail->send()) {?>
<script language="JavaScript">
  alert('message has been sent successfully!');
  document.location = 'index.html';
</script>
<?php
    } else {?>
<script language="JavaScript">
  alert('error error error! please contact me through email, thanks!');
  document.location = 'index.html';
</script>
<?php
    }
 }
