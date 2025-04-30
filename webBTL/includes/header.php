<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/font/fontawesome-free-6.6.0-web/css/all.min.css">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
        }

        html {
            color: #333;
            /* font-size: 62.5%; */
            font-family: "Open Sans", sans-serif;
        }

        .ontop {
            display: flex;
            justify-content: space-between;
            background-color: #ebebeb;
            height: 20px;
        }

        .logovn {
            display: flex;
            align-items: center;
            font-size: 0.7rem;
        }

        .logovn i {
            padding: 5px 10px;

        }

        .ontop__des {
            display: flex;
            align-items: center;
            transform: translateX(60%);
            font-size: 0.7rem;
        }

        .ontop__des-upper {
            margin-right: 0.4rem;
            font-weight: bold;
        }

        .ontop__help {
            display: flex;
            align-items: center;
            font-size: 0.7rem;
        }

        .ontop__help-help,
        .ontop__help-track,
        .ontop_help-locator,
        .ontop__help-logo {
            display: flex;
            cursor: pointer;
        }

        .ontop__help-logo-text,
        .ontop__help-track-text,
        .ontop__help-help-text,
        .ontop__help-locator-text {
            margin: 0 10px;
        }


        .ontop__help-logo-text:hover,
        .ontop__help-track-text:hover,
        .ontop__help-help-text:hover,
        .ontop__help-locator-text:hover {
            border-bottom: 2px solid black;
        }

        .header__icon-link {
            text-decoration: none;
            text-transform: uppercase;
            font-weight: bold;
            color: #000;
            margin-left: 3rem;
            align-items: center;

        }

        .header {
            display: flex;
            justify-content: space-between;
            height: 3rem;
            background: #f8f6f6;
            align-items: center;
            /* Căn giữa theo chiều dọc */
            justify-content: space-between;
            position: sticky;
            right: 0;
            left: 0;
            top: 0;
            z-index: 1;

        }

        .header__nav-list {
            display: flex;
        }

        .header__nav-listitem {
            margin-right: 0.5rem;
            margin-left: 0.5rem;
            font-weight: bold;
            transition: opacity 0.3s ease;
            /* Thêm hiệu ứng chuyển cho border */
            line-height: 1.5;
            border-bottom: 2px solid transparent;
            padding-bottom: 5px;
        }

        .header__nav-listitem:hover {
            opacity: 1;

        }

        .header__nav-listitem a {
            text-decoration: none;
            color: black;
        }

        .container {
            width: 400px;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .container h2 {
            text-align: center;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .btn-group {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }

        .btn {
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            flex: 1;
            margin: 5px;
            text-align: center;

        }

        .btn-login {
            background-color: #4CAF50;
            color: white;
        }

        .btn-register {
            background-color: #007bff;
            color: white;
        }

        .btn-home {
            background-color: #f0ad4e;
            color: white;
        }

        .error-message {
            color: red;
            font-size: 14px;
            text-align: center;
        }

        .header__nav-listitem-title {
            font-weight: bold;
            margin: 3rem 6rem;
            font-size: 1.3rem;
            transform: translateX(-10000%);
        }


        .header__nav-listitem-title-child {
            /* font-weight: 100;
    margin: 1rem 0;
    font-size:0.9rem; */
            padding-top: 0.2rem;
        }

        .tong {
            font-weight: 100;
            margin: 1rem 0;
            font-size: 0.9rem;
        }

        .header__nav-listitem:hover {
            border-bottom: 2px solid black;
            cursor: pointer;
            padding-bottom: 5px;

        }

        .header__nav-listitem:hover .header__nav-listitem-oder {
            display: flex;
        }

        .header__nav-listitem:hover .header__nav-listitem-oder {
            /* color: aqua; */
            display: flex;
        }

        .header__nav-listitem:last-child {
            color: red;
        }


        .header__nav-listitem:hover .header__nav-listitem-oder {
            display: flex;
        }



        .header__search {
            display: flex;

        }

        .header__search-signin {
            display: flex;

        }

        /* .header__search-abc {
    margin: 0 10px;
} */

        .header__search-abc:first-child {
            display: flex;
        }

        .header__search-signin-des {
            padding: 0 10px;
            cursor: pointer;
        }

        .header__search-search-icon,
        .header__search-signin-icon,
        .header__search-heart-icon,
        .header__search-buy-icon,
        .header__search-signin-des {

            padding: 15px;
        }

        .header__search-buy-icon {
            position: relative;
        }



        .header__search-search-icon {
            color: white;
            background-color: #000;
        }

        .header__search-buy-icon,
        .header__search-search-icon:hover {
            cursor: pointer;
        }

        .img-animation-i {
            width: 100%;
            /* Chiếm toàn bộ chiều rộng màn hình */
            max-width: 1275px;
            /* Đảm bảo ảnh không vượt quá kích thước gốc */
            height: auto;
            /* Tự động điều chỉnh chiều cao theo tỉ lệ */
            margin: 0 auto;
            /* Canh giữa */
            display: block;
            /* Đảm bảo ảnh là một block-level element */
            cursor: pointer;
            /* Thêm hiệu ứng con trỏ */

        }


        .trendstyles {
            padding: 40px 100px;
        }

        .trendstyle {
            /* font-size: 30px; */
            padding-left: 20px;
            font-size: 36px;
        }

        .shop {
            padding-top: 20px;
            padding-left: 22px;
            display: flex;
            cursor: pointer;
        }

        .shop-des {
            padding-left: 10px;
            font-weight: bold;
        }

        .product {
            display: flex;
            margin: 0 100px;

            justify-content: space-between;
            align-items: center;

        }

        .products img {
            width: 100%;
            padding: 10px 10px;
            /* height: 100%;
    width: 25%;
    padding: 10px;
    object-fit: contain; */
        }

        .products:hover {
            /* background: rgba(0, 0, 0, 0.3); */
            filter: grayscale(100%);
        }

        .img-des img {
            margin-top: 10px;
        }

        .sex {
            display: flex;
            margin: 0 150px;
            justify-content: space-between;
            align-items: center;

        }

        .sex img {
            width: 100%;
            padding: 80px 10px;
        }

        .community {
            margin-left: 110px;
            font-weight: bold;
            font-size: 30px;
            margin-top: 100px;
        }

        .community-img {
            margin: 10px 100px;
            display: flex;
            cursor: pointer;

        }

        .community-img img {
            width: 100%;
        }

        .community-img_big {

            flex: 1;

        }

        .community-img_bing {
            flex: 1;

        }

        .community-img_middle {
            flex: 1;
        }

        .community-img_middle img {
            width: 100%;

        }

        .community-img_smaill {
            display: flex;
            flex: 1;
            transform: translateY(-0.65%);
        }

        .community-img_smaill img {
            width: 50%;
            height: auto;
        }


        .community-img_big:hover,
        .community-img_middle:hover,
        .abccc:hover,
        .abcdc:hover {
            filter: brightness(80%);
        }

        .explore {
            margin: 40px 100px;
            font-size: 30px;
            font-weight: bold;
        }

        .mailing {
            margin-top: 60px;
        }

        .explore-converse {
            display: flex;
            margin: 0 100px;
            justify-content: space-around;

        }

        .allMen,
        .allWomen,
        .allChild {
            display: flex;
            font-size: 20px;
            font-weight: bold;
            padding-bottom: 5px;
        }

        .allMen:hover,
        .allWomen:hover,
        .allChild:hover {
            border-bottom: 2px solid #000;
            cursor: pointer;
        }

        .scroll-top-btn {
            position: fixed;
            bottom: 20px;
            /* Cách đáy màn hình 20px */
            right: 20px;
            /* Cách phải màn hình 20px */
            display: none;
            /* Ban đầu ẩn nút */
            font-size: 20px;
            /* Kích thước của icon */
            background-color: #007bff;
            /* Màu nền xanh dương */
            color: white;
            /* Màu chữ trắng */
            border: none;
            /* Xóa đường viền */
            border-radius: 50%;
            /* Bo tròn nút */
            padding: 15px;
            /* Đệm trong nút */
            cursor: pointer;
            /* Con trỏ chuột */
            z-index: 1000;
            /* Nút luôn nổi trên các phần tử khác */
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3);
            /* Đổ bóng */
        }

        /* Reset & Font */
        footer {
            background-color: #1e1e1e;
            color: #ffffff;
            padding: 40px 20px 20px;
            margin-top: 60px;
        }

        .footer__container {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            max-width: 1200px;
            margin: auto;
            gap: 30px;
        }

        .footer__section {
            flex: 1 1 250px;
        }

        .footer__logo {
            font-size: 26px;
            color: #f8c146;
            margin-bottom: 10px;
        }

        .footer__description {
            font-size: 14px;
            line-height: 1.6;
        }

        .footer__title {
            font-size: 18px;
            margin-bottom: 10px;
            color: #f8c146;
        }

        .footer__links {
            list-style: none;
        }

        .footer__links li {
            margin-bottom: 8px;
        }

        .footer__links a {
            color: #fff;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer__links a:hover {
            color: #f8c146;
        }

        .footer__form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .footer__input {
            padding: 10px;
            border: none;
            border-radius: 4px;
            font-size: 14px;
            width: 100%;
        }

        .footer__button {
            padding: 10px;
            background-color: #f8c146;
            border: none;
            color: #000;
            font-weight: bold;
            cursor: pointer;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .footer__button:hover {
            background-color: #e0ab2f;
        }

        .footer__bottom {
            text-align: center;
            margin-top: 30px;
            font-size: 13px;
            border-top: 1px solid #444;
            padding-top: 15px;
            color: #ccc;
        }

        /* Responsive */
        @media screen and (max-width: 768px) {
            .footer__container {
                flex-direction: column;
                align-items: flex-start;
            }
        }
    </style>
</head>

<body>
    <div class="main">
        <div class="ontop">
            <div class="logovn">
                <i class="fa-solid fa-font-awesome logo__icon"></i>
                <div class="logovn__text">VN</div>
            </div>
            <div class="ontop__des">
                <div class="ontop__des-upper">Free Shipping!</div>
                <div class="ontop__des-lower">On All Orders</div>
            </div>
            <div class="ontop__help">
                <div class="ontop__help-logo">
                    <div class="ontop__help-logo-icon ">
                        <i class="fa-solid fa-font-awesome"></i>
                    </div>
                    <div class="ontop__help-logo-text ">VIETNAMESE</div>
                </div>
                <div class="ontop_help-locator">
                    <div class="ontop__help-locator-icon ">
                        <i class="fa-solid fa-location-dot "></i>
                    </div>
                    <div class="ontop__help-locator-text ">Store Locator</div>
                </div>
                <div class="ontop__help-track">
                    <div class="ontop__help-track-icon  ">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </div>
                    <div class="ontop__help-track-text ">Track Oder</div>
                </div>
                <div class="ontop__help-help">
                    <div class="ontop__help-help-icon a">
                        <i class="fa-solid fa-question"></i>
                    </div>
                    <div class="ontop__help-help-text a">Help</div>
                </div>
            </div>
        </div>
        <div class="header">
            <div class="header__icon">
                <a href="#" class="header__icon-link">trademark</a>
            </div>
            <div class="header__nav">
                <ul class="header__nav-list">
                    <li class="header__nav-listitem"><a href="./pages/news.php">Run Star Trainer</a></li>
                    <li class="header__nav-listitem "><a href="./pages/product.php">Product</a></li>
                    <li class="header__nav-listitem "><a href="./pages/aboutus.php">About US</a></li>
                    <li class="header__nav-listitem "><a href="./pages/size.php">Size</a></li>
                    <li class="header__nav-listitem "><a href="./pages/returnpolicy.php">Return Policy</a></li>
                </ul>
            </div>
            <div class="header__search">
                <div class="header__search-abc">
                    <?php if (isset($_SESSION['user'])): ?>
                        <div class="header__search-signin-des" id="user" onclick="">
                            <a href="./pages/profile.php" style="text-decoration: none;color:#444"><?php echo $_SESSION['user']; // Hiển thị tên người dùng 
                                                                                                    ?></a>
                        </div>
                        <div class="header__search-signin-icon">

                            <a href="./pages/logout.php" style="text-decoration: none;color:#444" class="header__search-signout  ">Đăng xuất</a>
                        </div>
                    <?php else: ?>
                        <div class="header__search-signin-des " id="signin">
                            <a href="./pages/login.php" style="text-decoration: none;color:#444">Sign In</a>
                        </div>
                        <div class="header__search-signin-icon">
                            <i class="fa-solid fa-user"></i>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="header__search-abc">
                    <div class="header__search-heart-icon">
                        <i class="fa-solid fa-heart"></i>
                    </div>
                </div>
                <div class="header__search-abc">
                    <?php if (isset($_SESSION['user'])): ?>
                        <!-- Hiển thị giỏ hàng khi người dùng đã đăng nhập -->
                        <div class="header__search-buy-icon">
                            <i class="fa-solid fa-cart-plus"></i>
                        </div>

                    <?php endif; ?>
                </div>

                <div class="class__search-abc">

                    <div class="header__search-search-icon">
                        <i class="fa-solid fa-search"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>