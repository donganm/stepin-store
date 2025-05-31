<?php
session_start();
include '../includes/db.php';

// Khởi tạo giỏ hàng nếu chưa có
if (!isset($_SESSION['cart'])) {
  $_SESSION['cart'] = [];
}

// Lấy ID sản phẩm từ URL để thêm vào giỏ
if (isset($_GET['id'])) {
  $productId = $_GET['id'];

  // Nếu sản phẩm đã có trong giỏ thì tăng số lượng
  if (isset($_SESSION['cart'][$productId])) {
    $_SESSION['cart'][$productId]['quantity'] += 1;
  } else {
    // Truy vấn thông tin sản phẩm từ CSDL
    $sql = "SELECT * FROM products WHERE ProductId = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $productId);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows > 0) {
      $product = $result->fetch_assoc();
      $_SESSION['cart'][$productId] = [
        'name' => $product['ProductName'],
        'price' => $product['Price'],
        'image' => $product['image_url'],
        'quantity' => 1
      ];
    }
  }

  // Chuyển hướng về trang giỏ hàng
  header("Location: cart.php");
  exit();
}

// Xử lý xóa sản phẩm khỏi giỏ
if (isset($_GET['remove'])) {
  $removeId = $_GET['remove'];
  unset($_SESSION['cart'][$removeId]);
  header("Location: cart.php");
  exit();
}

// Xử lý làm rỗng giỏ hàng
if (isset($_GET['clear']) && $_GET['clear'] == 1) {
  $_SESSION['cart'] = [];
  header("Location: cart.php");
  exit();
}
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
      padding: 20px;
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    .cart-container {
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

    .btn {
      padding: 8px 16px;
      background-color: #007bff;
      border: none;
      color: white;
      border-radius: 5px;
      cursor: pointer;
      text-decoration: none;
    }

    .btn:hover {
      background-color: #0056b3;
    }

    .total {
      text-align: right;
      font-size: 18px;
      font-weight: bold;
    }

    .actions {
      display: flex;
      justify-content: space-between;
    }
  </style>
</head>

<body>
  <?php include("../includes/header.php"); ?>

  <div class="cart-container">
    <h2>Your Cart</h2>

    <?php if (!empty($_SESSION['cart'])): ?>
      <table>
        <thead>
          <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Price</th>
            <th>Qty</th>
            <th>Total</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $totalAmount = 0;
          foreach ($_SESSION['cart'] as $id => $item):
            $subtotal = $item['price'] * $item['quantity'];
            $totalAmount += $subtotal;
          ?>
            <tr>
              <td><img src="<?= htmlspecialchars($item['image']) ?>" alt="<?= htmlspecialchars($item['name']) ?>"></td>
              <td><?= htmlspecialchars($item['name']) ?></td>
              <td>$<?= number_format($item['price'], 2) ?></td>
              <td><?= $item['quantity'] ?></td>
              <td>$<?= number_format($subtotal, 2) ?></td>
              <td><a href="cart.php?remove=<?= $id ?>" class="btn">Remove</a></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>

      <div class="total">Total: $<?= number_format($totalAmount, 2) ?></div>

      <div class="actions">
        <a href="cart.php?clear=1" class="btn">Clear Cart</a>
        <a href="checkout.php" class="btn">Checkout</a>
      </div>
    <?php else: ?>
      <p>Your cart is empty.</p>
    <?php endif; ?>
  </div>

  <?php include("../includes/footer.php"); ?>
</body>

</html>