<?php

require_once __DIR__ . "/../config/Database.php";

class ProdutoModel {

    private $tabela = "produto";
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->conectar();
    }

    public function listar() {
        $query = "SELECT p.*, c.nome as categoria_nome FROM $this->tabela p 
                  LEFT JOIN categoria c ON p.categoria_id = c.id;";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function buscarPorId($id) {
        $query = "SELECT * FROM $this->tabela WHERE id = :id;";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function criar($nome, $descricao, $categoria_id, $preco, $imagem_url) {
        $query = "INSERT INTO $this->tabela (nome, descricao, categoria_id, preco, imagem_url) 
                  VALUES (:nome, :descricao, :categoria_id, :preco, :imagem_url);";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':descricao', $descricao);
        $stmt->bindParam(':categoria_id', $categoria_id);
        $stmt->bindParam(':preco', $preco);
        $stmt->bindParam(':imagem_url', $imagem_url);
        $stmt->execute();

        return $stmt->rowCount() > 0;
    }

    public function editar($produto) {
        $query = "UPDATE $this->tabela SET 
                  nome = :nome, 
                  descricao = :descricao, 
                  categoria_id = :categoria_id, 
                  preco = :preco, 
                  imagem_url = :imagem_url 
                  WHERE id = :id;";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $produto["id"]);
        $stmt->bindParam(":nome", $produto["nome"]);
        $stmt->bindParam(":descricao", $produto["descricao"]);
        $stmt->bindParam(":categoria_id", $produto["categoria_id"]);
        $stmt->bindParam(":preco", $produto["preco"]);
        $stmt->bindParam(":imagem_url", $produto["imagem_url"]);
        $stmt->execute();

        return $stmt->rowCount() > 0;
    }

    public function excluir($id) {
        $query = "DELETE FROM $this->tabela WHERE id = :id;";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();

        return $stmt->rowCount() > 0;
    }
}