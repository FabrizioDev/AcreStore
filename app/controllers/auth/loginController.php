<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    model('AuthModel');

    $authModel = new AuthModel();

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $auth = $authModel->login($email, hash('sha256', $senha));

    if ($auth !== false) {
        $_SESSION['auth'] = [
            'id' => $auth->id,
            'nome' => $auth->nome,
            'email' => $auth->email,
            'cpf' => $auth->cpf
        ];

        redirect('/');
    } else {
        redirect('/login', ['error' => 'Credenciais não foram encontradas!']);
    }
} else {
    view('auth/login');
}