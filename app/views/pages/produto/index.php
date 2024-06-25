<?php layout('header', ['title' => 'Produtos']); ?>

<div class="row-flex">
    <h2>Produtos</h2>

    <a href="<?= route('/produto/cadastrar') ?>" class="btn btn-blue">
        Adicionar
    </a>
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

<table>
    <thead>
        <tr>
            <th>Título</th>
            <th>Valor</th>
            <th>Quantidade</th>
            <th>Descrição</th>
            <th>Imagem</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($produtos->data as $produto): ?>
            <tr>
                <td><?= $produto->titulo ?></td>
                <td><?= number_format($produto->valor, 2, ',', '.') ?></td>
                <td><?= $produto->quantidade ?></td>
                <td><?= $produto->descricao ?></td>
                <td>
                    <img 
                        src="<?= baseURL().$produto->imagem ?>" 
                        style="width: 150px; height: auto;"
                    >
                </td>
                <td>
                    <div class="row-flex">
                        <a href="<?= route('/produto/editar', ['id' => $produto->id]) ?>" class="btn btn-outline-blue">
                            Editar
                        </a>

                        <a href="<?= route('/produto/excluir', ['id' => $produto->id]) ?>" class="btn btn-outline-red">
                            Excluir
                        </a>
                    </div>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<?php layout('footer'); ?>