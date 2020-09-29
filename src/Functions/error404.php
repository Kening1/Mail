<?php
namespace App\Functions;

function error404():void
{
    echo "<b><font size=35> 404 </font><br><br> Страница не найдена <br>";
    echo $_SERVER['REQUEST_URI'];
}
