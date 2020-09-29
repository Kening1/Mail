<?php

use function App\Functions\error404;
use function App\Functions\print_form;

$path = dirname(__DIR__).'/vendor/autoload.php';

require $path;

$action = null;
if(isset($_GET['acton'])){
    $action = $_GET['action'];
}

switch ($action){
    case 'handle_form':
        break;
    case 'show_result':
        break;
    default:
            print_form();
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
    require 'src/error404.php';
        */
