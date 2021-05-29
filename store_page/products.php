<?php
  require "store_function.php";
  $product_id = $_GET["id_product"];
  $product_data = get_single_product($products, $product_id);
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
  echo "<title>";
  // Change by product name
  echo $store_data['name'];
  echo " || Product";
  echo "</title>";
  ?>
  <link rel="stylesheet" href="../css_file/store_style.css" type="text/css">
  <link rel="stylesheet" href="../css_file/product.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <div class="product_content">
      <?php
      echo ('<h1 id="product_name">');
      echo  $product_data["id"].' - '.$product_data["name"];
      echo ('</h1>');
      ?>
      <div class="product_pic">
        <?php echo ('<img src="../Pics/products/box.jpg" alt= ' . $product_data["name"] . '>');?>
      </div>
      <ul class="description">
        <li><b>Description:</b><span> To be added</span></li>
        <li>Manufacture: <?php echo($store_data["name"]);?></li>
        <li>Status: Available</li>
        <li>Warranty: 2 years</li>
        <li class="price">Price:
          <span id="product_price"><?php echo $product_data["price"];?></span>VND</li>
      </ul>
      
      <a href="./order_placement.php?id=<?php echo($id);?>" class="order" id="buy_now">Buy Now</a>
      <input type="button" value="Add" class="order" id="add_cart">
      <a href="./order_placement.php?id=<?php echo($id);?>" class="order" id="cart_icon"><i class="fa fa-shopping-cart"></i></a>
      <br>
      <span id="add_msg"></span>
    </div>

    <div class="recomended_products">
      <h2>Recommended Products:</h2>
      <div class="row scroll">
        <?php
        $id = $_GET["id"];
        $new_products = $products;
        usort($new_products, "compare_date");
        $i = 0;
        foreach ($new_products as $p) {
          if ($id == $p["store_id"]) {
            if ($i < 10) {
              echo ('<div class="column4">');
              echo ('<a href="./products.php?id=' . $id . '&id_product=' . $p["id"] . '"  target="_blank">');
              echo ('<h3>' . $p["name"] . '</h3>');
              echo ('<h4>' . $p["price"] . ' VND</h4>');
              echo ('</a>');
              echo ('</div>');
              $i++;
            } else {
              break;
            }
          }
        }
        ?>
      </div>
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

  <script src="../scripts/ordering.js" type="text/javascript"></script>
  <script src="../scripts/main.js" type="text/javascript"></script>
</body>

</html>