<?php
// controllers/OrderController.php
include_once __DIR__ . '/../models/OrderModel.php';
class OrderController {
    public static function index() {
        return OrderModel::getAllOrders();
    }
}
