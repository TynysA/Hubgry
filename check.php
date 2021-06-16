<?php
//booking
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$time=$_POST["time"];
$count=$_POST["count"];
//From contact block
$c_name = $_POST["name_c"];
$c_email = $_POST["email_c"];
$c_phone = $_POST["phone_c"];
$c_text = $_POST["text"];

$massage="Name:" . "$c_name | $name \n". "Phone:"
    . "$c_phone | $phone \n" ."Email:" . "$c_email | $email \n"
    . "Text: " .$c_text;
$massage .="\nTime: $time\n" ."Count of People: $count";
$subject = "=?utf-8?B?" .base64_encode("Test massage") ."?=";
$headers = " Form: $name\r\nContent-type: text/html; charset=utf-8\r\n";
$to="j.ady.tynys@gmail.com";
mail($to, $subject, $massage, $headers);
header('Location: ../index.php');
exit;

