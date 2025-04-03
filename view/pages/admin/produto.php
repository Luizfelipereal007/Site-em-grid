<?php
    require_once __DIR__ . '/../../../config/env.php';
    require_once __DIR__ . '/../../../model/ProdutoModel.php';
    require_once __DIR__ . '/../../../model/CategoriaModel.php';

    $categoriaModel = new CategoriaModel();
    $categorias = $categoriaModel->listar();

    // modo edição ou criação
    if (isset($_GET['id'])) {
        $modo = 'EDICAO';
        $produtoModel = new ProdutoModel();
        $produto = $produtoModel->buscarPorId((int) $_GET['id']);
    } else {
        $modo = 'CRIACAO';
        $produto = [
            'id'=> '',
            'nome'=> '',
            'descricao'=> '',
            'categoria_id'=> '',
            'preco'=> '',
            'imagem_url'=> '',
        ];
    }

?>

<?php require_once __DIR__ . '/../../components/head.php'; ?>

<head>
    <link rel="stylesheet" href="<?= APP_CONSTANTS['APP_URL'] . APP_CONSTANTS['PATH_CSS'] ?>components/produto.css">
</head>
<body class="container-adm">
    <?php require_once __DIR__ . '/../../components/navbar.php'; ?>
    <?php require_once __DIR__ . '/../../components/sidebar.php'; ?>
    <?php require_once __DIR__ . '/../../assets/css/components/produto.css'; ?>
    
    <main class="content-adm">
        <h1><?= $modo == 'EDICAO' ? 'Produto ID: ' . $produto['id'] : 'Criar Produto' ?></h1>

        <div class="container">
            <form class="form produto-form" method="POST" action="<?= APP_CONSTANTS['APP_URL'] . APP_CONSTANTS['PATH_PAGES'] . 'admin/produto_salvar.php' ?>">
                <div class="form-content">
                    <div class="produto-form-grid">
                        <div class="produto-form-campos">
                            <input type="hidden" name="id" value="<?= $produto['id'] ?>">

                            <div class="input-group">
                                <label for="nome">Nome</label>
                                <input name="nome" type="text" value="<?= $produto['nome'] ?>" required>
                            </div>

                            <div class="input-group">
                                <label for="descricao">Descrição</label>
                                <textarea name="descricao" rows="4"><?= $produto['descricao'] ?></textarea>
                            </div>

                            <div class="input-group">
                                <label for="categoria_id">Categoria</label>
                                <select name="categoria_id" required>
                                    <option value=""></option>
                                    <?php foreach ($categorias as $categoria) { ?>
                                    <option value="<?= $categoria['id'] ?>"
                                        <?= $produto['categoria_id'] == $categoria['id'] ? 'selected' : '' ?>>
                                        <?= $categoria['nome'] ?>
                                    </option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="input-group">
                                <label for="preco">Preço</label>
                                <input name="preco" type="number" step="0.01" min="0" value="<?= $produto['preco'] ?>" required>
                            </div>

                            <div class="input-group">
                                <label for="imagem_url">URL da Imagem</label>
                                <input name="imagem_url" type="text" value="<?= $produto['imagem_url'] ?>" required>
                            </div>
                        </div>

                        <div class="produto-form-preview">
                            <?php if (!empty($produto['imagem_url'])) { ?>
                                <div class="imagem-preview-container">
                                    <h3>Pré-visualização</h3>
                                    <div class="imagem-preview">
                                        <img src="<?= $produto['imagem_url'] ?>" alt="Pré-visualização do produto">
                                    </div>
                                    <div class="produto-preview-info">
                                        <h4><?= $produto['nome'] ? $produto['nome'] : 'Nome do Produto' ?></h4>
                                        <p class="produto-preview-descricao"><?= $produto['descricao'] ? $produto['descricao'] : 'Descrição do produto' ?></p>
                                        <p class="produto-preview-preco">R$ <?= $produto['preco'] ? number_format($produto['preco'], 2, ',', '.') : '0,00' ?></p>
                                    </div>
                                </div>
                            <?php } else { ?>
                                <div class="imagem-preview-container imagem-placeholder">
                                    <h3>Pré-visualização</h3>
                                    <div class="imagem-preview">
                                        <div class="no-image">Sem imagem</div>
                                    </div>
                                    <div class="produto-preview-info">
                                        <h4>Nome do Produto</h4>
                                        <p class="produto-preview-descricao">Descrição do produto</p>
                                        <p class="produto-preview-preco">R$ 0,00</p>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <div class="form-actions">
                    <a href="<?= APP_CONSTANTS['APP_URL'] . APP_CONSTANTS['PATH_PAGES'] . 'admin/produtos.php' ?>">
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
    <script src="<?= APP_CONSTANTS['APP_URL'] . APP_CONSTANTS['PATH_JS'] ?>produto.js"></script>
</body>

</html>