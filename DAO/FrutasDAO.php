<?php 

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
        $sql = "INSERT INTO Frutas 
                (nome, tipo, usuario, descricao)
                VALUES
                (?, ?, ?, ?) ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->tipo);
        $stmt->bindValue(3, $model->usuario);
        $stmt->bindValue(4, $model->descricao);
        $stmt->execute();
    }

    public function update(FrutasModel $model)
    {
        $sql = "UPDATE Frutas SET nome=?, tipo=?, usuario=?, descricao=? WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->tipo);
        $stmt->bindValue(3, $model->usuario);
        $stmt->bindValue(4, $model->descricao);
        $stmt->bindValue(3, $model->id);
        $stmt->execute();
    }
    
    public function select()
    {
        $sql = "SELECT * FROM Frutas";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    public function selectById(int $id)
    {
        include_once 'Model/FrutasModel.php';

        $sql = "SELECT * FROM Frutas WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("FrutasModel");
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM Frutas WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}