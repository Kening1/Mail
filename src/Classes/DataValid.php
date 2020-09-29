<?php
namespace App\Classes;

class DataValid
{


    public function validData()
    {
        if (strlen($_POST['username']) < 4) 
            echo 'Ошибка ввода имени. Имя должно содержать минимум 4 символа', '<br>';
             else
               $check_name='readonly';

        if (! filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL)) 
            echo 'Ошибка ввода почты пожалуйста введите существующую почту', '<br>';
            else
            $check_email='readonly';
            
            
    }
}