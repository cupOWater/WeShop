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
    echo $store_data['name'];
    echo " || Home Page";
    echo "</title>";
    ?>
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
    <?php
      $id = $_GET["id"];
      $new_products = $products;
      usort($new_products, "compare_date");
      $i = 0;
      foreach($new_products as $p){
        if($id == $p["store_id"]){
          if($i < 10){
            echo('<div class="column4">');
            echo('<a href="./products.php?id='.$id.'&id_product='.$p["id"].'"  target="_blank">');
            echo('<h3>'.$p["name"].'</h3>');
            echo('<h4>'.$p["price"].' VND</h4>');
            echo('</a>');
            echo('</div>');
            $i++;
          }else{
            break;
          }

        }
      }
    ?>

    </div>
  </div>



  <div class="subsec">
    <h1>Featured Products</h1>
    <hr>
    <div class="row scroll">
    <?php
    $id = $_GET["id"];
    $featured_products = get_featured($products, "featured_in_store");
    $i = 0;
    foreach($featured_products as $p){
      if($id == $p["store_id"]){
        if($i < 10){
          echo('<div class="column4">');
          echo('<a href="./products.php?id='.$id.'&id_product='.$p["id"].'"  target="_blank">');
          echo('<h3>'.$p["name"].'</h3>');
          echo('<h4>'.$p["price"].' VND</h4>');
          echo('</a>');
          echo('</div>');
          $i++;
        }
        else{
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

  <script src="../scripts/main.js" type="text/javascript"></script>
</body>
</html>
