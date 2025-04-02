<?php

require_once __DIR__ . '/../../../config/env.php';
require_once __DIR__ . '/../../../model/CategoriaModel.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $categoriaModel = new CategoriaModel();

    if (empty($_POST['id'])) {
        // se não for encontrado um id execulta funcao criar
        $salvou = $categoriaModel->criar($_POST['nome']);
    } else {
        // se for encontrado um id vai editar
        $salvou = $categoriaModel->editar([
            'id' => $_POST['id'],
            'nome' => $_POST['nome']
        ]);
    }

    if ($salvou) {
        header('Location: ' . APP_CONSTANTS['APP_URL'] . APP_CONSTANTS['PATH_PAGES'] . 'admin/categorias.php');    
    } else {
        echo "ERRO";
    }

} else {
    header('Location: ' . APP_CONSTANTS['APP_URL'] . APP_CONSTANTS['PATH_PAGES'] . 'admin/categorias.php');
}