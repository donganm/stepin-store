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
          <h2 class="title">ABOUT TRADEMARK</h2>
          <p>
            Welcome to Trademark, where every step begins a journey, and every design tells a story. Founded in 2023, Trademark is more than just a shoe store - it’s a platform that connects creators, sellers, and buyers in a shared passion for footwear.
          </p>
          <p></p>
          <p>
            We are a community-driven marketplace where independent sellers can showcase their unique designs, and customers can discover shoes that reflect their individuality. At Trademark, creativity knows no bounds. Our platform welcomes all styles and celebrates diversity, offering a curated collection of footwear for every gender and every walk of life.
          </p>
          <p></p>
          <p>
            Built on a foundation of innovation and collaboration, Trademark thrives on empowering small businesses while maintaining ethical practices and high-quality standards. Here, comfort, style, and self-expression merge seamlessly to create a space where every seller’s vision can shine and every customer can find their perfect fit.
          </p>
          <p></p>
          <p>
            At Trademark, it’s not just about shoes - it’s about stepping into a world of possibilities.
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