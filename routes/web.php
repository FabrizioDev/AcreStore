<?php

define('WEB_ROUTES', [
    '/' => [
        'file' => controller('home/indexController'),
        'public' => true
    ],
    '/login' => [
        'file' => controller('auth/loginController'),
        'public' => true
    ],
    '/logout' => [
        'file' => controller('auth/logoutController'),
        'public' => false
    ],
    '/produtos' => [
        'file' => controller('produto/indexController'),
        'public' => false
    ],
    '/produto/cadastrar' => [
        'file' => controller('produto/createController'),
        'public' => false
    ],
    '/produto/editar' => [
        'file' => controller('produto/editController'),
        'public' => false
    ],
    '/produto/excluir' => [
        'file' => controller('produto/deleteController'),
        'public' => false
    ],
]);