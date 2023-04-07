<?php
$treatment = isset($_REQUEST["treatment"]) ? $_REQUEST["treatment"] : "";
$patient = isset($_REQUEST["patient"]) ? $_REQUEST["patient"] : "";
$date = isset($_REQUEST["date"]) ? $_REQUEST["date"] : "";
$name = isset($_REQUEST["name"]) ? $_REQUEST["name"] : "";
$email = isset($_REQUEST["email"]) ? $_REQUEST["email"] : "";
$phone = isset($_REQUEST["phone"]) ? $_REQUEST["phone"] : "";
$msg = isset($_REQUEST["msg"]) ? $_REQUEST["msg"] : "";
$to = "maaroufifouzi0@gmail.com"; // ENTER YOUR EMAIL ADDRESS

if (!empty($name) && !empty($msg) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $email_subject = "$name IDKKKK"; // ENTER YOUR EMAIL SUBJECT
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=utf-8" . "\r\n";
    $headers .= "From: " . $name . " <" . $email . ">\r\n" . "Reply-To: " . $email . "\r\n";

    $message = "Department: $treatment <br/> Patient: $patient <br/> Appointment Date: $date <br/> Patient Name: $name <br/> Patient Email: $email <br/> Patient Phone Number: $phone <br/> Message: $msg";

    $mail = mail($to, $email_subject, $message, $headers);
    if ($mail) {
        echo 'success';
    } else {
        echo 'failed';
    }
}
?>
