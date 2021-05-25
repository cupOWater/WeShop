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
    <title>Interitor | Home Page</title>
    <link rel="stylesheet" href="../css_file/store_style.css" type="text/css">
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
    <div class="subsec">
      <h1>New Products</h1>
      <hr>
      <div class="row scroll">
        <div class="column4">
          <a href="single_products.html">
            <img src="../Pics/products/deconovo-bed-unsplash.jpg" alt="White bed with 4 pillows on top and 2 beside">
            <h3>Queen size white bed</h3>
            <h4>15.450.000 VND</h4>
          </a>
        </div>
        <div class="column4">
          <a href="single_products.html">
            <img src="../Pics/products/nathan-oakley-pillow-unsplash.jpg" alt="2 pillows on a bench">
            <h3>Pillow</h3>
            <h4>300.000 VND</h4>
          </a>
        </div>
        <div class="column4">
          <a href="single_products.html">
            <img src="../Pics/products/nathan-oakley-table-unsplash.jpg" alt="wooden table with 3 chairs and vases on top">
            <h3>Wood Tabel</h3>
            <h4>500.000 VND</h4>
          </a>
        </div>
        <div class="column4">
          <a href="single_products.html">
            <img src="../Pics/products/nathan-oakley-book-unsplash.jpg" alt="wooden bookshelf">
            <h3>Bookshelf</h3>
            <h4>850.000 VND</h4>
          </a>
        </div>
        <div class="column4">
          <a href="single_products.html">
            <img src="../Pics/products/nathan-oakley-chair-unsplash.jpg" alt="wooden chair">
            <h3>Wood Chair</h3>
            <h4>250.000 VND</h4>
          </a>
        </div>
        <div class="column4">
          <a href="single_products.html">
            <img src="../Pics/products/dmitry-mashkin-tab-unsplash.jpg" alt="a drawing tablet">
            <h3>Tablet</h3>
            <h4>13.500.000 VND</h4>
          </a>
        </div>
      </div>
    </div>
    <div class="subsec">
      <h1>Featured Products</h1>
      <hr>
      <div class="row scroll">
        <div class="column4">
          <a href="single_products.html">
            <img src="../Pics/products/deconovo-bed-unsplash.jpg" alt="White bed with 4 pillows on top and 2 beside">
            <h3>Queen size white bed</h3>
            <h4>15.450.000 VND</h4>
          </a>
        </div>
        <div class="column4">
          <a href="single_products.html">
            <img src="../Pics/products/nathan-oakley-book-unsplash.jpg" alt="wooden bookshelf">
            <h3>Bookshelf</h3>
            <h4>850.000 VND</h4>
          </a>
        </div>
        <div class="column4">
          <a href="single_products.html">
            <img src="../Pics/products/nathan-oakley-chair-unsplash.jpg" alt="wooden chair">
            <h3>Wood Chair</h3>
            <h4>250.000 VND</h4>
          </a>
        </div>
        <div class="column4">
          <a href="single_products.html">
            <img src="../Pics/products/nathan-oakley-pillow-unsplash.jpg" alt="2 pillows on a bench">
            <h3>Pillow</h3>
            <h4>300.000 VND</h4>
          </a>
        </div>
        <div class="column4">
          <a href="single_products.html">
            <img src="../Pics/products/nathan-oakley-table-unsplash.jpg" alt="wooden table with 3 chairs and vases on top">
            <h3>Wood Table</h3>
            <h4>500.000 VND</h4>
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
</body>
</html>
