<?php
require_once 'controllers/BarangController.php';
require_once 'controllers/UserController.php';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
$controller;
switch ($action) {
    case 'landing':
        $controller = new BarangController();
        $controller->landing();
        break;
    case 'about':
        $controller = new BarangController();
        $controller->about();
        break;
    case 'pesan':
        $controller = new BarangController();
        $controller->pesan();
        break;
    case 'register':
        $controller = new UserController();
        $controller->register();
        break;
    case 'login':
        $controller = new UserController();
        $controller->login();
        break;
    case 'logout':
        $controller = new UserController();
        $controller->logout();
        break;
    case 'search':
        $controller = new BarangController();
        $controller->index();
        break;
    default:
        $controller = new BarangController();
        $controller->index();
        break;
}
?>