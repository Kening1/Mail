<?php

namespace App\Classes;

class MailSender
{


    public function sendEmail()
    {
       
        $username=$_POST['username'];
        $user_email=$_POST['user_email'];
        $category=$_POST['Category'];
        $comment=$_POST['comment'];
        $body='Автор:'.$username.'('.$user_email.')'.'<br>'.' Текст обращения:'
              .$comment.'<br>'.' Дата и время составления обращения:'.date("y.m.d h:m");
        $transporter = (new \Swift_SmtpTransport(SMTP, 465, 'ssl'))
        ->setUsername(USERNAME)
        ->setPassword(PASSWORD);

        $mailer = new \Swift_Mailer($transporter);


// Create a message
        $message = (new \Swift_Message($category.' От пользователя '.$username))
        ->setFrom([USERNAME => "Обратная Связь"])
        ->setTo([USERNAME => 'Разработчик'])
        ->setBody($body, 'text/html')
         ;

// Send the message
        if (!$mailer->send($message))
            echo "Ошибка отправки сообщения, проблеммы с сервером";
        else
            echo "Спасибо за ваше сообщение";

    }
 
}
    ?>
