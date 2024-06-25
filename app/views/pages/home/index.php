<?php layout('header', ['title' => 'Início']); ?>

<form action="" method="GET" class="form-search">
    <div class="input-group">
        <label for="pesquisa">Pesquisa</label>
        <input type="text" name="pesquisa" id="pesquisa" value="<?= $pesquisa ?>">
    </div>

    <button type="submit" class="btn btn-blue">
        Pesquisar
    </button>
</form>

<div class="list-produto">
    <?php foreach ($produtos->data as $produto): ?>
        <div class="card-produto">
            <img src="<?= baseURL().$produto->imagem ?>" class="imagem">
            <div class="container">
                <div>
                    <h3 class="title"><?= $produto->titulo ?></h3>
                    <p class="price">R$ <?= number_format($produto->valor, 2, ',', '.') ?></p>
                    <p class="description"><?= $produto->descricao ?></p>
                </div>
            
                <div>
                    <a class="btn btn-purchase">
                        <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" fill="#000000" viewBox="0 0 256 256"><path d="M216,36H40A20,20,0,0,0,20,56V200a20,20,0,0,0,20,20H216a20,20,0,0,0,20-20V56A20,20,0,0,0,216,36Zm-4,160H44V60H212ZM76,88a12,12,0,0,1,24,0,28,28,0,0,0,56,0,12,12,0,0,1,24,0A52,52,0,0,1,76,88Z"></path></svg>
                        Compre agora!
                    </a>
                </div>
            </div>
        </div>
    <?php endforeach ?>
</div>

<?php layout('footer'); ?>