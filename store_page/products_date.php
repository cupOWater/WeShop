<?php
require "store_function.php";
$store_prod = [];
foreach ($products as $p) {
  if ($p["store_id"] == $id) {
    $store_prod[] = $p;
  }
}
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
      <h1>Browse Products by Date</h1>
      <div class="namebrowsing">
        <form action="products_date.php" method="post">
          <?php
          echo ('<a href="products_date.php?id=' . $_GET["id"] . '&sort=' . $string_one . '&page=1">');
          echo $string_one;
          echo ('</a>');
          echo ('<a href="products_date.php?id=' . $_GET["id"] . '&sort=' . $string_two . '&page=1">');
          echo $string_two;
          echo ('</a>');
          ?>
        </form>
      </div>
      <div class="product_list">
        <h2>Product List:</h2>
        <ul>
          <li>
            <?php
            if (isset($_GET["sort"]) && isset($_GET["page"])) {
              if (strcmp($_GET["sort"], $string_one)) {
                $display_products = $store_prod;
                usort($display_products, "compare_date1");
              }
              if (strcmp($_GET["sort"], $string_two)) {
                $display_products = $store_prod;
                usort($display_products, "compare_date");
              }

              $max_prod = count($display_products);
              $index = 2 * $_GET["page"] - 2;
              // Only display 1 if there's only 1 item left
              if ($_GET["page"] >= $max_prod / 2 && $max_prod % 2 != 0) {
                $prod = [$display_products[$index]];
              } else {
                $prod = [$display_products[$index], $display_products[$index + 1]];
              }
              foreach ($prod as $p) {
                echo ('<a href="./products.php?id=' . $_GET["id"] . '&id_product=' . $p["id"] . '">');
                echo ('<img src="../Pics/products/box.jpg">');
                echo ('<ul>');
                echo ('<li><b>Name</b>: ' . $p["name"] . '</li>');
                echo ('<li><b>Price</b>: ' . $p["price"] . ' VND</li>');
                echo ('<li><b>Created On</b>: ' . $p["created_time"] . '</li>');
                echo ('</ul>');
                echo ('</a>');
                echo ('<hr>');
                echo ('<br>');
              }

            ?>
          </li>
        </ul>
      </div>
      <div class="page_select">
      <?php
              // This is still inside the if statement above
              $next = "Next";
              $prev = "Previous";
              if ($_GET["page"] <= 1) {
                $prev = "";
              }
              if ($_GET["page"] >= $max_prod / 2) {
                $next = "";
              }
              echo ('<a href="products_date.php?id=' . $_GET["id"] . '&sort=' . $_GET["sort"] . '&page=' . $_GET["page"] - 1 . '">' . $prev . '</a>');
              echo ('<a href="products_date.php?id=' . $_GET["id"] . '&sort=' . $_GET["sort"] . '&page=' . $_GET["page"] + 1 . '">' . $next . '</a>');
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
  <script src="../scripts/main.js" type="text/javascript"></script>
</body>

</html>