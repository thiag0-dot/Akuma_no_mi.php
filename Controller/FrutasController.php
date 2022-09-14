<?php

namespace AKUMA_NO_MI\Controller;

use AKUMA_NO_MI\Model\FrutasModel;

class FrutasController
{
    public static function index()
    {
        include 'Model/FrutasModel.php';

        $model = new FrutasModel();
        $model->getAllRows();

        include 'View/modules/FrutasListar.php';
    }

    public static function form()
    {
        include 'Model/FrutasModel.php';
        $model = new FrutasModel();

        if(isset($_GET['id']))
            $model = $model->getById( (int) $_GET['id']);

        $model->getAllTipos(); 
           
        include 'View/modules/Frutascadastro.php';
    }

    public static function save()
    {
        include 'Model/FrutasModel.php';

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
        include 'Model/FrutasModel.php';

        $delete = new FrutasModel();

        $delete->delete((int) $_GET['id']);

        header("Location: /Frutas_do_diabo");
    }
}