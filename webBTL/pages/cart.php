<?php
session_start();
include '../includes/db.php';

// Kiểm tra đăng nhập
if (!isset($_SESSION['UserId'])) {
  header("Location: login.php");
  exit();
}

$UserId = $_SESSION['UserId'];

// Xử lý xóa từng sản phẩm
if (isset($_GET['remove'])) {
  $productId = (int)$_GET['remove'];
  $delStmt = $conn->prepare("DELETE FROM cart WHERE UserId = ? AND ProductId = ?");
  $delStmt->bind_param("ii", $UserId, $productId);
  $delStmt->execute();
  header("Location: cart.php");
  exit();
}

// Xử lý xóa toàn bộ
if (isset($_GET['clear']) && $_GET['clear'] == 1) {
  $clearStmt = $conn->prepare("DELETE FROM cart WHERE UserId = ?");
  $clearStmt->bind_param("i", $UserId);
  $clearStmt->execute();
  header("Location: cart.php");
  exit();
}

// Lấy danh sách giỏ hàng
$stmt = $conn->prepare("SELECT * FROM cart WHERE UserId = ?");
$stmt->bind_param("i", $UserId);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Your Cart</title>
  <link rel="stylesheet" href="../assets/css/reset.css">
  <link rel="stylesheet" href="../assets/font/fontawesome-free-6.6.0-web/css/all.min.css">
  <style>
    body {
      font-family: Arial, sans-serif;
    }

    h1 {
      text-align: center;
      margin-bottom: 30px;
      font-weight: bold;
      font-size: 30px;
    }

    .cart-container {
      max-width: 800px;
      margin: auto;
      margin-top: 30px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
    }

    th,
    td {
      border: 1px solid #ccc;
      padding: 12px;
      text-align: center;
    }

    img {
      width: 80px;
      height: auto;
    }

    .btn {
      padding: 8px 14px;
      background: #007bff;
      color: white;
      border: none;
      border-radius: 4px;
      text-decoration: none;
    }

    .btn:hover {
      background: #0056b3;
    }

    .total {
      text-align: right;
      font-size: 18px;
      font-weight: bold;
    }

    .actions {
      display: flex;
      justify-content: space-between;
      margin-top: 20px;
    }
  </style>
</head>

<body>

  <?php include("../includes/header.php"); ?>

  <div class="cart-container">
    <h1>Your Shopping Cart</h1>

    <?php if ($result->num_rows > 0): ?>
      <table>
        <thead>
          <tr>
            <th>Image</th>
            <th>Product</th>
            <th>Price</th>
            <th>Qty</th>
            <th>Subtotal</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $total = 0;
          while ($item = $result->fetch_assoc()):
            $subtotal = $item['price'] * $item['quantity'];
            $total += $subtotal;
          ?>
            <tr>
              <td><img src="<?= htmlspecialchars($item['image_url']) ?>" alt=""></td>
              <td><?= htmlspecialchars($item['product_name']) ?></td>
              <td>$<?= number_format($item['price'], 2) ?></td>
              <td><?= $item['quantity'] ?></td>
              <td>$<?= number_format($subtotal, 2) ?></td>
              <td><a class="btn" href="cart.php?remove=<?= $item['ProductId'] ?>">Remove</a></td>
            </tr>
          <?php endwhile; ?>
        </tbody>
      </table>

      <div class="total">Total: $<?= number_format($total, 2) ?></div>

      <div class="actions">
        <a href="cart.php?clear=1" class="btn">Clear Cart</a>
        <a href="checkout.php" class="btn">Proceed to Checkout</a>
      </div>

    <?php else: ?>
      <p>Your cart is empty.</p>
    <?php endif; ?>
  </div>

  <?php include("../includes/footer.php"); ?>
</body>

</html>