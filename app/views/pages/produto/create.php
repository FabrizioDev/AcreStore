<?php layout('header', ['title' => 'Cadastrar Produto']); ?>

<div class="row-flex">
    <h2>Cadastrar Produto</h2>
</div>

<?php if (isset($_GET['success'])): ?>
    <div class="alert alert-success">
        <?= $_GET['success'] ?>
    </div>
<?php elseif (isset($_GET['error'])): ?>
    <div class="alert alert-error">
        <?= $_GET['error'] ?>
    </div>
<?php endif; ?>

<div class="card-content">
    <form action="" method="POST" enctype="multipart/form-data">
        <div>
            <label for="titulo">Título</label>
            <input type="text" name="titulo" id="titulo" required>
        </div>

        <div>
            <label for="valor">Valor</label>
            <input type="number" name="valor" id="valor" step="1" required>
        </div>

        <div>
            <label for="quantidade">Quantidade</label>
            <input type="number" name="quantidade" id="quantidade" step="1" required>
        </div>

        <div>
            <label for="imagem">Imagem</label>
            <input type="file" name="imagem" id="imagem" accept="image/*" required>
        </div>

        <div>
            <label for="descricao">Descrição</label>
            <textarea name="descricao" id="descricao" rows="6" required></textarea>
        </div>

        <button type="submit" class="btn btn-blue">
            Salvar
        </button>

        <a href="<?= route('/produtos') ?>" class="btn btn-outline-blue">
            Voltar
        </a>
    </form>
</div>

<?php layout('footer'); ?>