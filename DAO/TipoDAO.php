<?php

namespace AKUMA_NO_MI\DAO;
use AKUMA_NO_MI\DAO\Mysql;
use AKUMA_NO_MI\Model\TipoModel;
use \PDO;

class TipoDAO{
    private $conexao;

    public function __construct()
    {
        include_once 'Mysql.php';

        $this->conexao = new Mysql();
    }

    public function insert(TipoModel $model)
    {
        $sql = "INSERT INTO Tipos 
                (descricao)
                VALUES
                (?) ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->descricao);
        $stmt->execute();
    }
}