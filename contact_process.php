<?php

if(!isset($_POST['submit']))
{
echo "error; you need to submit the form!";
}

$to = "iitbhuinsights@gmail.com";
$from = $_POST['email'];
$name = $_POST['name'];
$subject = $_POST['subject'];
$cmessage = $_POST['message'];

if(empty($name)||empty($from)||empty($subject)||empty($cmessage))
{
echo "Fill all details!";
exit;
}

$headers = "From: $from \r\n";
$subject = "You have a message from IIT BHU Insights Page.";

$send = mail($to, $subject, $cmessage, $headers);

?>