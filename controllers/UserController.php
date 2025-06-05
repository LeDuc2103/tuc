<?php
// controllers/UserController.php
include_once __DIR__ . '/../models/UserModel.php';
class UserController {
    public static function index() {
        return UserModel::getAllUsers();
    }
}
