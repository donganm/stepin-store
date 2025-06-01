<?php
session_start();
include '../includes/db.php';

// Kiểm tra đăng nhập
if (!isset($_SESSION['UserId'])) {
    header("Location: login.php");
    exit();
}

$UserId = $_SESSION['UserId'];

if (isset($_GET['id'])) {
    $productId = (int)$_GET['id'];

    // Lấy thông tin sản phẩm
    $sql = "SELECT * FROM products WHERE ProductId = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $productId);
    $stmt->execute();
    $result = $stmt->get_result();
    $product = $result->fetch_assoc();

    if ($product) {
        // Kiểm tra xem sản phẩm đã có trong giỏ chưa
        $checkSql = "SELECT * FROM cart WHERE UserId = ? AND ProductId = ?";
        $checkStmt = $conn->prepare($checkSql);
        $checkStmt->bind_param("ii", $UserId, $productId);
        $checkStmt->execute();
        $checkResult = $checkStmt->get_result();

        if ($checkResult->num_rows > 0) {
            // Nếu đã có, tăng số lượng
            $updateSql = "UPDATE cart SET quantity = quantity + 1 WHERE UserId = ? AND ProductId = ?";
            $updateStmt = $conn->prepare($updateSql);
            $updateStmt->bind_param("ii", $UserId, $productId);
            $updateStmt->execute();
        } else {
            // Nếu chưa có, thêm mới
            $insertSql = "INSERT INTO cart (UserId, ProductId, product_name, price, image_url, quantity)
                          VALUES (?, ?, ?, ?, ?, 1)";
            $insertStmt = $conn->prepare($insertSql);
            $insertStmt->bind_param("iisds", $UserId, $productId, $product['ProductName'], $product['Price'], $product['image_url']);
            $insertStmt->execute();
        }

        // Chuyển hướng lại trang giỏ hàng
        header("Location: cart.php?added=success");
        exit();
    } else {
        echo "Product not found!";
    }
} else {
    echo "Invalid request!";
}
