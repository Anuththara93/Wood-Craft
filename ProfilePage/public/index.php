<?php

require_once '../app/config/database.php';
require_once '../app/controllers/HomeController.php';
require_once '../app/models/UserModel.php';

$userModel = new UserModel($pdo);
$controller = new HomeController($userModel);

$action = isset($_GET['action']) ? $_GET['action'] : 'index';

switch ($action) {
    case 'profile':
        $controller->profile();
        break;
    default:
        $controller->index();
        break;
}
?>
