<?php
require_once '../app/Core/Controller.php';
require_once '../app/Models/User.php';
class HomeController extends Controller {
    public function index() {
        $userModel = new User();
        $users = $userModel->getAllUsers();
        $this->view('home', ['users' => $users]);
    }
}


