<?php
// Bắt đầu phiên làm việc
session_start();
include '../includes/db.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../assets/css/reset.css">
  <link rel="stylesheet" href="../assets/font/fontawesome-free-6.6.0-web/css/all.min.css">
  <style>
    .container1 {
      width: 100%;
      max-width: 1000px;
      margin-left: auto;
      margin-right: auto;
      margin-top: 15px;
    }

    /* Body  */

    .product-container {
      display: flex;
      gap: 30px;
    }

    .right {
      width: 60%;
    }

    .product-image img {
      width: 500px;
      border: 1px solid #e0e0e0;
    }

    .left {
      width: 40%;
    }

    .product-details {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    .product-details h1 {
      font-size: 20px;
      color: #222;
      margin-bottom: 10px;
      line-height: 1.3;
      font-weight: 400;
    }

    .price {
      font-size: 24px;
      color: #000;
      font-weight: 700;
      margin: 10px 0;
    }

    .size-selection,
    .quantity-selection {
      display: flex;
      flex-direction: column;
      gap: 5px;
    }

    .size-selection label,
    .quantity-selection label {
      font-size: 14px;
      color: #333;
      font-weight: 400;
    }

    .size-selection a {
      color: #555;
      text-decoration: underline;
      font-size: 14px;
      padding-top: 5px;
    }

    .quantity-selection input {
      width: 60px;
      padding: 5px;
      font-size: 14px;
      text-align: center;
      border: 1px solid #e0e0e0;
      border-radius: 4px;
    }

    .buttons {
      display: flex;
      align-items: center;
      gap: 10px;
      margin-top: 20px;
    }

    .add-to-cart {
      background-color: #000;
      color: #fff;
      border: none;
      padding: 10px 20px;
      font-size: 14px;
      font-weight: bold;
      cursor: pointer;
    }

    .add-to-cart:hover {
      background-color: #333;
    }

    .wishlist {
      color: #000;
      border: 1px solid #000;
      padding: 10px;
      font-size: 18px;
      cursor: pointer;
    }

    .product-info {
      margin: 0 auto;
      padding: 20px;
      line-height: 1.6;
    }

    .product-info h2 {
      font-size: 1.8em;
      color: #333;
      margin-bottom: 15px;
      font-weight: 600;
    }

    .product-info p {
      font-size: 1em;
      color: #555;
      margin-bottom: 15px;
    }

    .product-info ul {
      padding-left: 20px;
    }

    .product-info ul li {
      margin-bottom: 10px;
    }

    .product-info b {
      color: #333;
      font-weight: 600;
    }

    /* LIST PRODUCT */
    .list-product {

      display: flex;
      justify-content: center;
      align-items: center;
      margin-top: 30px;
    }

    .recommended-products {
      text-align: center;
    }

    .recommended-products h2 {
      margin-bottom: 20px;
      font-weight: bold;
      font-size: 22px;
    }

    .product-carousel {
      display: flex;
      align-items: center;
    }

    .product-list {
      display: flex;
      gap: 20px;
    }

    .product-item {
      min-width: 200px;
      padding: 10px;
      text-align: center;
    }

    .product-item:hover {
      transform: scale(1.05);
      /* phóng to 5% */
    }

    .product-item img {
      width: 100%;
      border-bottom: 1px solid #ddd;
      margin-bottom: 15px;
    }

    .product-item p {
      font-size: 14px;
      color: #333;
      margin-bottom: 10px;
    }

    .product-item span {
      font-weight: bold;
      color: #000;
    }

    /* End Body */
  </style>
</head>

<body>
  <!-- Header -->
  <?php include("../includes/header.php"); ?>
  <!-- End header -->

  <div class="container1">
    <!-- <div class="breadcrumb">
          <a href="#">Trang Chủ</a> /
          <a href="#">Converse Men's Collection</a> /
          <a href="#">Men's Converse Shoes</a> / <a href="#">Chuck 70</a> / Giày
          Thể Thao Converse X CDG Chuck 70 Unisex's - Black/Red/Egret
        </div> -->
    <?php
    if (!empty($_GET['id'])) {
      $id = $_GET['id']; // Lấy ID từ URL
      // Sửa lại truy vấn SQL để sử dụng ProductId thay vì id
      $sql = "SELECT * FROM `products` WHERE ProductId='$id';";

      $result = mysqli_query($conn, $sql);

      // Kiểm tra nếu truy vấn trả về kết quả
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
          // Hiển thị thông tin sản phẩm
    ?>
          <div class="product-container">
            <!-- RIGHT -->
            <div class="right">
              <div class="product-image">
                <img src="<?php echo $row['image_url']; ?>" alt="Product Image" />

              </div>
              <div class="product-info">
                <h2><?php echo htmlspecialchars($row['ProductName']); ?></h2>
                <p><?php echo htmlspecialchars($row['Description']); ?></p>
              </div>
            </div>

            <!-- LEFT -->
            <div class="left">
              <div class="product-details">
                <h1><?php echo htmlspecialchars($row['ProductName']); ?></h1>
                <p class="price">$<?php echo htmlspecialchars($row['Price']); ?></p>

                <div class="size-selection">
                  <label>Size</label>
                  <a href="size.php">Chọn kích thước của bạn</a>
                </div>

                <div class="quantity-selection">
                  <label for="quantity">Số Lượng</label>
                  <input type="number" id="quantity" value="1" min="1" />
                </div>

                <div class="buttons">
                  <button class="add-to-cart">Thêm Vào Giỏ Hàng</button>
                  <button class="wishlist">♡</button>
                </div>
              </div>
            </div>
          </div>
    <?php
        }
      } else {
        echo "Sản phẩm không tồn tại.";
      }
    } else {
      echo "ID sản phẩm không hợp lệ.";
    }
    ?>
    <hr />

    <!-- LIST PRODUCT -->
    <div class="list-product">
      <section class="recommended-products">
        <h2>Recommended products</h2>
        <div class="product-carousel">

          <div class="product-list">
            <div class="product-item">
              <img
                src="../assets/img/product/product1.webp"
                alt="Product 1" />
              <p>
                Sản phẩm 1
              </p>
              <span>$100.00</span>
            </div>
            <div class="product-item">
              <img
                src="../assets/img/product/product2.webp"
                alt="Product 2" />
              <p>
                Sản phẩm 2
              </p>
              <span>$20.00</span>
            </div>
            <div class="product-item">
              <img
                src="../assets/img/product/product3.webp"
                alt="Product 3" />
              <p>
                Sản phẩm 3
              </p>
              <span>$15.00</span>
            </div>
            <div class="product-item">
              <img
                src="../assets/img/product/product4.webp"
                alt="Product 4" />
              <p>
                Sản phẩm 4
              </p>
              <span>$25.00</span>
            </div>
            <div class="product-item">
              <img
                src="../assets/img/product/product5.webp"
                alt="Product 5" />
              <p>
                Sản phẩm 5
              </p>
              <span>$120.00</span>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
  <?php
  include '../includes/footer.php';
  ?>