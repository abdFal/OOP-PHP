<?php
// function autoLoader($className)
// {
//     $path = "App/Produk/";
//     $ext = ".php";
//     $fullPath = $path . $className . $ext;
//     include_once $fullPath;
// }
// spl_autoload_register('autoLoader');

function autoloader($class) {
    $class = str_replace("\\","/",$class);
    require_once $class . '.php';
}
spl_autoload_register('autoloader');
