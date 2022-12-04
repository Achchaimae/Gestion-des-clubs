<?php 
spl_autoload_register('myAutoLoaderM');
function myAutoLoaderM($className){
    $path = "./models/";
    $extention = ".class.php";
    $fullPath = $path.$className.$extention;

    if(!file_exists($fullPath)){
        return false;
    }

    include_once $fullPath;
}
;