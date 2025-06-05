<?php
// controllers/TourController.php
include_once __DIR__ . '/../models/TourModel.php';
class TourController {
    public static function index() {
        return TourModel::getAllTours();
    }
}
