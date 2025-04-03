<?php

require_once __DIR__ . '/../../../config/env.php';
require_once __DIR__ . '/../../../model/UsuarioModel.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (!empty($_POST['id'])) {
        $usuarioModel = new UsuarioModel();
        $excluiu = $usuarioModel->excluir($_POST['id']);

        if ($excluiu) {
            return header('Location: ' . APP_CONSTANTS['APP_URL'] . APP_CONSTANTS['PATH_PAGES'] . 'admin/usuarios.php');  
        }
    }
}