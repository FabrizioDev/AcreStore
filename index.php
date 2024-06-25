<?php

require_once 'config/app.php';
require_once 'base/system.php';
require_once 'base/connection.php';
require_once 'routes/web.php';

ob_start();

$path = $_SERVER['PATH_INFO'] ?? '/';

if (isset(WEB_ROUTES[$path])) {
    session_start();

    if (WEB_ROUTES[$path]['public'] == true || isset($_SESSION['auth'])) {
        require_once WEB_ROUTES[$path]['file'];
    } else {
        redirect('/login');
    }
    
    session_write_close();
} else {
    error('404');
}

ob_end_flush();