<?php
// Bắt đầu phiên làm việc
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/font/fontawesome-free-6.6.0-web/css/all.min.css">
    <script src="../assets/js/scripts.js"></script>
    <style>
        body,
        html {
            font-family: "Arial", sans-serif;
            background-color: #f9f9f9;
            color: #333;
            line-height: 1.6;
        }

        .image img {
            width: 100%;
            height: auto;
            display: block;
        }

        .main-content {
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .intro {
            text-align: center;
            margin-bottom: 30px;
        }

        .intro h1 {
            font-size: 40px;
            color: #222;
            margin-bottom: 10px;
        }

        .intro h3 {
            font-size: 19px;
            color: #555;
            font-style: italic;
            /* chữ nghiêng */
            margin-bottom: 20px;
        }

        .content {
            margin-bottom: 40px;
        }

        .text-image {
            display: flex;
            gap: 20px;
            align-items: center;
        }

        .text-image img {
            width: 300px;
            height: auto;
            border-radius: 10px;
        }

        .text-image p {
            flex: 1;
            font-size: 1rem;
            color: #444;
        }

        .gallerys {
            text-align: center;
            margin-bottom: 30px;
        }

        .gallerys h3 {
            font-size: 29px;
            margin-bottom: 20px;
            color: #222;
        }

        .gallery {
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .gallery img {
            width: 150px;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* x, y, chieu cao bong, do mo mau 0.1 */
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            /* hiệu ứng chuyển đổi */
        }

        .gallery img:hover {
            transform: scale(1.1);
            /* phóng to với tỷ lệ 1:1 (110%) */
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>

<body>
    <!-- Header -->
    <?php include("../includes/header.php"); ?>
    <!-- End header -->

    <div class="body">
        <div class="image">
            <img src="../assets/img/new1.webp" alt="Converse Header" />
        </div>
        <div class="main-content">
            <section class="intro">
                <h1>Trademark Introduces Newest Silhouette: The Run Star Trainer</h1>
                <h3>
                    Modern Low-Profile Offering Combines Best of Sport Past with
                    Versatility for Today's Lifestyle
                </h3>
            </section>

            <section class="content">
                <div class="text-image">
                    <img src="../assets/img/2.gif" alt="Converse GIF" />
                    <p>
                        Running, Fencing, Volleyball, Wrestling. What do these have in
                        common? They all served as inspiration for Trademark's all-new
                        silhouette, the Run Star Trainer. Trademark set sights on creating
                        a new concept inspired by the past but designed for modern life -
                        enabling new styling for those who value versatility,
                        self-expression, and comfort.
                    </p>
                </div>
            </section>

            <!-- Section 4: Text and Image -->
            <section class="content">
                <div class="text-image">
                    <p>
                        The Run Star Trainer takes cues from nearly 20 heritage
                        silhouettes, all of which were originally purpose-built for sports
                        including karate, fencing, soccer, wrestling, triple jump...even
                        steeple chase. The outsole tread pattern is also conceptualized
                        from the Chuck Taylor All Star, extended in an exaggerated fashion
                        through the heel and is stamped with the Star logo of the Run Star
                        Hike, first introduced in 2019.
                    </p>
                    <img src="../assets/img/new2.webp" alt="Converse Run Star Trainer" />
                </div>
            </section>

            <!-- Section 5: Gallery -->
            <section class="gallerys">
                <h3>Run Star Trainer Silhouette</h3>
                <div class="gallery">
                    <img src="../assets/img/new3.webp" alt="Gallery Image 1" />
                    <img src="../assets/img/new4.webp" alt="Gallery Image 2" />
                    <img src="../assets/img/new5.webp" alt="Gallery Image 3" />
                    <img src="../assets/img/new6.webp" alt="Gallery Image 4" />
                    <img src="../assets/img/new7.webp" alt="Gallery Image 5" />
                </div>
            </section>
        </div>
    </div>

    <?php
    include '../includes/footer.php';
    ?>