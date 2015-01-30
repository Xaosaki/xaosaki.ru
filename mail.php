<?php
session_start();
require 'lib/phpmailer/PHPMailerAutoload.php';
require_once('lib/config.php');
$email =$_POST['email'];
$name = $_POST['name'];
$message = $_POST['message'];
$captcha_code = $_POST['captcha'];
$sess_captcha = $_SESSION['randStrn'];
$data = array();
if($sess_captcha != $captcha_code){
    $data['status'] = 'NO';
    $data['mes'] = "Код с картинки введен не верно";
} else {
    $mail = new PHPMailer();
    $mail->Host = 'smtp.yandex.ru';
    $mail->SMTPAuth = true;
    $mail->Username = $post_name;
    $mail->Password = $post_pass;
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->CharSet = 'UTF-8';
    $mail->From = $email;
    $mail->FromName = $name;
    $mail->AddAddress($post_mail, $name);
    $mail->WordWrap = 80;
    $mail->Subject = 'Сообщение с сайта портфолио';
    $mail->Body    = $message;
    if($mail->send()){
        $data['status'] = 'OK';
        $data['mes'] = "Письмо успешно отправлено";

    } else {
        $data['status'] = 'NO';
        $data['mes'] = "Возникла неизвестная ошибка при отправке письма";
    }
}
echo $data['mes'];
