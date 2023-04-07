<?
$name  = isset($_REQUEST["name"]) ? $_REQUEST["name"] : "";
$phone   = isset($_REQUEST["phone"]) ? $_REQUEST["phone"] : "";
$date = isset($_REQUEST["date"]) ? $_REQUEST["date"] : "";
$treatment = isset($_REQUEST["treatment"]) ? $_REQUEST["treatment"] : "";
$email = isset($_REQUEST["email"]) ? $_REQUEST["email"] : "";
$to    = "maaroufifouzi0@gmail.com"; // ENTER YOUR EMAIL ADDRESS
if (isset($email) && isset($name) && isset($phone)) {
    $email_subject = "$name sent you a message via YOUR SITE NAME"; // ENTER YOUR EMAIL SUBJECT
        $headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
$headers .= "From: ".$name." <".$email.">\r\n"."Reply-To: ".$email."\r\n" ;
$msg     = "From: $name<br/> Phone: $phone <br/> Appointment Date: $date <br/> Treatment: $treatment";
    
   $mail =  mail($to, $email_subject, $msg, $headers);
  if($mail)
    {
        echo 'success';
    }

else
    {
        echo 'failed';
    }
}

?>
