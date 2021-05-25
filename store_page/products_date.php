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
    <title>Interitor | Products</title>
    <link rel="stylesheet" href="../css_file/store_style.css" type="text/css">
    <link rel="stylesheet" href="../css_file/browse.css" type="text/css">
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
      <h1>Browse Products by Date</h1>
      <div class="namebrowsing">
        <label for="search">Newest First</label> ||
        <label for="search">Oldest First</label>
      </div>
      <input type="checkbox" id="search">
      <div class="product_list">
        <h2>Product List:</h2>
        <ul>
          <li>
            <a href="single_products.html">
            <img src="../Pics/products/deconovo-bed-unsplash.jpg" alt="White bed with 4 pillows on top and 2 beside">
            <ul>
              <li>Name: Queen Size White Bed</li>
              <li>Description: A queen size bed with white sheet</li>
              <li>Price: 15.450.000 VND</li>
              <li>Created On: 16/04/2021</li>
            </ul>
            </a>
          </li>

          <li>
            <a href="single_products.html">
            <img src="../Pics/products/nathan-oakley-chair-unsplash.jpg" alt="wooden chair">
            <ul>
              <li>Name: Wooden Chair</li>
              <li>Description: Wood chair made of oak</li>
              <li>Price: 250.000 VND</li>
              <li>Created On: 15/03/2021</li>
            </ul>
            </a>
          </li>

          <li>
            <a href="single_products.html">
            <img src="../Pics/products/dmitry-mashkin-tab-unsplash.jpg" alt="a drawing tablet">
            <ul>
              <li>Name: Digital Tablet</li>
              <li>Description: A white drawing tablet for digital art</li>
              <li>Price: 13.500.000 VND</li>
              <li>Created On: 04/03/2021</li>
            </ul>
            </a>
          </li>

          <li>
            <a href="single_products.html">
            <img src="../Pics/products/nathan-oakley-pillow-unsplash.jpg" alt="2 pillows on a bench">
            <ul>
              <li>Name: Pillow</li>
              <li>Description: Cotton filled pillow for decoration</li>
              <li>Price: 300.000 VND</li>
              <li>Created On: 27/02/2021</li>
            </ul>
            </a>
          </li>
        </ul>
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
  <script src="../scripts/main.js" type="text/javascript"></script>
</body>
</html>
