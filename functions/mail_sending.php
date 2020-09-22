<?php
namespace functions;
require 'functions/mail_send.php';


$send_mail=new \functions\mail_send();
$send_mail->send_email();


