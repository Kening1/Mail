<?php
namespace App\Classes;

class DataValid
{

    public function validData()
    {
        if (strlen($_POST['username']) < 4) {
            echo 'Ошибка ввода имени. Имя должно содержать минимум 4 символа', '<br>';
            echo 'Введите имя<input name="username" type="text" value=', $_POST['username'], '>', '<br><br>';
        } else
            echo 'Имя <input name="username" type="text" value=', $_POST['username'], ' readonly>', '<br><br>';

        if (! filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL)) {
            echo 'Ошибка ввода почты пожалуйста введите существующую почту', '<br>';
            echo 'Введите вашу почту<input name="user_email" type="text" value=', $_POST['user_email'], '>';
        } else
            echo 'Ваша почта <input name="user_email" type="text" value=', $_POST['user_email'], ' readonly>';
    }
}