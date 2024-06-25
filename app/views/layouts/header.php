<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= title($title); ?></title>
    <link rel="stylesheet" href="<?= asset('css/style.css') ?>">
    <script src="<?= asset('js/script.js') ?>"></script>
</head>
<body>
    <header>
        <div>
            <h1><?= APP_NAME ?></h1>
            <span><i><?= APP_DESCRIPTION ?></i></span>
        </div>

        <ul>
            <li>
                <a href="<?= route('/') ?>">Início</a>
            </li>
            
            <?php if (isset($_SESSION['auth'])): ?>
                <li>
                    <a href="<?= route('/produtos') ?>">Produtos</a>
                </li>
                <li>
                    <a href="<?= route('/compras') ?>">Compras</a>
                </li>
                <li>
                    <a href="<?= route('/clientes') ?>">Clientes</a>
                </li>
                <li>
                    <a href="<?= route('/logout') ?>">Logout</a>
                </li>
            <?php else: ?>
                <li>
                    <a href="<?= route('/login') ?>">Login</a>
                </li>
            <?php endif ?>
        </ul>
    </header>
    <main>