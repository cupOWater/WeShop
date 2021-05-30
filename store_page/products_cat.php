<?php
require "store_function.php";
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
  echo $store_data['name'];
  echo " || Products";
  echo "</title>";
  ?>
  <link rel="stylesheet" href="../css_file/store_style.css" type="text/css">
  <link rel="stylesheet" href="../css_file/browse.css" type="text/css">
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
    <div class="subsec">
      <h1>Browse Products By Category</h1>

      <div class="catbrowsing">
        <select id="store_type" name="store_type">
          <option>Chair</option>
          <option>Table</option>
          <option>Lamp</option>
          <option>Kitchen Ware</option>
          <option>Chandelier</option>
          <option>Desk</option>
          <option>Bed</option>
          <option>Toy</option>
          <option>Technology</option>
          <option>Hobby</option>
        </select>
        <label for="search">Search</label>

      </div>
      <input type="checkbox" id="search">

      <div class="product_list">
        <h2>Product List:</h2>
        <ul>
          <li>
            <?php
            // $id = $_GET["id"];
            // $featured_products = get_featured($products,"featured_in_store");
            $display_products = $products;
            $i = 0;
            foreach ($display_products as $p) {
              if ($_GET['id'] == $p['store_id']) {
                if ($i < 20) {
                  echo ('<a href="./products.php?id=' . $_GET["id"] . '&id_product=' . $p["id"] . '">');
                  echo ('<img src="../Pics/products/box.jpg">');
                  echo ('<ul>');
                  echo ('<li>Name:' . $p["name"] . '</li>');
                  echo ('<li>' . $p["price"] . ' VND</li>');
                  echo ('<li>Created On:' . $p["created_time"] . '</li>');
                  echo ('</ul>');
                  echo ('</a>');
                  echo ('<br>');
                  echo ('<br>');
                  echo ('<hr>');
                  echo ('<br>');
                  $i++;
                } else {
                  break;
                }
              }
            }
            ?>
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