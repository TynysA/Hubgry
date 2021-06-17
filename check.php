<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->SMTPAuth = true;
//$mail->SMTPDebug = 1;
echo $good;//
$mail->CharSet='UTF-8';
$mail->isHTML(true);
$mail->SMTPSecure = 'ssl';

$mail->Host="smtp.mail.ru";
$mail->Username = 'tekseru.zhiber@mail.ru'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = 'm^rirrOINU33';//91v97haF332YzbzgVje1 //m^rirrOINU33
$mail->setFrom('tekseru.zhiber@mail.ru'); // От кого будет уходить письмо?
$mail->addAddress('tynys.aday@mail.ru');//Кому будет уходить письмо


$mail->Port = 465;

foreach ($_POST as $key=>$value){
    if (!$value==''){
        $massage .="$key:"."$value \n";
    }
    else
        continue;
}
$mail->Subject = 'Заявка из сайта';
$mail->Body=$massage;
if($mail->send()){
    header('location:../index.php');
}
else
    echo "Error";
exit;

