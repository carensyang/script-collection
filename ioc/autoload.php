<?php   
function loader($class)   
{   
    $class = strtolower($class);
    $file  = 'libs/' . $class . '.php';   
    if(is_file($file)) {   
        require_once($file);   
    }   
}   

spl_autoload_register('loader');   
