<?php

namespace App\Functions;

use App\Classes\MailSender;

function mail_ending():void
{
    $send_mail=new MailSender();
    $send_mail->sendEmail();
}



