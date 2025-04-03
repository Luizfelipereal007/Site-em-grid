<?php
    require_once __DIR__ . '/../../../config/env.php';
    require_once __DIR__ . '/../../../model/ArtigoModel.php';
    require_once __DIR__ . '/../../../model/CategoriaModel.php';

    $categoriaModel = new CategoriaModel();
    $categorias = $categoriaModel->listar();

    // modo edição ou criação
    if (isset($_GET['id'])) {
        $modo = 'EDICAO';
        $artigoModel = new ArtigoModel();
        $artigo = $artigoModel->buscarPorId((int) $_GET['id']);
    } else {
        $modo = 'CRIACAO';
        $artigo = [
            'id'=> '',
            'titulo'=> '',
            'conteudo'=> '',
            'categoria_id'=> '',
        ];
    }

?>

<?php require_once __DIR__ . '/../../components/head.php'; ?>

<body class="container-adm">
    <?php require_once __DIR__ . '/../../components/navbar.php'; ?>
    <?php require_once __DIR__ . '/../../components/sidebar.php'; ?>

    <main class="content-adm">
        <h1><?= $modo == 'EDICAO' ? 'Artigos ID: ' . $artigo['id'] : 'Criar Artigos' ?></h1>

        <div class="container">
            <form class="form" method="POST" action="<?= APP_CONSTANTS['APP_URL'] . APP_CONSTANTS['PATH_PAGES'] . 'admin/artigo_salvar.php' ?>">
                <div class="form-content">
                    <input name="id" type="hidden" value="<?= $artigo['id'] ?>">

                    <div class="input-group">
                        <label for="categoriaId">Categoria</label>
                        <select name="categoriaId" required>
                            <option value=""></option>
                            <?php foreach ($categorias as $categoria) { ?>
                            <option value="<?= $categoria['id'] ?>"
                                <?= $artigo['categoria_id'] == $categoria['id'] ? 'selected' : '' ?>>
                                <?= $categoria['nome'] ?>
                            </option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="input-group">
                        <label for="titulo">Título</label>
                        <input name="titulo" type="text" value="<?= $artigo['titulo'] ?>" required>
                    </div>

                    <div class="input-group">
                        <label for="conteudo">Conteúdo</label>
                        <textarea name="conteudo" rows="30" required><?= $artigo['conteudo'] ?></textarea>
                    </div>
                </div>

                <div class="form-actions">
                    <a href="<?= APP_CONSTANTS['APP_URL'] . APP_CONSTANTS['PATH_PAGES'] . 'admin/artigos.php' ?>">
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