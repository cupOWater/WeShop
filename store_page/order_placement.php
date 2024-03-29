<?php
require "store_function.php";
session_start();
$total = 0;

// Change value of "cart" when + or - is clicked
if (isset($_SESSION["cart"])) {
  foreach ($_SESSION["cart"] as $k => $v) {
    $tempid = $_SESSION["cart"][$k]["id"];
    if($_SESSION["cart"][$k]["quant"] <= 0){
      unset($_SESSION["cart"][$k]);
    }
    if (isset($_GET["edit"])) {
      if ($_GET["edit"] == "$tempid-dec") {
        $_SESSION["cart"][$k]["quant"]--; 
      }
      if ($_GET["edit"] == "$tempid-inc") {
        $_SESSION["cart"][$k]["quant"]++;
      }
      header("Location: order_placement.php?id=$id");
    }
  }
}
?>

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
        <h1>
          <?php
          echo "<a href='store.php?id=$id'>";
          echo $store_data['name'];
          echo "</a>";
          ?>
        </h1>

      </div>
      <div class="column">
        <div class="navbar">
          <ul>
            <li>
              <?php
              echo "<a href='store.php?id=$id'>"; ?>Home</a>
            </li>
            <li>
              <label for="product_sub">Product</label>
              <input type="checkbox" id="product_sub">
              <div class="menu_box">
                <?php
                echo "<a href='products_cat.php?id=$id'>"; ?>Category</a>
                <?php echo "<a href='products_date.php?id=$id'>"; ?>Date</a>
              </div>
            </li>

            <li>
              <?php echo "<a href='abt_us.php?id=$id'>"; ?>About Us</a>
            </li>
            <li>
              <?php echo "<a href='contact.php?id=$id'>"; ?>Contact</a>
            </li>

            <li class="hidden_menu">
              <label for="menu_top">
                <img src="../Pics/menu.png" alt="3 stripes" height="40px">
              </label>
              <input type="checkbox" id="menu_top">
              <div class="menu_box">
                <?php echo "<a href='store.php?id=$id'>"; ?>Home</a>
                <label for="product_sub">Product</label>
                <input type="checkbox" id="product_sub">
                <div class="menu_box">
                  <?php echo "<a href='products_cat.php?id=$id'>"; ?>Category</a>
                  <?php echo "<a href='products_date.php?id=$id'>"; ?>Date</a>
                </div>
                <?php echo "<a href='abt_us.php?id=$id'>"; ?>About Us</a>
                <?php echo "<a href='contact.php?id=$id'>"; ?>Contact</a>

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
          <?php
          if (isset($_SESSION["cart"])) {
            foreach ($_SESSION["cart"] as $i) {
              $item = get_single_item($products, $i["id"]);
              echo "<tr>";
              echo "<td>" . $i['id'] . " - " . $item['name'] . "</td>";
              echo "<td> <a href='order_placement.php?id=$id&edit=" . $i['id'] . "-dec'>-</a>";
              echo $i['quant'];
              echo "<a href='order_placement.php?id=$id&edit=" . $i['id'] . "-inc'>+</a></td>";
              echo "<td>" . $item["price"] * $i['quant'] . " VND</td>";
              echo "</tr>";
              $total += $item["price"] * $i['quant'];
            }
          }
          ?>
        </table>
      </div><br>
      
      <p><b>Total:</b> <span id="total"><?php echo $total; ?> VND</span></p>
      <?php echo "<a href='store.php?id=$id' class ='order'>"; ?>Continue Shopping</a>

      <?php
      if (isset($_SESSION["loggedIn"])) {
        echo "<a href='thankyou.php?id=$id' class='order'>";
      } else {
        echo "<a href='../register.php' class='order'>";
      }

      ?>Order</a>

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
    <p id="copyright">Copyright © 2021 by group 4. All Rights Reserved | <a href="../others_file/tos_copyright.php" target="_blank">Term of Service</a> </p>
  </footer>
  <script src="../scripts/main.js" type="text/javascript"></script>
</body>

</html>