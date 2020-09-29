<?php

use function App\Functions\error404;
use function App\Functions\print_form;
use function App\Functions\valid;
use function App\Functions\mail_ending;

$path = dirname(__DIR__).'/vendor/autoload.php';

require $path;


if (isset($_SERVER['REQUEST_URI']))
    $action=$_SERVER['REQUEST_URI'];
    
 
   



switch ($action){
    case '/Mail-master/public/index.php?=handle_form':
        valid();
        break;
    case '/Mail-master/public/index.php?=show_result':
        mail_ending();
        break;
    default:
        
        $action='index.php?=handle_form';
    /*    $username="test";
        $user_mail='doggy@doggy.com';
        $hidden_list="hidden";
        $check_name="readonly";
        $check_email="readonly";
        $category="Eror";
        $hidden_list="hidden";
        $hidden="";*/
        include_once '../templates/form.html.php';
        break;
        
}
/*if ($uri === '/'){
 var_dump('EEE');
 print_form();
 }elseif($uri === '/Mail/index.php?=handle_form'){
 require 'src/valid.php';
 }
 elseif ($uri === '/Mail/index.php?=show_result')
 require 'src/mail_sending.php';
 else
 require 'src/error404.php';*/