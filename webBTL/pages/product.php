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
    <title>Product List</title>
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/font/fontawesome-free-6.6.0-web/css/all.min.css">
    <style>
        /* General Styles */
        body {
            font-family: 'Roboto', Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container1 {
            max-width: 1100px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Header and Intro */
        .product-intro img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        /* Sorting Buttons */
        .text-center {
            text-align: center;
            margin: 20px 0;
            display: flex;
            justify-content: space-between;
        }

        .text-center h2 {
            text-align: center;
            font-weight: bold;
            color: #444;
            font-size: 2em;
            margin-bottom: 20px;
        }

        .sort-buttons {
            margin: 20px 0;
        }

        .sort-buttons select {
            padding: 10px;
            font-size: 1rem;
            /* 16px */
            border-radius: 5px;
            border: 1px solid #ddd;
        }

        /* Product List */
        .product-list {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
        }

        .product-item {
            border: 1px solid #e9ecef;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .product-item:hover {
            transform: translateY(-5px);
            /* hiệu ứng di chuyển lên phía trên */
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
        }

        .product-image {
            width: 100%;
            height: 250px;
            object-fit: cover;
            /* Đảm bảo hình ảnh sẽ bao phủ toàn bộ không gian của phần tử chứa, cắt bớt phần hình ảnh nếu cần để giữ tỷ lệ khung hình. */
        }

        .product-info {
            padding: 15px;
            text-align: center;
        }

        .product-name {
            font-size: 18px;
            font-weight: bold;
            margin: 10px 0;
        }

        .product-price {
            font-size: 16px;
            color: #e74c3c;
            font-weight: bold;
        }

        .product-button {
            display: inline-block;
            margin-top: 15px;
            padding: 10px 20px;
            font-size: 14px;
            font-weight: bold;
            color: #fff;
            background-color: #007bff;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }

        .product-button:hover {
            background-color: #0056b3;
        }

        /* Pagination */
        .pagination {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 20px 0;
        }

        .pagination a {
            padding: 10px 15px;
            margin: 0 5px;
            font-size: 14px;
            text-decoration: none;
            border: 1px solid #e9ecef;
            border-radius: 5px;
        }

        .pagination a:hover,
        .pagination a.active {
            background-color: #007bff;
            color: #fff;
            border-color: #007bff;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <?php include("../includes/header.php"); ?>
    <!-- End header -->

    <?php
    // Số sản phẩm mỗi trang
    $products_per_page = 12;

    // Xác định trang hiện tại
    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    if ($page < 1) $page = 1;

    // Tính toán offset
    $offset = ($page - 1) * $products_per_page;

    // Lấy danh sách sản phẩm từ bảng với giới hạn
    $sql = "SELECT * FROM products LIMIT $offset, $products_per_page";
    $result = $conn->query($sql);

    // Lấy tổng số sản phẩm để tính tổng số trang
    $sql_total = "SELECT COUNT(*) as total FROM products";
    $total_result = $conn->query($sql_total);
    $total_row = $total_result->fetch_assoc();
    $total_products = $total_row['total'];
    $total_pages = ceil($total_products / $products_per_page);
    ?>

    <div class="container1">
        <div class="product-intro">
            <img src="../assets/img/product/bg.webp" />
        </div>
        <div class="text-center">
            <div>
                <h2>Product</h2>
            </div>
            <div class="sort-buttons">
                <label>Sort by:</label>
                <select>
                    <option>Default</option>
                    <option>High to Low</option>
                    <option>Low to High</option>
                </select>
            </div>
        </div>
        <div class="main">
            <div class="product-list">
                <?php
                if ($result && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="product-item">';
                        echo '<img src="' . $row["image_url"] . '" alt="' . $row["ProductName"] . '" class="product-image" onclick="viewDetails(\'' . $row['ProductId'] . '\')">';
                        echo '<div class="product-info">';
                        echo '<div class="product-name" onclick="viewDetails(\'' . $row['ProductId'] . '\')">' . $row["ProductName"] . '</div>';
                        echo '<div class="product-price">$' . $row["Price"] . '</div>';
                        echo '<a class="product-button" onclick="buyProduct(\'' . $row['ProductId'] . '\')">Add to Cart</a>';
                        echo '</div>';
                        echo '</div>';
                    }
                } else {
                    echo "<p>No products found.</p>";
                }
                ?>
            </div>

        </div>
    </div>
    <div class="pagination">
        <?php
        // Hiển thị nút Previous nếu không phải trang đầu tiên
        if ($page > 1) {
            echo '<a href="?page=' . ($page - 1) . '" class="prev">&laquo; Previous</a>';
        }

        // Hiển thị số trang
        for ($i = 1; $i <= $total_pages; $i++) {
            if ($i == $page) {
                echo '<a class="active">' . $i . '</a>';
            } else {
                echo '<a href="?page=' . $i . '">' . $i . '</a>';
            }
        }

        // Hiển thị nút Next nếu không phải trang cuối cùng
        if ($page < $total_pages) {
            echo '<a href="?page=' . ($page + 1) . '" class="next">Next &raquo;</a>';
        }
        ?>
    </div>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const signinElement = document.getElementById("signin");
            if (signinElement) {
                signinElement.addEventListener("click", function() {
                    window.location.href = "../pages/login.php";
                });
            }
        });

        function viewDetails(productId) {
            alert("View details for product ID: " + productId);
            window.location.href = "viewsProduct.php?id=" + productId;
        }

        function buyProduct(productId) {
            alert("Buying product ID: " + productId);
            window.location.href = "cart.php?id=" + productId;
        }

        document.addEventListener("DOMContentLoaded", () => {
            const sortSelect = document.querySelector(".sort-buttons select");
            const productList = document.querySelector(".product-list");
            const originalProducts = Array.from(productList.children);

            sortSelect.addEventListener("change", () => {
                const sortValue = sortSelect.value;
                let products = Array.from(productList.children);

                if (sortValue === "High to Low") {
                    products.sort((a, b) => {
                        const priceA = parseFloat(a.querySelector(".product-price").textContent.replace("$", ""));
                        const priceB = parseFloat(b.querySelector(".product-price").textContent.replace("$", ""));
                        return priceB - priceA;
                    });
                } else if (sortValue === "Low to High") {
                    products.sort((a, b) => {
                        const priceA = parseFloat(a.querySelector(".product-price").textContent.replace("$", ""));
                        const priceB = parseFloat(b.querySelector(".product-price").textContent.replace("$", ""));
                        return priceA - priceB;
                    });
                } else {
                    products = originalProducts;
                }

                products.forEach((product) => productList.appendChild(product));
            });
        });
    </script>


    <?php
    include '../includes/footer.php';
    ?>