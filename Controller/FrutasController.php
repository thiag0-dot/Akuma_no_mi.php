<?php

namespace AKUMA_NO_MI\Controller;

use AKUMA_NO_MI\Model\FrutasModel;
use AKUMA_NO_MI\Model\TipoModel;

class FrutasController extends Controller
{
    public static function index()
    {      

        $model = new FrutasModel();
        $model->getAllRows();

        include 'View/modules/FrutasListar.php';
    }

    public static function form()
    {
        $model = new FrutasModel();

        if(isset($_GET['id'])){ 
            $model = $model->getById( (int) $_GET['id']);
        }

        $model_tipos = new TipoModel();
        $model_tipos->getAllRows();

        $model->lista_tipos = $model_tipos->rows;
            
           
        include 'View/modules/Frutascadastro.php';
    }

    public static function save()
    {

        $Frutas = new FrutasModel();
        $Frutas->id = $_POST['id'];
        $Frutas->nome = $_POST['nome'];
        $Frutas->tipos = $_POST['tipos'];
        $Frutas->usuario = $_POST['usuario'];
        $Frutas->descricao = $_POST['descricao'];

        $Frutas->save();
        header("Location: /Frutas_do_diabo");
    }

    public static function delete()
    {

        $delete = new FrutasModel();

        $delete->delete((int) $_GET['id']);

        header("Location: /Frutas_do_diabo");
    }
}