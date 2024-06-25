<?php

function baseURL(): string
{
    return (isset($_SERVER['HTTPS']) ? 'https' : 'http').'://'.$_SERVER['HTTP_HOST'].APP_URL_BASE;
}

function route($path = '', array $vars = []): string 
{
    $queryParams = count($vars) > 0 ? '?'.http_build_query($vars) : '';
    return baseURL().$path.$queryParams;
}

function redirect($path = '', array $vars = []): void
{
    http_response_code(301);
    header('Location: '.route($path, $vars));
}

function asset(string $dir): string 
{
    return baseURL().'/public/assets/'.$dir;
}

function controller(string $file): string
{
    return "app/controllers/{$file}.php";
}

function model(string $file): void
{
    require_once "app/models/{$file}.php";
}

function view(string $file, array $vars = []): void 
{
    ob_clean();

    foreach ($vars as $key => $value) {
        $$key = $value;
    }

    require_once "app/views/pages/{$file}.php";
}

function layout(string $file, array $vars = []): void 
{    
    foreach ($vars as $key => $value) {
        $$key = $value;
    }

    include_once "app/views/layouts/{$file}.php";
}

function error(string $code): void 
{
    ob_clean();
    
    http_response_code(intval($code));
    require_once "app/views/errors/{$code}.php";
}

function title(?string $page = null): string
{
    return !empty($page) ? $page.' | '.APP_NAME : APP_NAME;
}