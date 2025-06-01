<?php
session_start();
include '../includes/db.php';

if (!isset($_SESSION['UserId'])) {
    header('Location: login.php');
    exit;
}

$UserId = $_SESSION['UserId'];

$sql = "SELECT p.* FROM products p
        JOIN wishlist w ON p.ProductId = w.ProductId
        WHERE w.UserId = $UserId";

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Danh sách sản phẩm yêu thích</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        .wishlist-container {
            padding: 40px;
            background-color: #f9f9f9;
            min-height: 100vh;
        }

        .product-card {
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            padding: 15px;
            background-color: #fff;
            transition: 0.3s;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }

        .product-card:hover {
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
        }

        .product-img {
            max-width: 100%;
            height: 150px;
            object-fit: contain;
            border-bottom: 1px solid #eee;
            margin-bottom: 10px;
        }

        .product-name {
            font-weight: bold;
            font-size: 1.1rem;
            color: #333;
        }

        .product-price {
            color: #d9534f;
            font-size: 1rem;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <?php include("../includes/header.php"); ?>
    <!-- End header -->

    <div class="wishlist-container container">
        <h1>Sản phẩm yêu thích của bạn</h1>
        <?php if (mysqli_num_rows($result) > 0): ?>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                    <div class="col">
                        <div class="product-card h-100 text-center">
                            <img src="<?php echo $row['image_url']; ?>" alt="Ảnh sản phẩm" class="product-img">
                            <div class="product-name">
                                <a href="product.php?id=<?php echo $row['ProductId']; ?>">
                                    <?php echo htmlspecialchars($row['ProductName']); ?>
                                </a>
                            </div>
                            <div class="product-price">$<?php echo $row['Price']; ?></div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php else: ?>
            <div class="alert alert-info text-center mt-4">
                Bạn chưa có sản phẩm yêu thích nào.
            </div>
        <?php endif; ?>
    </div>

    <?php include '../includes/footer.php'; ?>
</body>

</html>