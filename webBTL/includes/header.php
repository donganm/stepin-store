<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/font/fontawesome-free-6.6.0-web/css/all.min.css">
    <style>
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


        /* Footer */
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
                <a href="../index.php" class="header__icon-link">trademark</a>
            </div>
            <div class="header__nav">
                <ul class="header__nav-list">
                    <li class="header__nav-listitem"><a href="news.php" style="color: red;">Run Star Trainer</a></li>
                    <li class="header__nav-listitem "><a href="product.php">Product</a></li>
                    <li class="header__nav-listitem "><a href="aboutus.php">About US</a></li>
                    <li class="header__nav-listitem "><a href="size.php">Size</a></li>
                    <li class="header__nav-listitem "><a href="returnpolicy.php">Return Policy</a></li>
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

                        <a href="../pages/cart.php" class="cart-icon">
                            <i class="fa fa-shopping-cart"></i>
                            <span class="cart-count"><?= $cart_count ?></span>
                        </a>
                        <div class="header__search-signin-des" id="user" onclick="">
                            <a href="profile.php" style="text-decoration: none;color:#444"><?php echo $_SESSION['user']; // Hiển thị tên người dùng 
                                                                                            ?></a>
                        </div>
                        <div class="header__search-signin-icon">

                            <a href="logout.php" style="text-decoration: none;color:#444" class="header__search-signout  ">Đăng xuất</a>
                        </div>
                    <?php else: ?>
                        <div class="header__search-signin-des " id="signin">
                            <a href="login.php" style="text-decoration: none;color:#444">Sign In</a>
                        </div>
                        <div class="header__search-signin-icon">
                            <i class="fa-solid fa-user"></i>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>