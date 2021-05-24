<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Out</title>
    <link rel="stylesheet" href="../css_file/store_style.css" type="text/css">
    <link rel="stylesheet" href="../css_file/order.css" type="text/css">
</head>
<body>
  <header>
    <div class="row">
      <div class="column">
        <h1><a href="store.html">
          <img src="../Pics/interitor.png" alt="logo" width="150" height="150" class="img_logo">
        </a></h1>
      </div>
      <div class="column">
        <div class="navbar">
          <ul>
            <li><a href="store.html">Home</a></li>

            <li>
              <label for="product_sub">Product</label>
              <input type="checkbox" id="product_sub">
              <div class="menu_box">
                <a href="products_cat.html">Category</a>
                <a href="products_date.html">Date</a>
              </div>
            </li>

            <li><a href="abt_us.html">About Us</a></li>
            <li><a href="contact.html">Contact</a></li>

            <li class="hidden_menu">
                <label for="menu_top">
                  <img src="../Pics/menu.png" alt="3 stripes" height="40px">
                </label>
                <input type="checkbox" id="menu_top">
                <div class="menu_box">
                  <a href="store.html">Home</a>
                  <label for="product_sub">Product</label>
                  <input type="checkbox" id="product_sub">
                  <div class="menu_box">
                    <a href="products_cat.html">By Category</a>
                    <a href="products_date.html">By Date</a>
                  </div>
                  <a href="abt_us.html">About Us</a>
                  <a href="contact.html">Contact</a>
                </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </header>

  <main>

    <div class="order_container">
      <h2>CHECK OUT</h2>
      <div class="cart">
        <table class="cart_table">
          <thead>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Price</th>
          </thead>
        </table>
      </div><br>
      <label for="coupon"><b>Coupon Code</b></label>
      <input type="text" id="coupon">
      <span id="coupon_setting">
        <input type="button" value="Apply" onclick="apply_coupon()">
        <input type="button" value="Reset" onclick="reset_coupon()">
      </span>
      <p id="coupon_msg"></p>
      <p><b>Total:</b> <span id="total">0 VND</span></p>
      <a href="products_cat.html" class="order">Continue Shopping</a>
      <a href="thankyou.html" class="order">Order</a>
  </div>

  <div id="cookie">
    <h2>I use cookie</h2>
    <p>My website uses cookies necessary for its basic 
      functioning. By continuing browsing, you consent
      to my use of cookies and other technologies
    </p>
    <input id="cookie_accept" type="button" value="I understand">
  </div>
  </main>

  <footer>
    <hr>
    <div class="navbar">
      <ul>
        <li><a href="store.html">Home</a></li>
        <li>
          <label for="product_sub_bot">Product</label>
          <input type="checkbox" id="product_sub_bot">
          <div class="menu_box">
            <a href="products_cat.html">Category</a>
            <a href="products_date.html">Date</a>
          </div>
        </li>
        <li><a href="abt_us.html">About Us</a></li>
        <li><a href="contact.html">Contact</a></li>
        <li class="hidden_menu">
            <label for="menu_bot">
              <img src="../Pics/menu.png" alt="3 stripes &equiv;" height="40px">
            </label>
            <input type="checkbox" id="menu_bot">
            <div class="menu_box">
              <a href="store.html">Home</a>
              <label for="product_sub_bot">Product</label>
              <input type="checkbox" id="product_sub_bot">
              <div class="menu_box">
                <a href="products_cat.html">Category</a>
                <a href="products_date.html">Date</a>
              </div>
              <a href="abt_us.html">About Us</a>
              <a href="contact.html">Contact</a>
            </div>
          </li>
      </ul>
    </div>
    <p id="copyright">Copyright © 2021 by group 4. All Rights Reserved | <a href="../others_file/tos_copyright.html" target="_blank">Term of Service</a> </p>
  </footer>
  <script src="../scripts/main.js" type="text/javascript"></script>
  <script src="../scripts/ordering.js" type="text/javascript"></script>
</body>
</html>
