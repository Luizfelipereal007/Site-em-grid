<?php

require_once __DIR__ . '/CategoriaModel.php';

class ArtigoModel {

    private $categoriaModel;
    private $tabela = "artigo";
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->conectar();
    }

    public function listar() {
        $query = "SELECT * FROM $this->tabela;";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function buscarPorId($id) {
        foreach ($this->artigos as $artigo) {
            if ($id == $artigo['id']) {
                return $artigo;
            }
        }

        return NULL;
    }

    private function popularArtigosComCategoria($artigos) {
        $categorias = $this->categoriaModel->categorias;
        $artigosPopulados = [];

        foreach ($this->categoriaModel->categorias as $categoria) {
            foreach ($artigos as $artigo) {
                if ($categoria['id'] == $artigo['categoriaId']) {
                    $artigo['categoria'] = $categoria;
                    array_push($artigosPopulados, $artigo);
                }
            }
        }

        return $artigosPopulados;
    }

}