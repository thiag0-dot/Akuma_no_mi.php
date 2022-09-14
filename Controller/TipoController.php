<?php 

namespace AKUMA_NO_MI\Controller;
use AKUMA_NO_MI\Model\TipoModel;

class TipoController{
    public static function index()
    {
        include 'Model/TipoModel.php';

        $model = new TipoModel();
        $model->getAllRows();

    

        include 'View/modules/TipoListar.php';
    }

    public static function form()
    {
        include 'Model/TipoModel.php';
        $model = new TipoModel();

        if(isset($_GET['id']))
            $model = $model->getById( (int) $_GET['id']);
        include 'View/modules/TipoCadastro.php';
    }

    public static function save()
    {
        include 'Model/TipoModel.php';

        $tipo = new TipoModel();
        $tipo->id = $_POST['id'];
        $tipo->descricao = $_POST['descricao'];

        $tipo->save();
        header("Location: /Tipo");
    }

    public static function delete()
    {
        include 'Model/TipoModel.php';

        $delete = new TipoModel();

        $delete->delete((int) $_GET['id']);

        header("Location: /Tipo");
    }
}