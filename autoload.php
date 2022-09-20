<?php 

spl_autoload_register(function($class)
{
    $arquivo_classe = dirname(__FILE__,2) . '/' . $class . ".php";

    if(file_exists($arquivo_classe))
        include $arquivo_classe;
    else 
        echo 'Arquivo não encontrado:' . $arquivo_classe;
});