<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact</title>
  <link rel="stylesheet" href="./css_file/style.css">
  <link rel="stylesheet" href="./css_file/contact.css">
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
      <div class="contact_header">
        <h1>Contact Us</h1>
        <h2>How can we help you?</h2>
        <p>Fill out this form to request support</p>
        <div class="contact_box">
          <form action="#" onsubmit="return validation()">
            <label for="contact">Contact Purpose:</label>
            <select name="Contact_purpose" id="contact">
              <option value="b">Business</option>
              <option value="p">Personal</option>
            </select><br>
            <fieldset class="aboutyou">
              <legend><label>About You</label></legend>
              <p>Fullname: <br>
                <input type="text" maxlength="50" id="fullName">
              </p>
              <p>Email: <br>
                <input type="email" id="userEmail">
              </p>
              <p>Phone: <br>
                <input type="text" id="userPhone">
              </p>
              <label for="contacttype">Choose contact type:</label>
              <input type="radio" name="contact_method" value="email"> Email
              <input type="radio" name="contact_method" value="phone"> Phone
            </fieldset><br>
            <fieldset class="day">
              <legend><label for="day">Select contact day</label></legend>
              <p><br>
                <input type="checkbox" name="contact_day" value="1">Monday
                <input type="checkbox" name="contact_day" value="2">Tuesday
                <input type="checkbox" name="contact_day" value="3">Wednesday
                <input type="checkbox" name="contact_day" value="4">Thursday
                <input type="checkbox" name="contact_day" value="5">Friday
                <input type="checkbox" name="contact_day" value="6">Saturday
                <input type="checkbox" name="contact_day" value="7">Sunday
              </p>
            </fieldset><br>
            <label for="box">
              <p>Write your questions</p>
            </label>
            <textarea name="textbox" id="box" cols="101" rows="10">Delete and Enter your message here...</textarea><br>
            <p id="text_box_msg"></p>
            <div class="submit">
              <div class="submit">
                <input type="submit" value="Submit" class="submit_button">
                <input type="reset" value="Reset" class="reset_button">
              </div>
            </div>
          </form>
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
  <script src="./scripts/contact.js" type="text/javascript"></script>
</body>

</html>