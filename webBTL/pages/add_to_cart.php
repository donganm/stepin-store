<?php
session_start();
include '../includes/db.php';

if (isset($_GET['id'])) {
    $productId = $_GET['id'];

    // Lấy thông tin sản phẩm từ DB
    $sql = "SELECT * FROM products WHERE ProductId = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $productId);
    $stmt->execute();
    $result = $stmt->get_result();
    $product = $result->fetch_assoc();

    if ($product) {
        $item = [
            'id' => $product['ProductId'],
            'name' => $product['ProductName'],
            'price' => $product['Price'],
            'image' => $product['image_url'],
            'quantity' => 1
        ];

        // Nếu cart chưa tồn tại, tạo mới
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }

        // Nếu sản phẩm đã có trong cart, tăng số lượng
        if (isset($_SESSION['cart'][$productId])) {
            $_SESSION['cart'][$productId]['quantity'] += 1;
        } else {
            $_SESSION['cart'][$productId] = $item;
        }

        // Redirect trở lại product page
        header("Location: cart.php?added=success");
        exit();
    } else {
        echo "Product not found!";
    }
} else {
    echo "Invalid request!";
}
