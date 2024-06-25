<?php 

model('ProdutoModel');

$idProduto = $_GET['id'];
$produtoModel = new ProdutoModel();

$produto = $produtoModel->get($idProduto);

unlink($_SERVER['DOCUMENT_ROOT'].APP_URL_BASE.$produto->imagem);

$result = $produtoModel->delete($idProduto);

if ($result) {
    redirect('/produtos', ['success' => 'Exclusão realizada com sucesso!']);
} else {
    redirect('/produtos', ['error' => 'Ocorreu um erro ao excluir!']);
}