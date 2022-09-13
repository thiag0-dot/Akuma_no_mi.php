<?php

namespace AKUMA_NO_MI\Model;
use AKUMA_NO_MI\DAO\TipoDAO;

class TipoModel{
    public $id, $descricao, $rows;

    public function save()
    {
        include 'DAO/TipoDAO.php';
        $dao = new TipoDAO();

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
        include 'DAO/TipoDAO.php';

        $dao = new TipoDAO();

        $this->rows = $dao->select();
    }

    public function getById(int $id)
    {
        include 'DAO/TipoDAO.php';

        $dao = new TipoDAO();

        $obj = $dao->selectById($id);

        return($obj) ? $obj : new TipoDAO();
    }

    public function delete(int $id)
    {
        include 'DAO/TipoDAO.php';

        $dao = new TipoDAO();

        $dao->delete($id);
    }

}