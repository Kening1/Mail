<?php
namespace functions;
require_once ("../vendor/src/jlo/mail/mail_send.php");

$send_mail=new \vendor\src\jlo\mail\mail_send();
$send_mail->send_email();