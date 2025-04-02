<?php
    require_once __DIR__ . '/../../../config/env.php';
    require_once __DIR__ . '/../../../model/CategoriaModel.php';

    // modo edição ou criação
    if (isset($_GET['id'])) {
        $modo = 'EDICAO';
        $categoriaModel = new CategoriaModel();
        $categoria = $categoriaModel->buscarPorId((int) $_GET['id']);
    } else {
        $modo = 'CRIACAO';
        $categoria = [
            'id'=> '',
            'nome'=> '',
        ];
    }

?>

<?php require_once __DIR__ . '/../../components/head.php'; ?>

<body class="container-adm">
    <?php require_once __DIR__ . '/../../components/navbar.php'; ?>
    <?php require_once __DIR__ . '/../../components/sidebar.php'; ?>

    <main class="content-adm">
        <h1><?= $modo == 'EDICAO' ? 'Categorias ID: ' . $categoria['id'] : 'Criar Categorias' ?></h1>

        <div class="container">
            <form class="form" method="POST" action="<?= APP_CONSTANTS['APP_URL'] . APP_CONSTANTS['PATH_PAGES'] . 'admin/categoria_salvar.php' ?>">
                <div class="form-content">
                    <input type="hidden" name="id" value="<?= $categoria['id'] ?>">

                    <div class="input-group">
                        <label for="nome">Nome</label>
                        <input name="nome" type="text" value="<?= $categoria['nome'] ?>" required>
                    </div>
                </div>

                <div class="form-actions">
                    <a href="<?= APP_CONSTANTS['APP_URL'] . APP_CONSTANTS['PATH_PAGES'] . 'admin/categorias.php' ?>">
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