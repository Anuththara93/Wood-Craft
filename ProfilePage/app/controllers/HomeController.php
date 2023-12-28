<?php

require_once '../app/models/UserModel.php';

class HomeController {
    private $userModel;

    public function __construct(UserModel $userModel) {
        $this->userModel = $userModel;
    }

    public function index() {
        header("Location: index.php?action=profile");
        exit;
    }

    public function profile() {
        
        $userId = 1;
        $userData = $this->userModel->getUserById($userId);

        include '../app/views/profile_page.php';
    }
}
?>