<?php 

model('ProdutoModel');

$idProduto = $_GET['id'];
$produtoModel = new ProdutoModel();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = $_POST;
    $produto = $produtoModel->get($idProduto);

    if (isset($_FILES['imagem']) and $_FILES['imagem']['error'] == UPLOAD_ERR_OK) {
        $nameImage = hash('sha256', time()).'.'.pathinfo($_FILES['imagem']['name'], PATHINFO_EXTENSION);
        $directoryImage = 'public/images/'.$nameImage;

        $uploadResult = move_uploaded_file($_FILES['imagem']['tmp_name'], $directoryImage);

        if ($uploadResult) {
            $data['imagem'] = '/'.$directoryImage;
            unlink($_SERVER['DOCUMENT_ROOT'].APP_URL_BASE.$produto->imagem);
        } else {
            redirect('/produto/editar', ['id' => $idProduto, 'error' => 'Ocorreu um erro ao fazer o upload da imagem!']);
            exit;
        }
    } else {
        $data['imagem'] = $produto->imagem;
    }

    $result = $produtoModel->update($idProduto, $data);

    if ($result) {
        redirect('/produto/editar', ['id' => $idProduto, 'success' => 'Edição realizada com sucesso!']);
    } else {
        redirect('/produto/editar', ['id' => $idProduto, 'error' => 'Ocorreu um erro ao editar!']);
    }
} else {
    view('produto/edit', [
        'produto' => $produtoModel->get($idProduto)
    ]);
}