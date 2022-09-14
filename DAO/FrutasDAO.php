<?php 

namespace AKUMA_NO_MI\DAO;

use AKUMA_NO_MI\DAO\MYSQL;
use AKUMA_NO_MI\Model\FrutasModel;
use \PDO;

class FrutasDAO
{
    private $conexao;

    public function __construct()
    {
        include_once 'Mysql.php';

        $this->conexao = new Mysql();
    }

    public function insert(FrutasModel $model)
    {
        $sql = "INSERT INTO frutas 
                (nome, id_tipos, usuario, descricao)
                VALUES
                (?, ?, ?, ?) ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->tipos);
        $stmt->bindValue(3, $model->usuario);
        $stmt->bindValue(4, $model->descricao);
        $stmt->execute();
    }

    public function update(FrutasModel $model)
    {
        $sql = "UPDATE frutas SET nome=?, id_tipos=?, usuario=?, descricao=? WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->tipos);
        $stmt->bindValue(3, $model->usuario);
        $stmt->bindValue(4, $model->descricao);
        $stmt->bindValue(5, $model->id);
        $stmt->execute();
    }
    
    public function select()
    {
        $sql = "SELECT * FROM frutas";
        

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    public function selectById(int $id)
    {
        include_once 'Model/FrutasModel.php';

        $sql = "SELECT * FROM frutas WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject();
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM frutas WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}