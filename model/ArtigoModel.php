<?php

require_once __DIR__ . "/../config/Database.php";

class ArtigoModel {

    private $tabela = "artigo";
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->conectar();
    }

    public function listar() {
        $query = "SELECT a.*, c.nome as categoria_nome FROM $this->tabela a 
                  LEFT JOIN categoria c ON a.categoria_id = c.id;";

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

    public function criar($titulo, $conteudo, $categoria_id) {
        $query = "INSERT INTO $this->tabela (titulo, conteudo, categoria_id) 
                  VALUES (:titulo, :conteudo, :categoria_id);";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':titulo', $titulo);
        $stmt->bindParam(':conteudo', $conteudo);
        $stmt->bindParam(':categoria_id', $categoria_id);
        $stmt->execute();

        return $stmt->rowCount() > 0;
    }

    public function editar($artigo) {
        $query = "UPDATE $this->tabela SET 
                  titulo = :titulo, 
                  conteudo = :conteudo, 
                  categoria_id = :categoria_id 
                  WHERE id = :id;";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $artigo["id"]);
        $stmt->bindParam(":titulo", $artigo["titulo"]);
        $stmt->bindParam(":conteudo", $artigo["conteudo"]);
        $stmt->bindParam(":categoria_id", $artigo["categoria_id"]);
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