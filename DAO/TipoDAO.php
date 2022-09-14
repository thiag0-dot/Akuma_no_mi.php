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

    public function update(TipoModel $model)
    {
        $sql = "UPDATE Tipos SET descricao=? WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->descricao);
        $stmt->bindValue(2, $model->id);
        $stmt->execute();
    }

    public function select()
    {
        $sql = "SELECT * FROM Tipos";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    public function selectById(int $id)
    {
        include_once 'Model/TipoModel.php';

        $sql = "SELECT * FROM Tipos WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject();
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM Tipos WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}