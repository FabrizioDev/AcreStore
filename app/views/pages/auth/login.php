<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= title('Login') ?></title>
    <link rel="stylesheet" href="<?= asset('css/style.css') ?>">
</head>
<body>
    <main>
        <h3>Login</h3>

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
            <form action="" method="POST">
                <div>
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email" required>
                </div>

                <div>
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha" required>
                </div>

                <button type="submit" class="btn btn-blue">
                    Logar
                </button>

                <a href="<?= route('/') ?>" class="btn btn-outline-blue">
                    Voltar
                </a>
            </form>
        </div>
    </main>
</body>
</html>