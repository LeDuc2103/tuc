<?php
// controllers/StatController.php
include_once __DIR__ . '/../models/StatModel.php';
class StatController {
    public static function index() {
        return StatModel::getStats();
    }
}
