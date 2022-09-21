<?php 

namespace AKUMA_NO_MI\Controller;
use AKUMA_NO_MI\Model\TipoModel;

class TipoController extends Controller
{
    public static function index()
    {
        $model = new TipoModel();
        $model->getAllRows();

        include 'View/modules/TipoListar.php';
    }

    public static function form()
    {
        $model = new TipoModel();

        if(isset($_GET['id']))
            $model = $model->getById( (int) $_GET['id']);
        include 'View/modules/TipoCadastro.php';
    }

    public static function save()
    {
        $tipo = new TipoModel();
        $tipo->id = $_POST['id'];
        $tipo->descricao = $_POST['descricao'];

        $tipo->save();
        header("Location: /Tipo");
    }

    public static function delete()
    {
        $delete = new TipoModel();

        $delete->delete((int) $_GET['id']);

        header("Location: /Tipo");
    }
}