<?php
session_start();
include '../includes/db.php';

header('Content-Type: application/json');

if (!isset($_SESSION['UserId'])) {
    echo json_encode(['is_wishlist' => false]);
    exit;
}

$UserId = $_SESSION['UserId'];
$ProductId = isset($_GET['ProductId']) ? intval($_GET['ProductId']) : 0;

if ($ProductId <= 0) {
    echo json_encode(['is_wishlist' => false]);
    exit;
}

$sql = "SELECT * FROM wishlist WHERE UserId = $UserId AND ProductId = $ProductId";
$result = mysqli_query($conn, $sql);

echo json_encode(['is_wishlist' => mysqli_num_rows($result) > 0]);
