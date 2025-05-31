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

        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 30px 60px;
            background-color: white;
            font-family: 'Georgia', serif;
            border-bottom: 1px solid #eee;
        }

        .header__icon-link {
            font-size: 28px;
            font-weight: bold;
            color: #222;
            text-decoration: none;
            font-style: italic;
        }

        .header__nav {
            flex-grow: 1;
            text-align: center;
        }

        .header__nav-list {
            list-style: none;
            display: inline-flex;
            gap: 30px;
            margin: 0;
            padding: 0;
        }

        .header__nav-listitem a {
            text-decoration: none;
            font-size: 16px;
            color: #444;
            font-family: 'Arial', sans-serif;
        }

        .header__nav-listitem a:hover {
            color: #000;
        }

        .header__search {
            display: flex;
            align-items: center;
        }

        .header__search-abc {
            display: flex;
            gap: 15px;
            align-items: center;
        }

        .header__search-signin-des a,
        .header__search-signout {
            text-decoration: none;
            color: #444;
            font-family: 'Arial', sans-serif;
            font-size: 16px;
        }

        .header__search-signin-icon i {
            font-size: 18px;
            color: #444;
        }

        /* Optional: Nếu bạn có biểu tượng giỏ hàng */
        .header__search .fa-bag-shopping {
            font-size: 20px;
            color: #222;
        }

        /* Cart */
        .cart-icon {
            position: relative;
            color: #000;
            text-decoration: none;
            font-size: 20px;
        }

        .cart-count {
            position: absolute;
            top: -8px;
            right: -10px;
            background-color: red;
            color: white;
            font-size: 12px;
            border-radius: 50%;
            padding: 3px 7px;
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
            margin-left: 100px;
            font-weight: bold;
            font-size: 30px;
            /* margin-top: 100px; */
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

        .community-img_big:hover,
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

        <div class="header">
            <div class="header__icon">
                <a href="#" class="header__icon-link">trademark</a>
            </div>
            <div class="header__nav">
                <ul class="header__nav-list">
                    <li class="header__nav-listitem"><a href="./pages/news.php" style="color: red;">Run Star Trainer</a></li>
                    <li class="header__nav-listitem "><a href="./pages/product.php">Product</a></li>
                    <li class="header__nav-listitem "><a href="./pages/aboutus.php">About US</a></li>
                    <li class="header__nav-listitem "><a href="./pages/size.php">Size</a></li>
                    <li class="header__nav-listitem "><a href="./pages/returnpolicy.php">Return Policy</a></li>
                </ul>
            </div>
            <div class="header__search">
                <div class="header__search-abc">
                    <?php if (isset($_SESSION['user'])): ?>
                        <?php
                        $cart_count = 0;
                        if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                            foreach ($_SESSION['cart'] as $item) {
                                $cart_count += $item['quantity'];
                            }
                        }
                        ?>

                        <a href="../webBTL/pages/cart.php" class="cart-icon">
                            <i class="fa fa-shopping-cart"></i>
                            <span class="cart-count"><?= $cart_count ?></span>
                        </a>
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

            </div>
        </div>
    </div>


    <div class="img-animation">
        <img src="./assets/img/trangchu/summer-sale-25-desktop-banner.webp" class="img-animation-i" alt="">
    </div>

    <div class="trendstyles">
        <div class="trendstyle">Trending Styles</div>
        <div class="shop">
            <i class="fas fa-arrow-right"></i>
            <div class="shop-des">Shop All Trending Styles</div>
        </div>
    </div>
    <div class="product">
        <div class="products"><img src="./assets/img/chuck70.jpg" alt=""></div>
        <div class="products"><img src="./assets/img/clasicchuck.jpg" alt=""></div>
        <div class="products"><img src="./assets/img/vation.jpg" alt=""></div>
        <div class="products"><img src="./assets/img/comfort.jpg" alt=""></div>
    </div>

    <div class="sex">
        <div><img src="./assets/img/MEN_copy_1_.webp" alt=""></div>
        <div><img src="./assets/img/WOMEN_copy_1_.webp" alt=""></div>
        <div><img src="./assets/img/UNISEX_2_.webp" alt=""></div>
    </div>

    <div class="community">
        From Our Community
    </div>
    <div class="community-img">
        <div class="community-img_big"><img src="./assets/img/trangchu/nen.webp" alt=""></div>
    </div>

    <div class="explore">
        Explore Trademark
    </div>
    <div class="explore-converse">
        <div class="allMen"><i class="fas fa-arrow-right"></i>
            <p>All Men</p>
        </div>
        <div class="allWomen">
            <i class="fas fa-arrow-right"></i>
            <p>All Women</p>
        </div>
        <div class="allChild">
            <i class="fas fa-arrow-right"></i>
            <p>All Kids</p>
        </div>
    </div>

    <footer class="footer">
        <div class="footer__container">
            <div class="footer__section">
                <h2 class="footer__logo">TRADEMARK</h2>
                <p class="footer__description">Mang đến sản phẩm chất lượng và <br>dịch vụ tận tâm đến từng khách hàng.</p>
            </div>

            <div class="footer__section">
                <h3 class="footer__title">Danh mục</h3>
                <ul class="footer__links">
                    <li><a href="#">Trang chủ</a></li>
                    <li><a href="#">Sản phẩm</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Liên hệ</a></li>
                </ul>
            </div>

            <div class="footer__section">
                <h3 class="footer__title">Đăng ký nhận tin</h3>
                <form class="footer__form">
                    <input type="email" placeholder="Nhập email của bạn" class="footer__input" required>
                    <button type="submit" class="footer__button">Gửi</button>
                </form>
            </div>
        </div>

        <div class="footer__bottom">
            <p>&copy; 2025 TRADEMARK. Bản quyền đã được bảo hộ.</p>
        </div>
    </footer>



    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const signinElement = document.getElementById('signin');
            if (signinElement) {
                signinElement.addEventListener('click', function() {
                    window.location.href = 'pages/login.php';
                });
            }
        });
    </script>
</body>

</html>