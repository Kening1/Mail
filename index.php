<?php
$uri = $_SERVER['REQUEST_URI'];


   if($uri==='/Mail/index' or $uri==='/Mail/' or $uri==='/Mail/index.php' or $uri==='/Mail/index.php?')
    require 'form.php';
   elseif ($uri ==='/Mail/index.php?=handle_form')
   require 'functions/valid.php';
   elseif ($uri === '/Mail/index.php?=show_result')
   require 'functions/mail_sending.php';
   else
        require 'functions/error404.php';