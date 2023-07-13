<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, DELETE, PUT, PATCH, OPTIONS');

function autoload()
{
    $prs = [
        '../core/',
        '../controllers/',
        '../models/'
    ];
    foreach($prs as $root) {
        $files = scandir($root);
        foreach($files as $path) {
            if (in_array($path, ['.', '..'])) continue;
            
            require_once $root.$path;
        }
    }
}
call_user_func('autoload');

//include helpers
include('../helpers/function.php');
//include routes
include('../routes/routes.php');