<?php
require_once __DIR__ . '/../../../config/env.php';
require_once __DIR__ . '/../../../model/CategoriaModel.php';

$categoriaModel = new CategoriaModel();
$lista = $categoriaModel->listar();
?>

<?php require_once __DIR__ . '/../../components/head.php'; ?>

<body class="container-adm">
    <?php require_once __DIR__ . '/../../components/navbar.php'; ?>
    <?php require_once __DIR__ . '/../../components/sidebar.php'; ?>

    <main class="content-adm">
        <h1>Categorias</h1>

        <div class="container">
            <div class="actions">
                <a href="<?= APP_CONSTANTS['APP_URL'] . APP_CONSTANTS['PATH_PAGES'] . 'admin/categoria.php' ?>">
                    <button class="btn btn-primary"><span class="material-symbols-outlined">
                            add_circle
                        </span></button>
                </a>
            </div>

            <table class="table">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Nome</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($lista as $item) { ?>
                        <tr>
                            <td><?= $item['id'] ?></td>
                            <td><?= $item['nome'] ?></td>
                            <td class="table-actions">
                                <a
                                    href="<?= APP_CONSTANTS['APP_URL'] . APP_CONSTANTS['PATH_PAGES'] . 'admin/categoria.php?id=' . $item['id'] ?>">
                                    <span class="material-symbols-outlined">edit</span>
                                </a>
                                <form id="delete-form-<?= $item['id'] ?>" method="POST"
                                    action="<?= APP_CONSTANTS['APP_URL'] . APP_CONSTANTS['PATH_PAGES'] . 'admin/categoria_excluir.php' ?>">
                                    <input type="hidden" name="id" value="<?= $item['id'] ?>">
                                    <span class="material-symbols-outlined" onclick="document.getElementById('delete-form-<?= $item['id'] ?>').submit();">
                                        delete
                                    </span>
                                </form>


                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </main>

    <?php require_once __DIR__ . '/../../components/footer.php'; ?>

    <script src="<?= APP_CONSTANTS['APP_URL'] . APP_CONSTANTS['PATH_JS'] ?>main.js"></script>
</body>

</html>