<?php
require_once __DIR__ . '/../../../config/env.php';
require_once __DIR__ . '/../../../model/ProdutoModel.php';

$produtoModel = new ProdutoModel();
$lista = $produtoModel->listar();
?>

<?php require_once __DIR__ . '/../../components/head.php'; ?>

<head>
    <link rel="stylesheet" href="<?= APP_CONSTANTS['APP_URL'] . APP_CONSTANTS['PATH_CSS'] ?>components/produtos.css">
</head>
<body class="container-adm">
    <?php require_once __DIR__ . '/../../components/navbar.php'; ?>
    <?php require_once __DIR__ . '/../../components/sidebar.php'; ?>
    
    <main class="content-adm">
        <h1>Produtos</h1>

        <div class="container">
            <div class="actions">
                <a href="<?= APP_CONSTANTS['APP_URL'] . APP_CONSTANTS['PATH_PAGES'] . 'admin/produto.php' ?>">
                    <button class="btn btn-primary"><span class="material-symbols-outlined">
                            add_circle
                        </span></button>
                </a>
            </div>

            <div class="produtos-grid">
                <?php foreach ($lista as $item) { ?>
                    <div class="produto-card">
                        <div class="produto-imagem">
                            <img src="<?= $item['imagem_url'] ?>" alt="<?= $item['nome'] ?>">
                        </div>
                        <div class="produto-info">
                            <h3><?= $item['nome'] ?></h3>
                            <p class="produto-descricao"><?= $item['descricao'] ?></p>
                            <p class="produto-preco">R$ <?= number_format($item['preco'], 2, ',', '.') ?></p>
                        </div>
                        <div class="produto-acoes">
                            <a href="<?= APP_CONSTANTS['APP_URL'] . APP_CONSTANTS['PATH_PAGES'] . 'admin/produto.php?id=' . $item['id'] ?>">
                                <button class="btn">Editar</button>
                            </a>
                            <form id="delete-form-<?= $item['id'] ?>" method="POST"
                                action="<?= APP_CONSTANTS['APP_URL'] . APP_CONSTANTS['PATH_PAGES'] . 'admin/produto_excluir.php' ?>">
                                <input type="hidden" name="id" value="<?= $item['id'] ?>">
                                <span class="material-symbols-outlined" onclick="document.getElementById('delete-form-<?= $item['id'] ?>').submit();">
                                    delete
                                </span>
                            </form>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </main>

    <?php require_once __DIR__ . '/../../components/footer.php'; ?>

    <script src="<?= APP_CONSTANTS['APP_URL'] . APP_CONSTANTS['PATH_JS'] ?>main.js"></script>

</body>

</html>