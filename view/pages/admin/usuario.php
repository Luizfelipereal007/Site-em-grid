<?php
    require_once __DIR__ . '/../../../config/env.php';
    require_once __DIR__ . '/../../../model/UsuarioModel.php';

    // modo edição ou criação
    if (isset($_GET['id'])) {
        $modo = 'EDICAO';
        $usuarioModel = new UsuarioModel();
        $usuario = $usuarioModel->buscarPorId((int) $_GET['id']);
    } else {
        $modo = 'CRIACAO';
        $usuario = [
            'id'=> '',
            'nome'=> '',
            'email'=> '',
            'telefone'=> '',
            'data_nascimento'=> '',
            'cpf'=> '',
        ];
    }

?>

<?php require_once __DIR__ . '/../../components/head.php'; ?>

<body class="container-adm">
    <?php require_once __DIR__ . '/../../components/navbar.php'; ?>
    <?php require_once __DIR__ . '/../../components/sidebar.php'; ?>

    <main class="content-adm">
        <h1><?= $modo == 'EDICAO' ? 'Usuários ID: ' . $usuario['id'] : 'Criar Usuários' ?></h1>

        <div class="container">
            <form class="form" method="POST" action="<?= APP_CONSTANTS['APP_URL'] . APP_CONSTANTS['PATH_PAGES'] . 'admin/usuario_salvar.php' ?>">
                <div class="form-content">
                    <input type="hidden" name="id" value="<?= $usuario['id'] ?>">

                    <div class="input-group">
                        <label for="nome">Nome</label>
                        <input name="nome" type="text" value="<?= $usuario['nome'] ?>" required>
                    </div>

                    <div class="input-group">
                        <label for="email">Email</label>
                        <input name="email" type="email" value="<?= $usuario['email'] ?>" required>
                    </div>

                    <div class="input-group">
                        <label for="telefone">Telefone</label>
                        <input name="telefone" type="text" value="<?= $usuario['telefone'] ?>">
                    </div>

                    <div class="input-group">
                        <label for="data_nascimento">Data de nascimento</label>
                        <input name="data_nascimento" type="date" value="<?= $usuario['data_nascimento'] ?>">
                    </div>

                    <div class="input-group">
                        <label for="cpf">CPF</label>
                        <input name="cpf" type="text" value="<?= $usuario['cpf'] ?>" required>
                    </div>
                </div>

                <div class="form-actions">
                    <a href="<?= APP_CONSTANTS['APP_URL'] . APP_CONSTANTS['PATH_PAGES'] . 'admin/usuarios.php' ?>">
                        <button class="btn" type="button">
                            Cancelar
                        </button>
                    </a>
                    <button class="btn btn-primary">Salvar</button>
                </div>
            </form>
        </div>
    </main>

    <?php require_once __DIR__ . '/../../components/footer.php'; ?>

    <script src="<?= APP_CONSTANTS['APP_URL'] . APP_CONSTANTS['PATH_JS'] ?>main.js"></script>
</body>

</html>