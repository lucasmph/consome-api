<?php
spl_autoload_register(function (string $className)
{
    $path = str_replace('Consome','src',$className);
    $path = str_replace('\\', DIRECTORY_SEPARATOR, $path);
    $path .= '.php';
    if(file_exists($path)){
        require_once $path;
    }
});