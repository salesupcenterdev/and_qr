<?php

error_reporting(0);
$nameErr = "";
$userEmail = "";
$addName = "";
$telephones = "";
$userMessage = "";
$typeData = "";

if (empty($_POST['userEmail'])) {
        $nameErr .= "Missing userEmail <br>";
    }
    else {
        $userEmail = $_POST['userEmail'];
    }

if (empty($_POST['$addName'])) {
        $nameErr .= "Missing $addName";
    }
    else {
        $addName = $_POST['$addName'];
    }

if (empty($_POST['landline'])) {
        $nameErr .= "Missing minimum one telephone";
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
    echo "<div class='error_user alert alert-danger'><div class='modal-header'><h3 class='modal-title alert-heading'></h3>При заполнении полей формы допущены ошибки. Вид ошибки <strong>". $nameErr . "</strong>. Исправьте и повторите отправку.
            </div></div>";  
} else {
    // обработка 
    $to  = "Postmaster <help.qr.and@gmail.com>, " ; 
    $to .= "copy <help.qr.and@yandex.ru>"; 
    
    $subject = "AND-QR ДОБАВИТЬ ". $typeData . ": " . $addName; 
    // $subject = '=?koi8-r?B?'.base64_encode(convert_cyr_string($subject, "w","k")).'?='; 
    $message = "С сайта http://qr.autonovad.ua от посетителя с email: " . $userEmail. " поступило предложение добавить службу ". $typeData . ": " . $addName . "<br> Телефоны: " . $telephones . ".<br> Комментарий пользователя: " . $userMessage;    
    
    $headers  = "Content-type: text/html; charset=windows-1251 \r\n";
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
