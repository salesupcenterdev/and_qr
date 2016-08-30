<?php
error_reporting(0);


if (!empty($_POST['id'])) {
    $id = $_POST['id'];
    
    if (!empty($_POST['name'])) {
        $name = $_POST['name'];
    } else {
        $name = "";
    }
    
    $name = 
    // обработка 
    $to  = "Postmaster <help.qr.and@gmail.com>, " ; 
    $to .= "copy <help.qr.and@yandex.ru>"; 
    
    $subject = "AND-QR ЖАЛОБА НА ". $name; 
    // $subject = '=?koi8-r?B?'.base64_encode(convert_cyr_string($subject, "w","k")).'?='; 
    $message = "С сайта http://qr.autonovad.ua поступила жалоба на службу ". $name;    
    
    $headers  = "Content-type: text/html; charset=utf-8\r\n";
    $headers .= "From: qr.autonovad.ua <form@qr.autonovad.ua>\r\n"; 
    $headers .= "Bcc: help.qr.and@yandex.ru\r\n"; 
    
    // отправка
    if(mail($to, $subject, $message, $headers)) {
        // сообщение об успешной отправке
        echo "<div class='success_user alert alert-success'><div class='modal-header'><h3 class='modal-title alert-heading'></h3>Ваша жалоба принята. Спасибо.</div></div>";
    } else {
        // сообщение о проблеме в отправке
        echo "<div class='error_user alert alert-danger'><div class='modal-header'><h3 class='modal-title alert-heading'></h3>При отправке сообщения возникли проблемы. Попробуйте позже еще раз...</div></div>";        
    } 
    die;
    }

$nameErr = "";
$userEmail = "";
$addName = "";
$telephones = "";
$userMessage = "";
$typeData = "";

if (empty($_POST['userEmail'])) {
        $nameErr .= "пропущен e-mail отправителя сообщения<br>";
    }
    else {
        $userEmail = $_POST['userEmail'];
    }

if (empty($_POST['addName'])) {
        $nameErr .= "пропущено название предлагаемого сервиса<br>";
    }
    else {
        $addName = $_POST['addName'];
    }

if (empty($_POST['landline'])) {
        $nameErr .= "необходим минимум один телефонный номер сервиса<br>";
    }
    else {
        $telephones = $_POST['landline'];
    }    
    
if (!empty($_POST['userMessage'])) {    
        $userMessage = $_POST['userMessage'];
    }       
    
if (!empty($_POST['typeData'])) { 
        $typeData = $_POST['typeData'];
    }    
    
if($nameErr !== "") {
    // возврат сообщени об ошибке формы    
    echo "<div class='error_user alert alert-danger'><div class='modal-header'><h3 class='modal-title alert-heading'></h3>При заполнении полей формы допущены ошибки. Вид ошибки: <strong>". $nameErr . "</strong>. Исправьте и повторите отправку.
            </div></div>";  
} else {
    // обработка 
    $to  = "Postmaster <help.qr.and@gmail.com>, " ; 
    $to .= "copy <help.qr.and@yandex.ru>"; 
    
    $subject = "AND-QR ДОБАВИТЬ ". $typeData . ": " . $addName; 
    // $subject = '=?koi8-r?B?'.base64_encode(convert_cyr_string($subject, "w","k")).'?='; 
    $message = "С сайта http://qr.autonovad.ua от посетителя с email: " . $userEmail. " поступило предложение добавить службу ". $typeData . ": " . $addName . "<br> Телефоны: " . $telephones . ".<br> Комментарий пользователя: " . $userMessage;    
    
    $headers  = "Content-type: text/html; charset=utf-8\r\n";
    $headers .= "From: qr.autonovad.ua <form@qr.autonovad.ua>\r\n"; 
    $headers .= "Bcc: help.qr.and@yandex.ru\r\n"; 
    
    // отправка
    if(mail($to, $subject, $message, $headers)) {
        // сообщение об успешной отправке
        echo "<div class='success_user alert alert-success'><div class='modal-header'><h3 class='modal-title alert-heading'></h3>Ваше сообщение успешно отправлено. Спасибо.
            </div></div>";
    } else {
        // сообщение о проблеме в отправке
        echo "<div class='error_user alert alert-danger'><div class='modal-header'><h3 class='modal-title alert-heading'></h3>При отправке сообщения возникли проблемы. Попробуйте попозже повторить ввод в форму информации и отправку.
            </div></div>";        
    }    
}
