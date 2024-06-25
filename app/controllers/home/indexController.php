<?php 

model('ProdutoModel');

$pesquisa = $_GET['pesquisa'] ?? '';

$produtoModel = new ProdutoModel();
$produtos = $produtoModel->search($pesquisa);

view('home/index', [
    'produtos' => $produtos,
    'pesquisa' => $pesquisa
]);