<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FAQ</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="./css_file/style.css">
  <link rel="stylesheet" href="./css_file/faqs.css">
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
      <div class="faq_header"><a href="./faqs.php">
          <h2>Frequently Asked Questions</h2>
        </a></div>

      <div class="faq_content">
        <div class="faq_container">
          <div class="question" id="Q1">
            <a class="item_link" href="#Q1">
              How can I purchase products online?
              <i class="fa fa-plus"></i>
              <i class="fa fa-minus"></i>
            </a>
            <div class="answer">
              <p>
              <ul class="ans">Steps:
                <li>Access to our <a href="./index.php" target="_blank">website.</a></li>
                <li>Select any store you want to access.</li>
                <li>Choose a product and add it to cart.</li>
                <li>Press purchase button any fill in your information, if you have not become our membership.</li>
              </ul>
              </p>

            </div>
          </div>
        </div>

        <div class="faq_container">
          <div class="question" id="Q2">
            <a class="item_link" href="#Q2">
              How can I become a member?
              <i class="fa fa-plus"></i>
              <i class="fa fa-minus"></i>
            </a>
            <div class="answer">
              <p>First, you have to register an account on our <a href="./register.php" target="_blank">website.</a><br> After that, you have to shop up to 200$ to gain points and receive
                our <a href="./fees.php" target="_blank">incentives.</p>
            </div>
          </div>
        </div>

        <div class="faq_container">
          <div class="question" id="Q3">
            <a class="item_link" href="#Q3">
              Refund policy.
              <i class="fa fa-plus"></i>
              <i class="fa fa-minus"></i>
            </a>
            <div class="answer">
              <p>1. Your products can be refunded in 7 days from buying date.<br>
                2. You must keep the receipt when refund. <br>
                3. We only accept refunded products that have technical issues. <br>
                4. Clothes that does not fit your size. </p>
            </div>
          </div>
        </div>

        <div class="faq_container">
          <div class="question" id="Q4">
            <a class="item_link" href="#Q4">
              Payment Methods.
              <i class="fa fa-plus"></i>
              <i class="fa fa-minus"></i>
            </a>
            <div class="answer">
              <p>
                1. Credit Cards (Visa, Mastercard, Napas are allowed). <br>
                2. Pay by cash. <br>
                3. Internet Banking for online shoppers. <br>
                4. Instalment Payment for 0%. <br>
              </p>
            </div>
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
  <script src="./scripts/main.js" type="text/javascript"></script>
</body>

</html>