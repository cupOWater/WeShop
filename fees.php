<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fees</title>
  <link rel="stylesheet" href="./css_file/style.css">
  <link rel="stylesheet" href="./css_file/fees.css">
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
      <div class="header">
        <h2>Monthly Fees:</h2>
        <div class="monthly_fee">
          <table class="table1">
            <tr>
              <th>Name</th>
              <th>Area</th>
              <th>Location</th>
              <th>Status</th>
              <th>Price</th>
            </tr>
            <tr>
              <td>Store A</td>
              <td>40m2</td>
              <td>Section B</td>
              <td>Rented</td>
              <td>46.136.000 VND/month</td>
            </tr>
            <tr>
              <td>Store B</td>
              <td>56m2</td>
              <td>Section A</td>
              <td>Rented</td>
              <td>50.750.000 VND/month</td>
            </tr>
            <tr>
              <td>Store Name</td>
              <td>60m2</td>
              <td>Near exit door at section A</td>
              <td>Available</td>
              <td>36.910.000 VND/month</td>
            </tr>
            <tr>
              <td>Store Name</td>
              <td>30m2</td>
              <td>Section B</td>
              <td>Available</td>
              <td>39.215.000 VND/month</td>
            </tr>
          </table>
        </div>
      </div><br><br><br>


      <div class="header">
        <h2>Member Fees:</h2><br>
        <li class="note">1 point (pts) = 1 VND</li>
        <div class="member_fee">
          <table class="table2">
            <tr>
              <th>Levels</th>
              <th class="level">Bronze</th>
              <th class="level">Silver</th>
              <th class="level">Gold</th>
              <th class="level">Plantinum</th>
            </tr>
            <tr>
              <th>Conditions(Points)</th>
              <td>4.000.000 pts to 40.000.000 pts </td>
              <td>40.000.001 pts to 60.000.000 pts</td>
              <td>60.000.001pts to 200.000.000 pts</td>
              <td>More than 200.000.000pts </td>
            </tr>
            <tr>
              <th>Incentives</th>
              <td>1% Discount</td>
              <td>3% Discount</td>
              <td>5% Discount</td>
              <td>10% Discount</td>
            </tr>
            <tr>
              <th>Birthday Incentives</th>
              <td>100.000 VND Cash Voucher</td>
              <td>200.000 VND Cash Voucher</td>
              <td>500.000 VND Cash Voucher</td>
              <td>1.000.000 VND Cash Voucher</td>
            </tr>


          </table>

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