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
  <link rel="stylesheet" href="../assets/css/order.css" />
</head>

<body>
  <!-- Header  -->
  <div class="header_1">
    <!-- <div class="box_1">
        <p>Back to Shopping</p>
      </div> -->
    <div class="box_2">TRADEMARK</div>
  </div>

  <div class="header_2">
    <!-- <div class="box_1">
          <b>Need Help?</b>
        </div> -->
    <div class="box_2">
      <p>7 days a week / 9am - 8pm VNT</p>
    </div>
  </div>
  <!-- End Header -->

  <!-- Body  -->
  <div class="body">
    <div id="step1" class="container_1">
      <div class="left">
        <div class="left_one">
          <div class="steps">
            <div class="step_1 active">1 Shipping</div>
            <div class="step_2">2 Review & Payments</div>
          </div>

          <h2>Enter Your Personal Details</h2>
          <hr />

          <form>
            <div class="one">
              <label>First Name <span>*</span></label>
              <div>
                <input type="text" placeholder="First Name" />
              </div>

              <label>Last Name <span>*</span></label>
              <div>
                <input type="text" placeholder="Last Name" />
              </div>
            </div>

            <div class="two">
              <label>Street Address <span>*</span></label>
              <div>
                <input type="text" placeholder="Street Address" />
              </div>
            </div>

            <div class="three">
              <label>Country <span>*</span></label>
              <div>
                <input type="text" value="Vietnam" readonly />
              </div>

              <label>Province <span>*</span></label>
              <div>
                <select>
                  <option>Please select a region, state or province.</option>
                </select>
              </div>
            </div>

            <div class="four">
              <label>District <span>*</span></label>
              <div>
                <select>
                  <option>Select District</option>
                </select>
              </div>

              <label>Ward <span>*</span></label>
              <div>
                <select>
                  <option>Select Ward</option>
                </select>
              </div>
            </div>

            <br />
            <div class="five">
              <label>Phone Number <span>*</span></label>
              <div>
                <input type="text" placeholder="Phone Number" />
              </div>
            </div>

            <div class="ship">
              <h2>SHIPPING METHOD</h2>
              <hr />
              <div class="choose_ship">
                <label>
                  <input type="radio" name="payment" checked />
                  <img src="../assets/img/nhat.webp" />
                  Nhất TínExpress (NTX)
                </label>
                <p>FREE SHIPPING</p>
              </div>

              <br />
              <p>
                The product is reserved for you for the next 10 minutes.
                Complete the purchase within this time frame if you do not
                want to risk losing it!
              </p>
            </div>

            <button type="button" id="nextButton">Next</button>
          </form>
        </div>
      </div>

      <div class="right">
        <div class="right_one">
          <div class="box_1">
            <h3>Order Summary</h3>
          </div>

          <hr />

          <div class="box_2">
            <div class="imgages">
              <a href="#">
                <img
                  src="assets/images/0882-CONA08767C01807H-1.webp"
                  alt="logo" />
              </a>
            </div>

            <div class="info">
              <div class="name">Chuck Taylor All Star Lift</div>
              <div class="mota">
                <p>Qty: 1</p>
                <p>Color: Beige</p>
                <p>Size: US 7.5</p>
              </div>
            </div>
          </div>

          <hr />

          <div class="box_3">
            <div class="cart">
              <p>Cart Subtotal</p>
              <p>₫1,200,000.00</p>
            </div>
            <div class="ship">
              <p>Shipping</p>
              <p><i>Not yet calculated</i></p>
            </div>
          </div>

          <hr />

          <div class="box_4">
            <p>Order Total</p>
            <p><b>₫1,200,000.00</b></p>
          </div>
        </div>
      </div>
    </div>

    <!-- 2 REVIEW & PAYMENTS -->
    <div id="step2" class="container_1 hidden">
      <div class="left">
        <div class="left_one">
          <div class="steps">
            <div class="step_1">1 Shipping</div>
            <div class="step_2 active">2 Review & Payments</div>
          </div>
          <hr />
          <h2>Payment Method</h2>
          <hr />
          <p>Choose your payment method</p>
          <form>
            <label>
              <input type="radio" name="payment" checked /> Online Payment
              (Cards / E-wallets)
            </label>
            <br />
            <p>
              You will be redirected to OnePay's page to continue with
              payment.
              <a href="#">Terms & Conditions</a>
            </p>
            <label>
              <input type="radio" name="payment" /> OnePay International
              (Cards / E-wallets)
            </label>
            <br />
            <div>
              <label>Apply Discount Code</label>
              <input type="text" placeholder="Enter discount code" />
              <button type="button">Apply</button>
            </div>
            <p>
              <i>Invoice for this order will be sent directly to your email
                upon successful payment.</i>
            </p>
            <div class="place_order">
              <button type="button" id="backButton">Back</button>
              <a href="order_succes.php" target="_blank">
                <button type="button">Place Order</button>
              </a>
            </div>
          </form>
        </div>
      </div>

      <!-- RIGHT (2) -->
      <div class="right">
        <div class="right_one">
          <div class="box_1">
            <h3>Order Summary</h3>
          </div>

          <hr />
          <div class="box_2">
            <div class="imgages">
              <a href="#">
                <img
                  src="assets/images/0882-CONA08767C01807H-1.webp"
                  alt="logo" />
              </a>
            </div>

            <div class="info">
              <div class="name">Chuck Taylor All Star Lift</div>
              <div class="mota">
                <p>Qty: 1</p>
                <p>Color: Beige</p>
                <p>Size: US 7.5</p>
              </div>
            </div>
          </div>
          <div class="box_3">
            <div class="cart">
              <p>Cart Subtotal</p>
              <p>₫1,200,000.00</p>
            </div>
            <div class="ship">
              <p>Shipping</p>
              <p><i>Not yet calculated</i></p>
            </div>
          </div>

          <hr />

          <div class="box_4">
            <p>Order Total</p>
            <p><b>₫1,200,000.00</b></p>
          </div>
        </div>
        <div class="right_two">
          <h3>SHIP TO</h3>
          <hr />
          <p>Dong Anh</p>
          <p>Hoàng Công Chất, Cầu Diễn, Hà Nội</p>
          <p>Quận Nam Từ Liêm/Phường Cầu Diễn, Hà Nội</p>
          <p>Việt Nam</p>
          <p>012345678</p>
          <h3>SHIPPING METHOD:</h3>
          <hr />
          <p>Nhất Tín Express (NTX) - Nhất Tín Express (NTX)</p>
        </div>
      </div>
    </div>
  </div>
  <!-- End Body -->

  <!-- Footer  -->
  <hr />
  <div class="footer_1">
    <h5>Get Help</h5>
    <p>Contact Us</p>
    <p>Shipping Details</p>
  </div>

  <div class="footer_2">
    <div class="VN">
      <img src="../assets/img/VN_Flag.webp" alt="logo" />
      <span>VN</span>
    </div>
    <div class="Conver">
      <span><i class="fa-brands fa-dribbble"></i></span>
      <span>2024 Trademark</span>
    </div>
  </div>

  <div class="footer_3">
    <p>COPYRIGHT 2024 TRADEMARK. ALL RIGHTS RESERVED</p>
  </div>

  <!-- End Footer -->

  <script src="../assets/js/order.js"></script>
</body>

</html>