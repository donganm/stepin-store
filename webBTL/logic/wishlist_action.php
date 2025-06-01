<?php
session_start();
include '../includes/db.php';

// Kiểm tra đăng nhập
if (!isset($_SESSION['UserId'])) {
    echo json_encode(['status' => 'error', 'message' => 'Bạn cần đăng nhập để sử dụng chức năng này']);
    exit;
}

$UserId = $_SESSION['UserId'];
$ProductId = isset($_POST['ProductId']) ? intval($_POST['ProductId']) : 0;

if ($ProductId <= 0) {
    echo json_encode(['status' => 'error', 'message' => 'ID sản phẩm không hợp lệ']);
    exit;
}

// Kiểm tra xem sản phẩm đã có trong wishlist chưa
$sql_check = "SELECT * FROM wishlist WHERE UserId = $UserId AND ProductId = $ProductId";
$result_check = mysqli_query($conn, $sql_check);

if (mysqli_num_rows($result_check) > 0) {
    // Nếu có rồi thì xóa (tức bỏ thích)
    $sql_delete = "DELETE FROM wishlist WHERE UserId = $UserId AND ProductId = $ProductId";
    if (mysqli_query($conn, $sql_delete)) {
        echo json_encode(['status' => 'removed']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Lỗi khi bỏ thích sản phẩm']);
    }
} else {
    // Nếu chưa có thì thêm vào
    $sql_insert = "INSERT INTO wishlist (UserId, ProductId) VALUES ($UserId, $ProductId)";
    if (mysqli_query($conn, $sql_insert)) {
        echo json_encode(['status' => 'added']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Lỗi khi thêm sản phẩm yêu thích']);
    }
}
