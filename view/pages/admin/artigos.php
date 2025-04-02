<?php
    require_once __DIR__ . '/../../../config/env.php';
    require_once __DIR__ . '/../../../model/ArtigoModel.php';

    $artigoModel = new ArtigoModel();
    $lista = $artigoModel->listar();
?>

<?php require_once __DIR__ . '/../../components/head.php'; ?>

<body class="container-adm">
    <?php require_once __DIR__ . '/../../components/navbar.php'; ?>
    <?php require_once __DIR__ . '/../../components/sidebar.php'; ?>

    <main class="content-adm">
        <h1>Artigos</h1>

        <div class="container">
            <div class="actions">
                <a href="<?= APP_CONSTANTS['APP_URL'] . APP_CONSTANTS['PATH_PAGES'] . 'admin/artigo.php' ?>">
                <button class="btn btn-primary"><span class="material-symbols-outlined">
                            add_circle
                        </span></button>
                </a>
            </div>

            <table class="table">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Categoria</td>
                        <td>Título</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($lista as $item) { ?>
                    <tr>
                        <td><?= $item['id'] ?></td>
                        <td><?= $item['categoria_id'] ?></td>
                        <td><?= $item['titulo'] ?></td>
                        <td class="table-actions">
                            <a
                                href="<?= APP_CONSTANTS['APP_URL'] . APP_CONSTANTS['PATH_PAGES'] . 'admin/artigo.php?id=' . $item['id'] ?>">
                                <span class="material-symbols-outlined">edit</span>
                            </a>
                            <form method="POST"
                                action="<?= APP_CONSTANTS['APP_URL'] . APP_CONSTANTS['PATH_PAGES'] . 'admin/artigo.php?id=' . $item['id'] ?>">
                                <span class="material-symbols-outlined">delete</span>
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