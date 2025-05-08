<?php
// Bắt đầu phiên làm việc
session_start();
include '../includes/db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
    integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="../assets/css/order_succes.css" />
  <style>
    html,
    body,
    div,
    ol,
    ul,
    li,
    footer,
    header,
    menu {
      margin: 0;
      padding: 0;
      border: 0;
      font-size: 62.5%;
      font: inherit;
      vertical-align: baseline;
    }

    ol,
    ul {
      list-style: none;
    }
  </style>
</head>

<body>
  <!-- Header -->
  <?php include("../includes/header.php"); ?>
  <!-- End header -->
  <!-- Body  -->
  <div class="container1">
    <div class="order-success">
      <div class="success-icon">
        <div class="circle">
          <div class="checkmark">&#10004;</div>
        </div>
        <h2>ĐẶT HÀNG THÀNH CÔNG</h2>
        <p>Chúng tôi sẽ liên hệ lại trong thời gian sớm nhất</p>
      </div>
    </div>

    <div class="order-info">
      <div class="info-section">
        <h3>Thông tin đặt hàng</h3>
        <p class="delivery-method">Giao tận nơi</p>
        <p>Dong Anh</p>
        <p>Hoàng Công Chất, Cầu Diễn, Hà Nội</p>
        <p>Quận Nam Từ Liêm/Phường Cầu Diễn, Hà Nội</p>
        <p>Việt Nam</p>
        <p>Điện thoại: 0123456789</p>
      </div>

      <div class="order-details">
        <h3>Đơn hàng <span class="order-id">DH123456789</span></h3>
        <ul>
          <li>1 x Chuck Taylor All Star Lift - 1.200.000đ</li>
        </ul>
        <div class="cost-summary">
          <p>Tiền hàng: 1.200.000đ</p>
          <p>Phí dịch vụ: 0đ</p>
          <p>Phí giao hàng: 0đ</p>
          <p class="total">Tổng thanh toán: 1.200.000đ</p>
          <p class="payment-method">Hình thức thanh toán: Tiền mặt</p>
        </div>
        <button class="check-order">TRA CỨU ĐƠN HÀNG</button>
        <button class="home-page">VỀ TRANG CHỦ</button>
      </div>
    </div>
  </div>
  <!-- End Body -->
  <?php
  include '../includes/footer.php';
  ?>
</body>

</html>