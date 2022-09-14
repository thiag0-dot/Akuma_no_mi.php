<?php

$uri_parse = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

include 'Controller/FrutasController.php';
include 'Controller/TipoController.php';

use AKUMA_NO_MI\Controller\FrutasController;
use AKUMA_NO_MI\Controller\TipoController;

switch($uri_parse)
{
    case '/Frutas_do_diabo':
        FrutasController::index();
    break;

    case '/Frutas_do_diabo/form':
        FrutasController::form();
    break;

    case '/Frutas_do_diabo/save':
        FrutasController::save();
    break;

    case '/Frutas_do_diabo/delete':
        FrutasController::delete();
    break;

    ##Tipos
    case '/Tipo':
        TipoController::index();
    break;

    case '/Tipo/form':
        TipoController::form();
    break;

    case '/Tipo/save':
        TipoController::save();
    break;

    case '/Tipo/delete':
        TipoController::delete();
    break;
    
    default:
        echo "erro 4045";
    break;
}
