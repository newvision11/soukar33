<?php
$name = isset($_REQUEST["name"]) ? $_REQUEST["name"] : "";
$email = isset($_REQUEST["email"]) ? $_REQUEST["email"] : "";
$subject = isset($_REQUEST["subject"]) ? $_REQUEST["subject"] : "";
$msg = isset($_REQUEST["msg"]) ? $_REQUEST["msg"] : "";
$to = "maaroufifouzi0@gmail.com"; // ENTER YOUR EMAIL ADDRESS

if (!empty($name) && !empty($email) && !empty($msg)) {
    $email_subject = "wow pog championnn"; // ENTER YOUR EMAIL SUBJECT
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=utf-8" . "\r\n";
    $headers .= "From: " . $name . " <" . $email . ">\r\n" . "Reply-To: " . $email . "\r\n";
    $message = "From: $name<br/> Email: $email <br/> Subject: $subject <br/> Message: $msg";
    $mail = mail($to, $email_subject, $message, $headers);
    if ($mail) {
        echo 'success';
    } else {
        echo 'failed';
    }
}
?>
