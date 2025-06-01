<?php
session_start();
include '../includes/db.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../includes/PHPMailer/src/Exception.php';
require '../includes/PHPMailer/src/PHPMailer.php';
require '../includes/PHPMailer/src/SMTP.php';

// Kiểm tra đăng nhập
if (!isset($_SESSION['UserId'])) {
    header("Location: ../pages/login.php");
    exit();
}

$UserId = $_SESSION['UserId'];
$orderCode = null;

// Lấy dữ liệu giỏ hàng từ CSDL theo UserId
$cartQuery = $conn->prepare("SELECT c.ProductId, c.quantity, p.name, p.price, p.image 
                             FROM cart c 
                             JOIN products p ON c.ProductId = p.id 
                             WHERE c.UserId = ?");
$cartQuery->bind_param("i", $UserId);
$cartQuery->execute();
$cartResult = $cartQuery->get_result();

$cartItems = [];
$totalAmount = 0;

while ($row = $cartResult->fetch_assoc()) {
    $row['subtotal'] = $row['price'] * $row['quantity'];
    $totalAmount += $row['subtotal'];
    $cartItems[] = $row;
}

// Nếu giỏ hàng rỗng
if (empty($cartItems)) {
    header("Location: cart.php");
    exit();
}

// Xử lý khi người dùng nhấn Đặt hàng
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $address = $_POST['address'] ?? '';

    if (empty($name) || empty($phone) || empty($address)) {
        $error = "Vui lòng nhập đầy đủ thông tin.";
    } else {
        // Lưu vào bảng orders
        $stmt = $conn->prepare("INSERT INTO orders (customer_name, phone, address, total, UserId) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssdi", $name, $phone, $address, $totalAmount, $UserId);
        $stmt->execute();
        $orderId = $stmt->insert_id;
        $orderCode = 'DH' . str_pad($orderId, 6, '0', STR_PAD_LEFT);

        // Lưu vào bảng order_items
        $stmt_item = $conn->prepare("INSERT INTO order_items (order_id, product_name, quantity, price, image) VALUES (?, ?, ?, ?, ?)");
        foreach ($cartItems as $item) {
            $stmt_item->bind_param("isids", $orderId, $item['name'], $item['quantity'], $item['price'], $item['image']);
            $stmt_item->execute();
        }

        // Gửi email xác nhận
        try {
            $mail = new PHPMailer(true);
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'youremail@gmail.com';
            $mail->Password = 'yourpassword';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            $mail->setFrom('youremail@gmail.com', 'Shop');
            $mail->addAddress('customer@example.com'); // Có thể thay bằng email người dùng nếu có lưu

            $mail->isHTML(true);
            $mail->Subject = 'Xác nhận đơn hàng ' . $orderCode;
            $mail->Body = "Cảm ơn bạn đã đặt hàng!<br>Mã đơn: <strong>$orderCode</strong><br>Tổng tiền: $" . number_format($totalAmount, 2);

            $mail->send();
        } catch (Exception $e) {
            // Ghi log lỗi nếu cần
        }

        // Xóa giỏ hàng khỏi CSDL
        $deleteCart = $conn->prepare("DELETE FROM cart WHERE UserId = ?");
        $deleteCart->bind_param("i", $UserId);
        $deleteCart->execute();

        $success = "Đặt hàng thành công! Mã đơn của bạn là <strong>$orderCode</strong>.";
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Checkout</title>
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/font/fontawesome-free-6.6.0-web/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .checkout-container {
            max-width: 800px;
            margin: 0 auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }

        img {
            width: 80px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-top: 4px;
            box-sizing: border-box;
        }

        .btn {
            padding: 10px 20px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #218838;
        }

        .message {
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
        }

        .error {
            background-color: #f8d7da;
            color: #721c24;
        }

        .success {
            background-color: #d4edda;
            color: #155724;
        }
    </style>
</head>

<body>
    <?php include("../includes/header.php"); ?>

    <div class="checkout-container">
        <h2>Checkout</h2>

        <?php if (!empty($error)): ?>
            <div class="message error"><?= $error ?></div>
        <?php elseif (!empty($success)): ?>
            <div class="message success"><?= $success ?></div>
        <?php endif; ?>

        <?php if (empty($success)): ?>
            <table>
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Qty</th>
                        <th>Price</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($cartItems as $item): ?>
                        <tr>
                            <td><img src="<?= $item['image'] ?>" alt="<?= $item['name'] ?>"></td>
                            <td><?= $item['name'] ?></td>
                            <td><?= $item['quantity'] ?></td>
                            <td>$<?= number_format($item['price'], 2) ?></td>
                            <td>$<?= number_format($item['subtotal'], 2) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div class="total"><strong>Total:</strong> $<?= number_format($totalAmount, 2) ?></div>

            <form method="post">
                <div class="form-group">
                    <label for="name">Họ và tên:</label>
                    <input type="text" name="name" id="name" required>
                </div>

                <div class="form-group">
                    <label for="phone">Số điện thoại:</label>
                    <input type="text" name="phone" id="phone" required>
                </div>

                <div class="form-group">
                    <label for="address">Địa chỉ giao hàng:</label>
                    <input type="text" name="address" id="address" required>
                </div>

                <button type="submit" class="btn">Đặt hàng</button>
            </form>
        <?php endif; ?>
    </div>

    <?php include("../includes/footer.php"); ?>
</body>

</html>