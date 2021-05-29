<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Browse</title>
  <link rel="stylesheet" href="./css_file/style.css">
  <link rel="stylesheet" href="./css_file/browse.css">
  <link rel="stylesheet" href="./css_file/home.css">
</head>

<body>
  <div class="container">
    <header>
      <div class="row">
        <!-- Logo (154 x 112) -->
        <div class="column">
          <a href="index.php"><img id="logo" src="./Pics/logo1.png"></a>
        </div>
        <div class="column">
          <nav class="navbar">
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="about_us.php">About</a></li>
              <li><a href="fees.php">Fees</a></li>
              <li><a href="my_account.php" class="account_href">Account</a></li>

              <li>
                <label for="browse_sub_top">Browse</label>
                <input type="checkbox" id="browse_sub_top">
                <div class="sub-menu">
                  <a href="browse_name.php">Name</a>
                  <a href="browse_cat.php">Category</a>
                </div>
              </li>

              <li><a href="faqs.php">FAQ</a></li>
              <li><a href="contact.php">Contact</a></li>

              <li class="sub-container">
                <label for="menu-top">Menu &equiv;</label>
                <input type="checkbox" id="menu-top">
                <div class="sub-menu">
                  <a href="index.php">Home</a>
                  <a href="about_us.php">About</a>
                  <a href="fees.php">Fees</a>
                  <a href="my_account.php" class="account_href">Account</a>
                  <label for="browse_top_small">Browse</label>
                  <input type="checkbox" id="browse_top_small">
                  <div class="sub-menu">
                    <a href="browse_name.php">Name</a>
                    <a href="browse_cat.php">Category</a>
                  </div>
                  <a href="faqs.php">FAQ</a>
                  <a href="contact.php">Contact</a>
                </div>
              </li>

            </ul>
          </nav>
        </div>
      </div>
    </header>

    <main>
      <div class="content">
        <h1>Browse By Category</h1>

        <div class="catbrowsing">

          <select id="store_type" name="store_type">
            <option value="dep">Department</option>
            <option value="groc">Grocery</option>
            <option value="rest">Restaurant</option>
            <option value="acces">Accessory</option>
            <option value="pharm">Pharmacy</option>
            <option value="tech">Technology</option>
            <option value="pet">Pet</option>
            <option value="toy">Toy</option>
            <option value="special">Specialty</option>
            <option value="thrift">Thrift</option>
            <option value="serv">Services</option>
            <option value="kio">Kiosk</option>
            <option value="clothe">Clothing</option>
          </select>
          <label for="search">Search</label>
        </div>
        <input type="checkbox" id="search">
        <div class="store_list">
          <h2>Store List:</h2>
          <ul>
            <li><a href="./store_page/store.html">
                <img src="./Pics/aquarium.png" alt="fish and wave on blue background">
                Aquarius
              </a></li>
            <li><a href="./store_page/store.html">
                <img src="./Pics/babyboo.png" alt="pink circle, green triangle, blue square and title baby boo">
                Baby boo
              </a></li>
            <li><a href="./store_page/store.html">
                <img src="./Pics/camping.png" alt="leaves, water, fire surrounding an X with Camping at the bottom">
                Camper X
              </a></li>
            <li><a href="./store_page/store.html">
                <img src="./Pics/interitor.png" alt="wave and fish on blue background">
                Interitor
              </a></li>
            <li><a href="./store_page/store.html">
                <img src="./Pics/nhatobanson.PNG" alt="Title nhatobanson with a lipstick at the end">
                Nhatobanson</a></li>
            <li><a href="./store_page/store.html">
                <img src="./Pics/sweetcandy.png" alt="Pink heart with baby boo written on top">
                Sweet Candy
              </a></li>
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
      </div>
      <div class="copyright">
        <p id="copyright">Copyright © 2021 by group 4. All Rights Reserved | <a href="./others_file/tos_copyright.php" target="_blank">Term of Service</a> </p>
      </div>
    </footer>

  </div>
  <script src="./scripts/main.js" type="text/javascript"></script>
</body>

</html>