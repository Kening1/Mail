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
    
    =========================
    
    server {
    root /home/nik/projects/Mail/public;
    server_name localhost;

    index index.php;
    location / {
        # try to serve file directly, fallback to        index.php

        try_files $uri /index.php$is_args$args;
    }

    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php/php7.4-fpm.sock;
        fastcgi_split_path_info ^(.+\.php)(/.*)$;
        include fastcgi_params;

        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        fastcgi_param DOCUMENT_ROOT $realpath_root;
        internal;
    }

    error_log /var/log/nginx/yunews.error.log debug;

}
    */
