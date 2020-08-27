<?php 
if ($_POST && isset($_POST['submit'])) 
{

$to = "anmolhtmldeveloper@gmail.com, webtalks2013@gmail.com";
    $subject = "iamhtmldeveloper.com - get in touch";
    $subject1 = "get in touch";
	$text1 = "Thank you for information will get back to you as soon as possible";
	$name=$_POST['name'];
    $email=$_POST['email'];
	$phone=$_POST['phone'];
	$subject=$_POST['subject'];
    $message=$_POST['message'];
    $emailBody = "
            
            <br /><br />
            <strong>Name</strong> : $name <br />
            <strong>Email</strong> : $email<br />
            <strong>Phone</strong> : $phone <br />
            <strong>Subject</strong> : $subject<br />
            <strong>Message</strong> : $message<br />
    ";

    //  Email headers
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;Sharset=iso-8859-1" . "\r\n";
   $headers .= 'From: Amol Bhandare - iamhtmldeveloper <info@iamhtmldeveloper.com>' . "\r\n";

    //  Email Function
    $mail = mail($to,$subject,$emailBody,$headers);
	if($mail)
{
	mail($email,$subject1,$text1,$headers);
echo '<script>alert("Thank you for contacting us.");window.location="index.html";</script>';
exit;
}
else
{
echo '<script>alert("fail");window.location="index.html";</script>';
exit;
}
}
?>

