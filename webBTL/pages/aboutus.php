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
  <link rel="stylesheet" href="../assets/css/reset.css">
  <style>
    .container1 {
      width: 100%;
      max-width: 1200px;
      margin-left: auto;
      margin-right: auto;
      margin-top: 15px;
    }

    /* BODY  */
    .body_main {
      display: flex;
      gap: 40px;
      align-items: center;
      justify-content: space-between;
    }

    .content {
      width: 55%;
      color: #333;
    }

    .content p {
      margin-bottom: 20px;
      font-size: 17px;
      color: #444;
      text-align: justify;
      /* căn, tạo cạnh đều ở 2 bên */
    }

    .images {
      width: 45%;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .images img {
      max-width: 100%;
      height: auto;
      border-radius: 8px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    }

    .title {
      font-size: 28px;
      font-weight: bold;
      color: #222;
      text-align: center;
      margin-bottom: 20px;
    }

    /* END BODY */
  </style>
  <link rel="stylesheet" href="../assets/css/styles.css">
  <link rel="stylesheet" href="../assets/font/fontawesome-free-6.6.0-web/css/all.min.css">
</head>

<body>
  <!-- Header -->
  <?php include("../includes/header.php"); ?>
  <!-- End header -->

  <!-- Body  -->
  <div class="body">
    <div class="container1">

      <div class="body_main">
        <div class="content">
          <h2 class="title">VỀ TRADEMARK</h2>
          <p>
            Chào mừng bạn đến với hệ thống quản lý bán hàng – nơi mọi sản phẩm không chỉ là một món hàng, mà còn là sự kết nối giữa thương hiệu, người bán và khách hàng. Được phát triển từ năm 2023, nền tảng của chúng tôi hướng tới việc hiện đại hóa quy trình kinh doanh và tạo điều kiện cho mọi cửa hàng thời trang, từ nhỏ lẻ đến quy mô lớn.
          </p>
          <p>
            Đây là nơi các cửa hàng thời trang có thể dễ dàng quản lý sản phẩm quần áo, giày dép và phụ kiện của mình, đồng thời tiếp cận đến khách hàng một cách nhanh chóng và hiệu quả. Giao diện thân thiện, tính năng thông minh, và khả năng tùy chỉnh linh hoạt giúp người dùng tiết kiệm thời gian, tối ưu hoạt động kinh doanh.
          </p>
          <p>
            Chúng tôi xây dựng hệ thống với định hướng hỗ trợ các doanh nghiệp nhỏ phát triển, đồng thời mang lại trải nghiệm mua sắm tiện lợi, minh bạch và hiện đại cho khách hàng. Tại đây, sự sáng tạo trong thiết kế, chất lượng sản phẩm và tính cá nhân hóa luôn được đặt lên hàng đầu.
          </p>
          <p>
            Hệ thống quản lý bán hàng không chỉ là công cụ – mà là đối tác đồng hành cùng bạn trên hành trình phát triển kinh doanh bền vững.
          </p>
        </div>
        <div class="images">
          <img src="../assets/img/about2.jpg">
        </div>
      </div>

    </div>
  </div>

  <!-- End Body -->
  <?php
  include '../includes/footer.php';
  ?>