<?php
require "../read_data.php";
$products = read_csv_data("../data/products.csv");
$stores = read_csv_data("../data/stores.csv");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    $id = $_GET["id"];
    $store_data = get_single_item($stores, $id);
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
          $id = $_GET["id"];
          $store_data = get_single_item($stores, $id);
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
              $id = $_GET["id"];
              $store_data = get_single_item($stores, $id);
              echo "<a href='store.php?id=$id'>";
              echo "Home";
              echo "</a>";
              ?>
            </li>

            <li>
              <label for="product_sub">Product</label>
              <input type="checkbox" id="product_sub">
              <div class="menu_box">
              <?php
              $id = $_GET["id"];
              $store_data = get_single_item($stores, $id);
              echo "<a href='products_cat.php?id=$id'>";
              echo "Category";
              echo "</a>";
              ?>
              <?php
              $id = $_GET["id"];
              $store_data = get_single_item($stores, $id);
              echo "<a href='products_date.php?id=$id'>";
              echo "Date";
              echo "</a>";
              ?>
                
              </div>
            </li>

            <li>
            <?php
              $id = $_GET["id"];
              $store_data = get_single_item($stores, $id);
              echo "<a href='abt_us.php?id=$id'>";
              echo "About Us";
              echo "</a>";
              ?>
            </li>
            <li>
            <?php
              $id = $_GET["id"];
              $store_data = get_single_item($stores, $id);
              echo "<a href='contact.php?id=$id'>";
              echo "Contact";
              echo "</a>";
              ?>
            </li>

            <li class="hidden_menu">
                <label for="menu_top">
                  <img src="../Pics/menu.png" alt="3 stripes" height="40px">
                </label>
                <input type="checkbox" id="menu_top">
                <div class="menu_box">
                  <?php
                    $id = $_GET["id"];
                    $store_data = get_single_item($stores, $id);
                    echo "<a href='store.php?id=$id'>";
                    echo "Home";
                    echo "</a>";
                  ?>
                  <label for="product_sub">Product</label>
                  <input type="checkbox" id="product_sub">
                  <div class="menu_box">
                  <?php
                  $id = $_GET["id"];
                  $store_data = get_single_item($stores, $id);
                  echo "<a href='products_cat.php?id=$id'>";
                  echo "Category";
                  echo "</a>";
                  ?>
                  <?php
                  $id = $_GET["id"];
                  $store_data = get_single_item($stores, $id);
                  echo "<a href='products_date.php?id=$id'>";
                  echo "Date";
                  echo "</a>";
                  ?>

                  </div>
                  <?php
                  $id = $_GET["id"];
                  $store_data = get_single_item($stores, $id);
                  echo "<a href='abt_us.php?id=$id'>";
                  echo "About Us";
                  echo "</a>";
                  ?>
                  <?php
                  $id = $_GET["id"];
                  $store_data = get_single_item($stores, $id);
                  echo "<a href='contact.php?id=$id'>";
                  echo "Contact";
                  echo "</a>";
                  ?>
                  
                </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </header>

  <main>
    <div class="product_content">
        <h1 id="product_name">Oak Wood Table</h1>
        <div class="product_pic">
            <img src="../Pics/products/nathan-oakley-table-unsplash.jpg" alt="Wooden table with 4 chairs">
        </div>
        <ul class="description">
            <li><b>Description:</b><span> A wooden table set made from oak wood</span></li>
            <li>Manufacture: WoodWork Ltd.</li>
            <li>Status: Available</li>
            <li>Warranty: 2 years</li>
            <li class="price">Price: <span id="product_price">500.000</span> VND</li>
        </ul>
        <a href="./order_placement.html" class="order" id="buy_now">Buy Now</a>
        <input type="button" value="Add" class="order" id="add_cart">
        <a href="./order_placement.html" class="order" id="cart_icon"><i class="fa fa-shopping-cart"></i></a>
        <br>
        <span id="add_msg"></span>
      </div>

      <div class="recomended_products">
        <h2>Recommended Products:</h2>
        <div class="row scroll">
          <div class="column4">
            <a href="single_product_book.html">
              <img src="../Pics/products/nathan-oakley-book-unsplash.jpg" alt="wooden bookshelf">
              <h3>Bookshelf</h3>
              <h4>850.000 VND</h4>
            </a>
          </div>
          <div class="column4">
            <a href="single_product_book.html">
              <img src="../Pics/products/nathan-oakley-pillow-unsplash.jpg" alt="2 pillows on a bench">
              <h3>Pillow</h3>
              <h4>300.000 VND</h4>
            </a>
          </div>
          <div class="column4">
            <a href="single_product_book.html">
              <img src="../Pics/products/Pd1.jpg" alt="Fountain-like chandelier">
              <h3>Fountain Chandelier</h3>
              <h4>3.250.000 VND</h4>
            </a>
          </div>
          <div class="column4">
            <a href="single_product_book.html">
              <img src="../Pics/products/Pd2.jpg" alt="Blue and gold chandelier">
              <h3>Ornament Chandelier</h3>
              <h4>2.845.000 VND</h4>
            </a>
          </div>
          <div class="column4">
            <a href="single_product_book.html">
              <img src="../Pics/products/dmitry-mashkin-tab-unsplash.jpg" alt="a drawing tablet">
              <h3>Tablet</h3>
              <h4>13.500.000 VND</h4>
            </a>
          </div>
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
