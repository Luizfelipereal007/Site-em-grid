<?php

require_once __DIR__ . '/../../../config/env.php';
require_once __DIR__ . '/../../../model/ProdutoModel.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $produtoModel = new ProdutoModel();

    if (empty($_POST['id'])) {
        // se não for encontrado um id executa função criar
        $salvou = $produtoModel->criar(
            $_POST['nome'],
            $_POST['descricao'],
            $_POST['categoria_id'],
            $_POST['preco'],
            $_POST['imagem_url']
        );
    } else {
        // se for encontrado um id vai editar
        $salvou = $produtoModel->editar([
            'id' => $_POST['id'],
            'nome' => $_POST['nome'],
            'descricao' => $_POST['descricao'],
            'categoria_id' => $_POST['categoria_id'],
            'preco' => $_POST['preco'],
            'imagem_url' => $_POST['imagem_url']
        ]);
    }

    if ($salvou) {
        header('Location: ' . APP_CONSTANTS['APP_URL'] . APP_CONSTANTS['PATH_PAGES'] . 'admin/produtos.php');    
    } else {
        echo "ERRO";
    }

} else {
    header('Location: ' . APP_CONSTANTS['APP_URL'] . APP_CONSTANTS['PATH_PAGES'] . 'admin/produtos.php');
}