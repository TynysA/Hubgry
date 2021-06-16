<?php
$name = $_POST["login"];
$password = $_POST["password"];
$gender = $_POST["gender"];
$massage = "Gender of writer:" . $gender . "\nAnd Password:" . $password;
if (trim($name) == "") {
    echo "You do not write your name";
} else if (strlen(trim($name)) <= 1) {
    echo "This name is not correct";
} else if (trim($password) == "" || trim($gender) == "") {
    echo "Write all info";
} else {
    $subject = 'New message for you';
    // Reply:$name\r\nContent-type:text/html;charset=utf-8\r\n
    $headers = " Form:$name\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";
    mail("j.ady.tynys@gmail.com", $subject, $massage, $headers);
    header('Location: ../index.php');
    exit;
}
