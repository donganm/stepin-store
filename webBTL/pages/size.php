<?php
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

  <link rel="stylesheet" href="../assets/css/size.css" />
  <link rel="stylesheet" href="../assets/font/fontawesome-free-6.6.0-web/css/all.min.css">
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
  <!-- WOMEN -->
  <div class="size__body">
    <div class="container1">
      <div class="size__main">
        <ul>
          <li onclick="showSection('women')">Women's</li>
          <li onclick="showSection('men')">Men's</li>
        </ul>
        <ul id="womenMenu">
          <li onclick="showContent('womenShoesContent', this)">Shoes</li>
          <li onclick="showContent('womenTopsContent', this)">Tops</li>
          <li onclick="showContent('womenBottomsContent', this)">Bottoms</li>
        </ul>
        <ul id="menMenu" style="display: none">
          <li onclick="showContent('menShoesContent', this)">Shoes</li>
          <li onclick="showContent('menTopsContent', this)">Tops</li>
          <li onclick="showContent('menBottomsContent', this)">Bottoms</li>
        </ul>
      </div>
      <div class="size__choose">
        <!-- WOMEN -->
        <!-- Nội dung Shoes -->
        <div id="womenShoesContent" class="content">
          <div class="box1">
            <ul>
              <li>Jump To:</li>
              <li>Size Chart</li>
              <li>How to Find Your Size</li>
              <li>More Details</li>
            </ul>
          </div>
          <div class="box2">
            <h3>Women's Shoe Size Chart</h3>
          </div>
          <div class="box3">
            <p>Step 1. Find your usual US size.</p>
            <p>
              Step 2. Compare your usual US size to your desired Trademark
              sneaker style.
            </p>
          </div>
          <div class="box4">
            <table>
              <thead>
                <tr>
                  <th>
                    <img src="../assets/img/size/shoe1.webp" />Find Your Shoe Size
                  </th>
                  <th>
                    <img src="../assets/img/size/shoe2.webp" />Chuck Taylor All
                    Star / Chuck 70
                  </th>
                  <th>
                    <img src="../assets/img/size/shoe3.webp" />All Star Pro BB / BB
                    Evo
                  </th>
                  <th>
                    <img src="../assets/img/size/shoe4.webp" />All Other Styles*
                  </th>
                  <th><img src="../assets/img/size/shoe5.webp" />inches cm</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>US Size</td>
                  <td>Runs a half size large</td>
                  <td>Runs a half size small</td>
                  <td>Fit may vary. See product page.</td>
                  <td>Foot Length (in)</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>3.5</td>
                  <td>4.5</td>
                  <td>4</td>
                  <td>n/a</td>
                </tr>
                <tr>
                  <td>4.5</td>
                  <td>4</td>
                  <td>5</td>
                  <td>4.5</td>
                  <td>8 1/3"</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>4.5</td>
                  <td>5.5</td>
                  <td>5</td>
                  <td>8 1/2"</td>
                </tr>
                <tr>
                  <td>5.5</td>
                  <td>5</td>
                  <td>6</td>
                  <td>5.5</td>
                  <td>8 5/8"</td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>5.5</td>
                  <td>6.5</td>
                  <td>6</td>
                  <td>8 5/6"</td>
                </tr>
                <tr>
                  <td>6.5</td>
                  <td>6</td>
                  <td>7</td>
                  <td>6.5</td>
                  <td>9"</td>
                </tr>
                <tr>
                  <td>7</td>
                  <td>6.5</td>
                  <td>7.5</td>
                  <td>7</td>
                  <td>9 1/7"</td>
                </tr>
                <tr>
                  <td>7.5</td>
                  <td>7</td>
                  <td>8</td>
                  <td>7.5</td>
                  <td>9 2/7"</td>
                </tr>
                <tr>
                  <td>8</td>
                  <td>7.5</td>
                  <td>8.5</td>
                  <td>8</td>
                  <td>9 1/2"</td>
                </tr>
                <tr>
                  <td>8.5</td>
                  <td>8</td>
                  <td>9</td>
                  <td>8.5</td>
                  <td>9 2/3"</td>
                </tr>
                <tr>
                  <td>9</td>
                  <td>8.5</td>
                  <td>9.5</td>
                  <td>9</td>
                  <td>9 4/5"</td>
                </tr>
                <tr>
                  <td>9.5</td>
                  <td>9</td>
                  <td>10</td>
                  <td>9.5</td>
                  <td>10"</td>
                </tr>
                <tr>
                  <td>10</td>
                  <td>9.5</td>
                  <td>10.5</td>
                  <td>10</td>
                  <td>10 1/6"</td>
                </tr>
                <tr>
                  <td>10.5</td>
                  <td>10</td>
                  <td>11</td>
                  <td>10.5</td>
                  <td>10 1/3"</td>
                </tr>
                <tr>
                  <td>11</td>
                  <td>10.5</td>
                  <td>11.5</td>
                  <td>11</td>
                  <td>10 1/2"</td>
                </tr>
                <tr>
                  <td>11.5</td>
                  <td>11</td>
                  <td>12</td>
                  <td>11.5</td>
                  <td>10 5/8"</td>
                </tr>
                <tr>
                  <td>12</td>
                  <td>11.5</td>
                  <td>12.5</td>
                  <td>12</td>
                  <td>10 4/5"</td>
                </tr>
                <tr>
                  <td>12.5</td>
                  <td>12</td>
                  <td>13</td>
                  <td>12.5</td>
                  <td>11"</td>
                </tr>
                <tr>
                  <td>13</td>
                  <td>12.5</td>
                  <td>13.5</td>
                  <td>13</td>
                  <td>11 1/7"</td>
                </tr>
                <tr>
                  <td>13.5</td>
                  <td>13</td>
                  <td>14</td>
                  <td>13.5</td>
                  <td>11 2/7"</td>
                </tr>
                <tr>
                  <td>14.5</td>
                  <td>13.5</td>
                  <td>14.5</td>
                  <td>14</td>
                  <td>11 2/3"</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="box5">
            <div class="sec1">
              <h3>Wide Width Sizes</h3>
            </div>
            <div class="sec2">
              <p>
                Wide width sizes include more volume and broader platform by
                approximately 15mm to the ball and instep and 6mm to the
                bottom width.
              </p>
            </div>
            <div class="sec3">
              <h3>How To Find Your Size</h3>
            </div>
            <div class="sec4">
              <ul>
                <li>
                  <img src="../assets/img/size/STEP-1.webp" />
                  <p>Step 1</p>
                  <p>
                    Find a hard flat surface, tape a piece of blank paper,
                    flush against a wall. Place your foot on the paper, with
                    your heel flush against the wall, stand up straight.
                  </p>
                </li>
                <li>
                  <img src="../assets/img/size/STEP-2.webp" />
                  <p>Step 2</p>
                  <p>
                    Have a friend mark the longest part of your foot (referred
                    to as heel-to-toe length) on the paper with a pen or
                    pencil, or measure yourself if necessary. Repeat with the
                    other foot, as right and left sizes may be different.
                  </p>
                </li>
                <li>
                  <img src="../assets/img/size/STEP-3.webp" />
                  <p>Step 3</p>
                  <p>
                    Use a ruler to measure the heel-to-toe length you marked
                    for each foot.
                  </p>
                </li>
              </ul>
            </div>
          </div>
          <div class="box6">
            <h3>Free Returns</h3>
            <p>
              Not sure about your size, order a half size up and a half size
              down, and return the one that doesn't fit. It's hassle-free.
            </p>
            <ul>
              <li>Free processing on all returns</li>
              <li>
                Receive free standard shipping on orders and returns with your
                Trademark.com Membership
              </li>
              <li>
                Returns accepted for any reason (within 30 days of delivery
                date)
              </li>
            </ul>
          </div>
          <!-- Các nội dung khác của Shoes... -->
        </div>

        <!-- Nội dung Tops -->
        <div id="womenTopsContent" class="content">
          <div class="box1">
            <ul>
              <li>Jump To:</li>
              <li>Measure</li>
              <li>Size Chart</li>
              <li>More Details</li>
            </ul>
          </div>
          <div class="box2">
            <h3>Measure Yourself</h3>
          </div>
          <div class="box3_top">
            <img
              src="../assets/img/size/D-CONVERSE-SIZE-GUIDE-WOMENS-TOPS_2.webp"
              alt="logo" />
            <img />
          </div>
          <div class="box4_top">
            <h3>Find Your Size</h3>
            <div class="size_top">
              <div class="size_top_header">
                <p>Size Chart</p>
                <div class="inches_cm">
                  <p>inches</p>
                  <p>cm</p>
                </div>
              </div>
              <!-- Bang size -->
              <div class="size_top_main">
                <table>
                  <thead>
                    <tr>
                      <th>SIZE</th>
                      <th>BUST (in.)</th>
                      <th>WAIST (in.)</th>
                      <th>HIPS (in.)</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>XXS</td>
                      <td>29.5-30.5</td>
                      <td>24-24.5</td>
                      <td>31.5-33</td>
                    </tr>
                    <tr>
                      <td>XS</td>
                      <td>31-32.5</td>
                      <td>25-25.5</td>
                      <td>33.5-35</td>
                    </tr>
                    <tr>
                      <td>S</td>
                      <td>33-34.5</td>
                      <td>26-27</td>
                      <td>35.5-37</td>
                    </tr>
                    <tr>
                      <td>M</td>
                      <td>35-36.5</td>
                      <td>27.5-29</td>
                      <td>37.5-39</td>
                    </tr>
                    <tr>
                      <td>L</td>
                      <td>37-38.5</td>
                      <td>30-31</td>
                      <td>39.5-41</td>
                    </tr>
                    <tr>
                      <td>XL</td>
                      <td>39-40.5</td>
                      <td>31.5-32.5</td>
                      <td>41.5-43</td>
                    </tr>
                    <tr>
                      <td>XXL</td>
                      <td>41-42.5</td>
                      <td>33-34</td>
                      <td>43.5-45</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="box6">
            <h3>Free Returns</h3>
            <p>
              Not sure about your size, order a half size up and a half size
              down, and return the one that doesn't fit. It's hassle-free.
            </p>
            <ul>
              <li>Free processing on all returns</li>
              <li>
                Receive free standard shipping on orders and returns with your
                Trademark.com Membership
              </li>
              <li>
                Returns accepted for any reason (within 30 days of delivery
                date)
              </li>
            </ul>
          </div>
          <!-- Thêm nội dung cho Tops tại đây -->
        </div>

        <!-- Nội dung Bottoms -->
        <div id="womenBottomsContent" class="content">
          <div class="box1">
            <ul>
              <li>Jump To:</li>
              <li>Measure</li>
              <li>Size Chart</li>
              <li>More Details</li>
            </ul>
          </div>
          <div class="box2">
            <h3>Measure Yourself</h3>
          </div>
          <div class="box3_bottom">
            <img
              src="../assets/img/size/D-CONVERSE-SIZE-GUIDE-WOMENS-BOTTOMS.webp"
              alt="logo" />
            <img />
          </div>
          <div class="box4_bottom">
            <h3>Find Your Size</h3>
            <div class="size_bottom">
              <div class="size_bottom_header">
                <p>Size Chart</p>
                <div class="inches_cm">
                  <p>inches</p>
                  <p>cm</p>
                </div>
              </div>
              <!-- Bang size -->
              <div class="size_bottom_main">
                <table>
                  <thead>
                    <tr>
                      <th>NUMERIC SIZE (US)</th>
                      <th>SIZE</th>
                      <th>WAIST (in.)</th>
                      <th>HIPS (in.)</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>0-1</td>
                      <td>XXS</td>
                      <td>24-24.5</td>
                      <td>31.5-33</td>
                    </tr>
                    <tr>
                      <td>1-2</td>
                      <td>XS</td>
                      <td>25-25.5</td>
                      <td>33.5-35</td>
                    </tr>
                    <tr>
                      <td>3-5</td>
                      <td>S</td>
                      <td>26-27</td>
                      <td>35.5-37</td>
                    </tr>
                    <tr>
                      <td>6-9</td>
                      <td>M</td>
                      <td>27.5-29</td>
                      <td>37.5-39</td>
                    </tr>
                    <tr>
                      <td>10-13</td>
                      <td>L</td>
                      <td>30-31</td>
                      <td>39.5-41</td>
                    </tr>
                    <tr>
                      <td>14-15</td>
                      <td>XL</td>
                      <td>31.5-32.5</td>
                      <td>41.5-43</td>
                    </tr>
                    <tr>
                      <td>16</td>
                      <td>XXL</td>
                      <td>33-34</td>
                      <td>43.5-45</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="box6">
            <h3>Free Returns</h3>
            <p>
              Not sure about your size, order a half size up and a half size
              down, and return the one that doesn't fit. It's hassle-free.
            </p>
            <ul>
              <li>Free processing on all returns</li>
              <li>
                Receive free standard shipping on orders and returns with your
                Trademark.com Membership
              </li>
              <li>
                Returns accepted for any reason (within 30 days of delivery
                date)
              </li>
            </ul>
          </div>
          <!-- Thêm nội dung cho Bottoms tại đây -->
        </div>
        <!-- END WOMEN -->

        <!-- MEN  -->
        <div id="menShoesContent" class="content">
          <div class="box1">
            <ul>
              <li>Jump To:</li>
              <li>Size Chart</li>
              <li>How to Find Your Size</li>
              <li>More Details</li>
            </ul>
          </div>
          <div class="box2">
            <h3>Men's Shoe Size Chart</h3>
          </div>
          <div class="box3">
            <p>Step 1. Find your usual US size.</p>
            <p>
              Step 2. Compare your usual US size to your desired Trademark
              sneaker style.
            </p>
          </div>
          <div class="box4">
            <table>
              <thead>
                <tr>
                  <th>
                    <img src="../assets/img/size/shoe1.webp" />Find Your Shoe Size
                  </th>
                  <th>
                    <img src="../assets/img/size/shoe2.webp" />Chuck Taylor All
                    Star / Chuck 70
                  </th>
                  <th>
                    <img src="../assets/img/size/shoe3.webp" />All Star Pro BB / BB
                    Evo
                  </th>
                  <th>
                    <img src="../assets/img/size/shoe4.webp" />All Other Styles*
                  </th>
                  <th><img src="../assets/img/size/shoe5.webp" />inches cm</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>US Size</td>
                  <td>Runs a half size large</td>
                  <td>Runs a half size small</td>
                  <td>Fit may vary. See product page.</td>
                  <td>Foot Length (in)</td>
                </tr>
                <tr>
                  <td>3.5</td>
                  <td>3</td>
                  <td>4</td>
                  <td>3.5</td>
                  <td>8 1/2"</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>3.5</td>
                  <td>4.5</td>
                  <td>4</td>
                  <td>8 5/8"</td>
                </tr>
                <tr>
                  <td>4.5</td>
                  <td>4</td>
                  <td>5</td>
                  <td>4.5</td>
                  <td>8 5/6"</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>4.5</td>
                  <td>5.5</td>
                  <td>5</td>
                  <td>9"</td>
                </tr>
                <tr>
                  <td>5.5</td>
                  <td>5</td>
                  <td>6</td>
                  <td>5.5</td>
                  <td>9 1/7"</td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>5.5</td>
                  <td>6.5</td>
                  <td>6</td>
                  <td>9 2/9"</td>
                </tr>
                <tr>
                  <td>6.5</td>
                  <td>6</td>
                  <td>7</td>
                  <td>6.5</td>
                  <td>9 1/2"</td>
                </tr>
                <tr>
                  <td>7</td>
                  <td>6.5</td>
                  <td>7.5</td>
                  <td>7</td>
                  <td>9 2/3"</td>
                </tr>
                <tr>
                  <td>7.5</td>
                  <td>7</td>
                  <td>8</td>
                  <td>7.5</td>
                  <td>9 4/5"</td>
                </tr>
                <tr>
                  <td>8</td>
                  <td>7.5</td>
                  <td>8.5</td>
                  <td>8</td>
                  <td>10"</td>
                </tr>
                <tr>
                  <td>8.5</td>
                  <td>8</td>
                  <td>9</td>
                  <td>8.5</td>
                  <td>10 1/6"</td>
                </tr>
                <tr>
                  <td>9</td>
                  <td>8.5</td>
                  <td>9.5</td>
                  <td>9</td>
                  <td>10 1/3"</td>
                </tr>
                <tr>
                  <td>9.5</td>
                  <td>9</td>
                  <td>10</td>
                  <td>9.5</td>
                  <td>10 1/2"</td>
                </tr>
                <tr>
                  <td>10</td>
                  <td>9.5</td>
                  <td>10.5</td>
                  <td>10</td>
                  <td>10 5/8"</td>
                </tr>
                <tr>
                  <td>10.5</td>
                  <td>10</td>
                  <td>11</td>
                  <td>10.5</td>
                  <td>10 4/5"</td>
                </tr>
                <tr>
                  <td>11</td>
                  <td>10.5</td>
                  <td>11.5</td>
                  <td>11</td>
                  <td>11"</td>
                </tr>
                <tr>
                  <td>11.5</td>
                  <td>11</td>
                  <td>12</td>
                  <td>11.5</td>
                  <td>11 1/7"</td>
                </tr>
                <tr>
                  <td>12</td>
                  <td>11.5</td>
                  <td>12.5</td>
                  <td>12</td>
                  <td>11 2/7"</td>
                </tr>
                <tr>
                  <td>12.5</td>
                  <td>12</td>
                  <td>13</td>
                  <td>12.5</td>
                  <td>11 2/3"</td>
                </tr>
                <tr>
                  <td>13</td>
                  <td>12.5</td>
                  <td>13.5</td>
                  <td>13</td>
                  <td>12"</td>
                </tr>
                <tr>
                  <td>13.5</td>
                  <td>13</td>
                  <td>14</td>
                  <td>13.5</td>
                  <td>12 2/7"</td>
                </tr>
                <tr>
                  <td>14.5</td>
                  <td>13.5</td>
                  <td>14.5</td>
                  <td>14</td>
                  <td>12 3/5"</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="box5">
            <div class="sec1">
              <h3>Wide Width Sizes</h3>
            </div>
            <div class="sec2">
              <p>
                Wide width sizes include more volume and broader platform by
                approximately 15mm to the ball and instep and 6mm to the
                bottom width.
              </p>
            </div>
            <div class="sec3">
              <h3>How To Find Your Size</h3>
            </div>
            <div class="sec4">
              <ul>
                <li>
                  <img src="../assets/img/size/STEP-1.webp" />
                  <p>Step 1</p>
                  <p>
                    Find a hard flat surface, tape a piece of blank paper,
                    flush against a wall. Place your foot on the paper, with
                    your heel flush against the wall, stand up straight.
                  </p>
                </li>
                <li>
                  <img src="../assets/img/size/STEP-2.webp" />
                  <p>Step 2</p>
                  <p>
                    Have a friend mark the longest part of your foot (referred
                    to as heel-to-toe length) on the paper with a pen or
                    pencil, or measure yourself if necessary. Repeat with the
                    other foot, as right and left sizes may be different.
                  </p>
                </li>
                <li>
                  <img src="../assets/img/size/STEP-3.webp" />
                  <p>Step 3</p>
                  <p>
                    Use a ruler to measure the heel-to-toe length you marked
                    for each foot.
                  </p>
                </li>
              </ul>
            </div>
          </div>
          <div class="box6">
            <h3>Free Returns</h3>
            <p>
              Not sure about your size, order a half size up and a half size
              down, and return the one that doesn't fit. It's hassle-free.
            </p>
            <ul>
              <li>Free processing on all returns</li>
              <li>
                Receive free standard shipping on orders and returns with your
                Trademark.com Membership
              </li>
              <li>
                Returns accepted for any reason (within 30 days of delivery
                date)
              </li>
            </ul>
          </div>
          <!-- Các nội dung khác của Shoes... -->
        </div>
        <div id="menTopsContent" class="content">
          <div class="box1">
            <ul>
              <li>Jump To:</li>
              <li>Measure</li>
              <li>Size Chart</li>
              <li>More Details</li>
            </ul>
          </div>
          <div class="box2">
            <h3>Measure Yourself</h3>
          </div>
          <div class="box3_top">
            <img
              src="../assets/img/size/D-CONVERSE-SIZE-GUIDE-MENS-TOPS.webp"
              alt="logo" />
            <img />
          </div>
          <div class="box4_top">
            <h3>Find Your Size</h3>
            <div class="size_top">
              <div class="size_top_header">
                <p>Size Chart</p>
                <div class="inches_cm">
                  <p>inches</p>
                  <p>cm</p>
                </div>
              </div>
              <!-- Bang size -->
              <div class="size_top_main">
                <table>
                  <thead>
                    <tr>
                      <th>SIZE</th>
                      <th>CHEST (in.)</th>
                      <th>WAIST (in.)</th>
                      <th>HIPS (in.)</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>XS</td>
                      <td>33-35</td>
                      <td>25-27</td>
                      <td>32.5-34.5</td>
                    </tr>
                    <tr>
                      <td>S</td>
                      <td>36-38</td>
                      <td>28-30</td>
                      <td>35.5-37.5</td>
                    </tr>
                    <tr>
                      <td>M</td>
                      <td>39-41</td>
                      <td>31-33</td>
                      <td>38.5-40.5</td>
                    </tr>
                    <tr>
                      <td>L</td>
                      <td>42-44</td>
                      <td>34-36</td>
                      <td>41.5-43.5</td>
                    </tr>
                    <tr>
                      <td>XL</td>
                      <td>45-48</td>
                      <td>37-40</td>
                      <td>44.5-47.5</td>
                    </tr>
                    <tr>
                      <td>XXL</td>
                      <td>49-52</td>
                      <td>41-44</td>
                      <td>48.5-51.5</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="box6">
            <h3>Free Returns</h3>
            <p>
              Not sure about your size, order a half size up and a half size
              down, and return the one that doesn't fit. It's hassle-free.
            </p>
            <ul>
              <li>Free processing on all returns</li>
              <li>
                Receive free standard shipping on orders and returns with your
                Trademark.com Membership
              </li>
              <li>
                Returns accepted for any reason (within 30 days of delivery
                date)
              </li>
            </ul>
          </div>
          <!-- Thêm nội dung cho Tops tại đây -->
        </div>
        <div id="menBottomsContent" class="content">
          <div class="box1">
            <ul>
              <li>Jump To:</li>
              <li>Measure</li>
              <li>Size Chart</li>
              <li>More Details</li>
            </ul>
          </div>
          <div class="box2">
            <h3>Measure Yourself</h3>
          </div>
          <div class="box3_bottom">
            <img
              src="../assets/img/size/D-CONVERSE-SIZE-GUIDE-MENS-BOTTOMS.webp"
              alt="logo" />
            <img />
          </div>
          <div class="box4_bottom">
            <h3>Find Your Size</h3>
            <div class="size_bottom">
              <div class="size_bottom_header">
                <p>Size Chart</p>
                <div class="inches_cm">
                  <p>inches</p>
                  <p>cm</p>
                </div>
              </div>
              <!-- Bang size -->
              <div class="size_bottom_main">
                <table>
                  <thead>
                    <tr>
                      <th>NUMERIC SIZE (US)</th>
                      <th>SIZE</th>
                      <th>WAIST (in.)</th>
                      <th>HIPS (in.)</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>28</td>
                      <td>XS</td>
                      <td>25-26</td>
                      <td>32.5-33.5</td>
                    </tr>
                    <tr>
                      <td>29</td>
                      <td>XS</td>
                      <td>26-27</td>
                      <td>33.5-34.5</td>
                    </tr>
                    <tr>
                      <td>30</td>
                      <td>S</td>
                      <td>28-29</td>
                      <td>35.5-36.5</td>
                    </tr>
                    <tr>
                      <td>31</td>
                      <td>S</td>
                      <td>29-30</td>
                      <td>35.5-37.5</td>
                    </tr>
                    <tr>
                      <td>32</td>
                      <td>M</td>
                      <td>31-32</td>
                      <td>38.5-39.5</td>
                    </tr>
                    <tr>
                      <td>33</td>
                      <td>M</td>
                      <td>32-33</td>
                      <td>39.5-40.5</td>
                    </tr>
                    <tr>
                      <td>34</td>
                      <td>L</td>
                      <td>34-35</td>
                      <td>41.5-42.5</td>
                    </tr>
                    <tr>
                      <td>36</td>
                      <td>L</td>
                      <td>35-36</td>
                      <td>42.5-43.5</td>
                    </tr>
                    <tr>
                      <td>38</td>
                      <td>XL</td>
                      <td>37-38</td>
                      <td>44.5-45.5</td>
                    </tr>
                    <tr>
                      <td>40</td>
                      <td>XL</td>
                      <td>39-40</td>
                      <td>46.5-47.5</td>
                    </tr>
                    <tr>
                      <td>42</td>
                      <td>XXL</td>
                      <td>41-42</td>
                      <td>48.5-49.5</td>
                    </tr>
                    <tr>
                      <td>44</td>
                      <td>XXL</td>
                      <td>43-44</td>
                      <td>50.5-51.5</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="box6">
            <h3>Free Returns</h3>
            <p>
              Not sure about your size, order a half size up and a half size
              down, and return the one that doesn't fit. It's hassle-free.
            </p>
            <ul>
              <li>Free processing on all returns</li>
              <li>
                Receive free standard shipping on orders and returns with your
                Trademark.com Membership
              </li>
              <li>
                Returns accepted for any reason (within 30 days of delivery
                date)
              </li>
            </ul>
          </div>
          <!-- Thêm nội dung cho Bottoms tại đây -->
        </div>
        <!-- END MEN -->
      </div>
    </div>
  </div>

  <!-- End Body -->

  <script src="../assets/js/size.js"></script>
  <?php
  include '../includes/footer.php';
  ?>