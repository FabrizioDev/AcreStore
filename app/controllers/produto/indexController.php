<?php

model('ProdutoModel');

$produtoModel = new ProdutoModel();

view('produto/index', [
    'produtos' => $produtoModel->all()
]);