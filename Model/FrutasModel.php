<?php

class FrutasModel
{
    public $id, $nome, $tipos, $usuario, $descricao;

    public function save()
    {
        include 'DAO/FrutasDAO.php';
        $dao = new FrutasDAO();

        if(empty($this->id))
        {
            $dao->insert($this);
        }else
        {
            $dao->update($this);
        }
    }

    public function getAllRows()
    {
        include 'DAO/FrutasDAO.php';

        $dao = new FrutasDAO();

        $this->rows = $dao->select();
    }

    public function getById(int $id)
    {
        include 'DAO/FrutasDAO.php';

        $dao = new FrutasDAO();

        $obj = $dao->selectById($id);

        return($obj) ? $obj : new FrutasDAO();
    }

    public function delete(int $id)
    {
        include 'DAO/FrutasDAO.php';

        $dao = new FrutasDAO();

        $dao->delete($id);
    }
}