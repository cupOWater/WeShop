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
    echo " || About Us";
    echo "</title>";
    ?>
    <link rel="stylesheet" href="../css_file/store_style.css" type="text/css">
    <link rel="stylesheet" href="../css_file/about_us.css">
    <script src="../scripts/overlay.js"></script>
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
    <div class="as_header"><h1>ABOUT US</h1></div>

    <div class="as_container">
      <div class="as_content">
        <h2>Member 1:</h2>
        <ul>
          <li>Fullname: Le Trung Tin</li>
          <li>Date of Birth: 02/01/2000</li>
          <li>sID: S3752975</li>
          <li>Hobbies: Basketball || Games || Travel</li>
        </ul><br>
        <div class="overlay" id="overlay" onclick="off()">
          <div class="text">
            <h2>Le Trung Tin</h2>
            <ul>
              <li>Date of Birth: 02/01/2000</li>
              <li>sID: S3752975</li>
              <li>Hobbies: Basketball || Games || Travel || Party</li>
            </ul>
          </div>
        </div>1
        <div class="profile"><img src="../profile_pics/ltt.JPG" alt="Picture of Tin" onclick="on()"></div>
      </div>
      <div class="as_content">
        <h2>Member 2:</h2>
        <!-- <img src="./Pics/huynhkythanh.jpg" alt="Picture of Thanh"> -->
        <ul>
          <li>Fullname: Huynh Ky Thanh</li>
          <li>Date of Birth: 28/5/2002</li>
          <li>sID: S3884734</li>
          <li>Hobbies: Playing games || Drawing</li>
        </ul><br>
        <div class="overlay" id="overlay2" onclick="off()">
          <div class="text">
            <h2>Huynh Ky Thanh</h2>
            <ul>
              <li>Date of Birth: 28/5/2002</li>
              <li>sID: S3884734</li>
              <li>Hobbies: Playing games || Drawing</li>
            </ul>
          </div>
        </div>
        <div class="profile"><img src="../profile_pics/hkt.jpg" alt="Picture of Thanh" onclick="on1()"></div>
      </div>

      <div class="as_content">
        <h2>Member 3:</h2>
        <ul>
          <li>Fullname: Doan Duong Minh Anh</li>
          <li>Date of Birth: 23/09/2001</li>
          <li>sID: S3863946</li>
          <li>Hobbies: Football || Travel</li>
        </ul><br>
        <div class="overlay" id="overlay3" onclick="off()">
          <div class="text"><h1>Withdrawn from course</h1></div>
        </div>
        <div class="profile"><img src="../profile_pics/dma.JPG" alt="Picture of MAnh" onclick="on2()"></div>
      </div>
      <div class="as_content">
        <h2>Member 4:</h2>
        <ul>
          <li>Fullname: Tang Hue Thy</li>
          <li>Date of Birth: 19/7/1999</li>
          <li>sID: s3697323</li>
          <li>Hobbies: Reading || Drawing</li>
        </ul><br>
        <div class="overlay" id="overlay4" onclick="off()">
          <div class="text">
            <h2>Tang Hue Thy</h2>
            <ul>
              <li>Date of Birth: 19/7/1999</li>
              <li>sID: s3697323</li>
              <li>Hobbies: Reading || Drawing</li>
            </ul>
          </div>
        </div>
        <div class="profile"><img src="../profile_pics/tht.jpg" alt="Picture of Thy" onclick="on3()"></div>
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
