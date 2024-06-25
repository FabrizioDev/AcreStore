<?php 

model('ProdutoModel');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $produtoModel = new ProdutoModel();

    $data = $_POST;

    $nameImage = hash('sha256', time()).'.'.pathinfo($_FILES['imagem']['name'], PATHINFO_EXTENSION);
    $directoryImage = 'public/images/'.$nameImage;

    $uploadResult = move_uploaded_file($_FILES['imagem']['tmp_name'], $directoryImage);

    if ($uploadResult) {
        $data['imagem'] = '/'.$directoryImage;

        $idProduto = $produtoModel->create($data);

        if ($idProduto != -1) {
            redirect('/produto/cadastrar', ['success' => 'Cadastro realizado com sucesso!']);
        } else {
            redirect('/produto/cadastrar', ['error' => 'Ocorreu um erro ao cadastrar!']);
        }
    } else {
        redirect('/produto/cadastrar', ['error' => 'Ocorreu um erro ao fazer o upload da imagem!']);
    }
} else {
    view('produto/create');
}