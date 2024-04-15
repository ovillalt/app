<?php

if($_SERVER["SERVER_NAME"] == "localhost")
{
    $path = (strtoupper(substr(PHP_OS, 0, 3)) === "WIN") ? "\\" : "/";
    $replace = explode($path, dirname(__file__));
    $dir = $replace[count($replace)-1];
    echo $dir . 1;
}
else
{
    $path = ".";
    $replace = explode($path, $_SERVER["SERVER_NAME"] );
    var_dump($replace);
    $dir = (count($replace) == 2) ? $replace[0] : $replace[1];
    echo $dir;
}

print_r($_SERVER);
$ip=$_SERVER["HTTP_HOST"];
echo $ip;