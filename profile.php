<?php
require "global_function.php";
session_start();
if (!isset($_SESSION["loggedIn"])) {
  header("Location: my_account.php");
}
$user = $_SESSION["userData"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>
  <link rel="stylesheet" href="./css_file/style.css" type="text/css">
  <link rel="stylesheet" href="./css_file/login_page.css" type="text/css">
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
      <div class="content profile">
        <div class="row">
          <div class="column">
            <h2> Profile Picture </h2>
            <p>
              <img id="pf" src="./Pics/profile-picture.png" alt="Generic person profile">
            </p>
            <h2>Full Name</h2>
            <p><?php echo $user["fname"] . " " . $user["lname"] ?></p>
            <h2>Email</h2>
            <p><?php echo $user["email"] ?></p>
          </div>
          <div class="column">
            <h2>Country</h2>
            <p><?php echo $user["country"] ?></p>
            <h2>City</h2>
            <p><?php echo $user["city"] ?></p>
            <h2>Address</h2>
            <p><?php echo $user["address"] ?></p>
            <a href="logout.php">Logout</a>
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
      </div>
      <div class="copyright">
        <p id="copyright">Copyright © 2021 by group 4. All Rights Reserved | <a href="./others_file/tos_copyright.php" target="_blank">Term of Service</a> </p>
      </div>
    </footer>

  </div>
  <script src="./scripts/account.js" type="text/javascript"></script>
  <script src="./scripts/main.js" type="text/javascript"></script>
</body>

</html>