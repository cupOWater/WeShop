<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css_file/style.css" type="text/css">
    <link rel="stylesheet" href="./css_file/login_page.css" type="text/css">
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

          <div class="content login">
            <h2>Sign-In</h2>
            <form action="#" method="post">
              <label for="u_email">Email</label> <br>
              <input type="email" id="u_email" name="user_email">
              <br>
              <label for="u_password">Password</label> <br>
              <input type="password" id="u_password" name="user_password"></br>
              <input type="button" value="Login" id="login_button" onclick="validate_user()" name="login">
              <!-- <p>Invalid user</p> -->
              <br>
            </form>
            <p id="error_msg">Invalid User</p>
            <p><a href="register.php">Register Here!</a></p>
            <p><a href="forgot_password.html">Forgot Password?</a></p>
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

  </div>
  <script src="./scripts/account.js" type="text/javascript"></script>
  <script src="./scripts/main.js" type="text/javascript"></script>
</body>
</html>
