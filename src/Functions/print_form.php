<?php

namespace App\Functions;

function print_form()
{
    $template = file_get_contents(dirname(__DIR__) . '/../templates/form.html.php');
    print $template;
}