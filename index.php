<?php
  require "global_function.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>We Shop | Home Page</title>
    <link rel="stylesheet" href="./css_file/style.css" type="text/css">
    <link rel="stylesheet" href="./css_file/home.css" type="text/css">
</head>
<body>
    <div class="container">
      <header>
        <div class="row">
          <!-- Logo (154 x 112) -->
          <div class="column">
            <a href="index.html"><img id="logo" src="./Pics/logo1.png"></a>
          </div>
          <div class="column">
            <nav class="navbar">
              <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about_us.html">About</a></li>
                <li><a href="fees.html">Fees</a></li>
                <li><a href="my_account.html" class="account_href">Account</a></li>

                <li>
                  <label for="browse_sub_top">Browse</label>
                  <input type="checkbox" id="browse_sub_top">
                  <div class="sub-menu">
                    <a href="browse_name.html">Name</a>
                    <a href="browse_cat.html">Category</a>
                  </div>
                </li>

                <li><a href="faqs.html">FAQ</a></li>
                <li><a href="contact.html">Contact</a></li>

                <li class="sub-container">
                  <label for="menu-top">Menu &equiv;</label>
                  <input type="checkbox" id="menu-top">
                  <div class="sub-menu">
                    <a href="index.html">Home</a>
                    <a href="about_us.html">About</a>
                    <a href="fees.html">Fees</a>
                    <a href="my_account.html" class="account_href">Account</a>
                    <label for="browse_top_small">Browse</label>
                    <input type="checkbox" id="browse_top_small">
                    <div class="sub-menu">
                      <a href="browse_name.html">Name</a>
                      <a href="browse_cat.html">Category</a>
                    </div>
                    <a href="faqs.html">FAQ</a>
                    <a href="contact.html">Contact</a>
                  </div>
                </li>

              </ul>
            </nav>
          </div>
        </div>
      </header>

        <main>
          <div class="content">
            <h2>New Stores</h2>
            <div class="row scroll">
              <a href="./store_page/store.html" target="_blank">
                <div class="column4">
                  <img src="./Pics/interitor.png" alt="yellow house on blue background">
                  <h3>Interitor</h3>
                </div>
              </a>
              <a href="./store_page/store.html" target="_blank">
                <div class="column4">
                  <img src="./Pics/aquarium.png" alt="wave and fish on blue background">
                  <h3>Aquarius</h3>
                </div>
              </a>
              <a href="./store_page/store.html" target="_blank">
                <div class="column4">
                  <img src="./Pics/camping.png" alt="leaves, water, fire surrounding an X with Camping at the bottom">
                  <h3>Camper X</h3>
                </div>
              </a>
              <a href="./store_page/store.html" target="_blank">
                <div class="column4">
                  <img src="./Pics/nhatobanson.PNG" alt="Title nhatobanson with a lipstick at the end">
                  <h3>Nha To Ban Son</h3>
                </div>
              </a>

            </div>
          </div>

          <div class="content" id="auto_scroll">
            <h2>New Products</h2>
            <div class="row scroll" >
              <div class="column4">
                <a href="./store_page/single_products.html">
                  <img src="./Pics/products/manny-moreno-tent-unsplash.jpg" alt="red tent">
                  <h3>Red Tent</h3>
                  <h4>1.250.000 VND</h4>
                </a>
                <a href="./store_page/store.html">
                  <h4>Camper X</h4>
                </a>

              </div>
              <div class="column4">
                <a href="./store_page/single_products.html">
                  <img src="./Pics/products/andrew-neel-bp-unsplash.jpg" alt="brown canvas backpack">
                  <h3>Canvas Backpack</h3>
                  <h4>1.500.000 VND</h4>
                </a>
                <a href="./store_page/store.html">
                  <h4>Camper X</h4>
                </a>
              </div>

              <div class="column4">
                <a href="./store_page/single_products.html">
                  <img src="./Pics/products/deconovo-bed-unsplash.jpg" alt="White bed with 4 pillows on top and 2 beside">
                  <h3>Queen size white bed</h3>
                  <h4>15.450.000 VND</h4>
                </a>
                <a href="./store_page/store.html">
                  <h4>Interitor</h4>
                </a>
              </div>

              <div class="column4">
                <a href="./store_page/single_products.html">
                  <img src="./Pics/products/mitch-nielsen-drone-unsplash.jpg" alt="white drone on sky">
                  <h3>Camera Drone</h3>
                  <h4>20.145.000 VND</h4>
                </a>
                <a href="./store_page/store.html">
                  <h4>Aquarius</h4>
                </a>
              </div>
              <div class="column4">
                <a href="./store_page/single_products.html">
                  <img src="./Pics/products/joshua-bartell-lan-unsplash.jpg" alt="old school lantern">
                  <h3>Camping Lantern</h3>
                  <h4>450.000 VND</h4>
                </a>
                <a href="./store_page/store.html">
                  <h4>Camper X</h4>
                </a>
              </div>
              <div class="column4">
                <a href="./store_page/single_products.html">
                  <img src="./Pics/products/nathan-oakley-book-unsplash.jpg" alt="">
                  <h3>Bookshelf</h3>
                  <h4>850.000 VND</h4>
                </a>
                <a href="./store_page/store.html">
                  <h4>Interitor</h4>
                </a>
              </div>
              <div class="column4">
                <a href="./store_page/single_products.html">
                  <img src="./Pics/products/nathan-oakley-pillow-unsplash.jpg" alt="">
                  <h3>Pillow</h3>
                  <h4>300.000 VND</h4>
                </a>
                <a href="./store_page/store.html">
                  <h4>Interitor</h4>
                </a>
              </div>
              <div class="column4">
                <a href="./store_page/single_products.html">
                  <img src="./Pics/products/IMG_2521.JPG" alt="">
                  <h3>MAC</h3>
                  <h4>600.000 VND</h4>
                </a>
                <a href="./store_page/store.html">
                  <h4>Nha To Ban Son</h4>
                </a>
              </div>
              <div class="column4">
                <a href="./store_page/single_products.html">
                  <img src="./Pics/products/IMG_2535.JPG" alt="">
                  <h3>YSL</h3>
                  <h4>820.000 VND</h4>
                </a>
                <a href="./store_page/store.html">
                  <h4>Nha To Ban Son</h4>
                </a>
              </div>
              <div class="column4">
                <a href="./store_page/single_products.html">
                  <img src="./Pics/products/nathan-oakley-table-unsplash.jpg" alt="">
                  <h3>Wood Table</h3>
                  <h4>500.000 VND</h4>
                </a>
                <a href="./store_page/store.html">
                  <h4>Interitor</h4>
                </a>
              </div>
              </div>
            </div>

            <div class="content">
              <h2>Store Features</h2>
              <div class="row scroll">
                <a href="./store_page/store.html" target="_blank">
                  <div class="column2">
                    <img src="./Pics/interitor.png" alt="yellow house on blue background">
                    <h3>Interitor</h3>
                  </div>
                </a>
                <a href="./store_page/store.html" target="_blank">
                  <div class="column2">
                    <img src="./Pics/camping.png" alt="leaves, water, fire surrounding an X with Camping at the bottom">
                    <h3>Camper X</h3>
                </a>
              </div>
            </div>
          </div>
            <div class="content">
              <h2>Featured Products</h2>
              <div class="row scroll">
                <div class="column4">
                  <a href="./store_page/single_products.html">
                    <img src="./Pics/products/manny-moreno-tent-unsplash.jpg" alt="">
                    <h3>Red Tent</h3>
                    <h4>1.250.000 VND</h4>
                  </a>
                  <a href="./store_page/store.html">
                    <h4>Camper X</h4>
                  </a>
                </div>
                <div class="column4">
                  <a href="./store_page/single_products.html">
                    <img src="./Pics/products/joshua-bartell-lan-unsplash.jpg" alt="">
                    <h3>Camping Lantern</h3>
                    <h4>450.000 VND</h4>
                  </a>
                  <a href="./store_page/store.html">
                    <h4>Camper X</h4>
                  </a>
                </div>
                <div class="column4">
                  <a href="./store_page/single_products.html">
                    <img src="./Pics/products/andrew-neel-bp-unsplash.jpg" alt="">
                    <h3>Canvas Backpack</h3>
                    <h4>1.500.000 VND</h4>
                  </a>
                  <a href="./store_page/store.html">
                    <h4>Camper X</h4>
                  </a>
                </div>
                <div class="column4">
                  <a href="./store_page/single_products.html">
                    <img src="./Pics/products/deconovo-bed-unsplash.jpg" alt="">
                    <h3>Queen size white bed</h3>
                    <h4>15.450.000 VND</h4>
                  </a>
                  <a href="./store_page/store.html">
                    <h4>Interitor</h4>
                  </a>
                </div>
                <div class="column4">
                  <a href="./store_page/single_products.html">
                    <img src="./Pics/products/nathan-oakley-pillow-unsplash.jpg" alt="">
                    <h3>Pillow</h3>
                    <h4>300.000 VND</h4>
                  </a>
                  <a href="./store_page/store.html">
                    <h4>Interitor</h4>
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
          <div class="row">

            <div class="column">
              <div class="newsletter">
                <form action="success.html">
                  <label for="section3">RECEIVE OUR NEWSLETTER:</label><br>
                  <input type="email" name="signup" id="newsletter">
                  <input type="submit" value="Sign Up" id="submit">
                </form>
              </div>
            </div>
            <div class="column">
              <nav class="navbar">
                <ul>
                  <li><a href="index.html">Home</a></li>
                  <li><a href="about_us.html">About</a></li>
                  <li><a href="fees.html">Fees</a></li>
                  <li><a href="my_account.html" class="account_href">Account</a></li>
                  <li>
                    <label for="browse_sub_bot">Browse</label>
                    <input type="checkbox" id="browse_sub_bot">
                    <div class="sub-menu">
                      <a href="browse_name.html">Name</a>
                      <a href="browse_cat.html">Category</a>
                    </div>
                  </li>

                  <li><a href="faqs.html">FAQ</a></li>
                  <li><a href="contact.html">Contact</a></li>

                  <li class="sub-container">
                    <label for="menu-bot">Menu &equiv;</label>
                    <input type="checkbox" id="menu-bot">
                    <div class="sub-menu">
                      <a href="index.html">Home</a>
                      <a href="about_us.html">About</a>
                      <a href="fees.html">Fees</a>
                      <a href="my_account.html" class="account_href">Account</a>
                      <label for="browse_bot_small">Browse</label>
                      <input type="checkbox" id="browse_bot_small">
                      <div class="sub-menu">
                        <a href="browse_name.html">Name</a>
                        <a href="browse_cat.html">Category</a>
                      </div>
                      <a href="faqs.html">FAQ</a>
                      <a href="contact.html">Contact</a>
                    </div>
                  </li>

                </ul>
              </nav>
            </div>
          </div>
          <div class="copyright">
            <p id="copyright">Copyright © 2021 by group 4. All Rights Reserved | <a href="./others_file/tos_copyright.html" target="_blank">Term of Service</a> </p>
          </div>
        </footer>
        <script src="./scripts/main.js" type="text/javascript"></script>
    </div>

</body>
</html>
