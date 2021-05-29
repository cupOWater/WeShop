<?php
session_start();
require "read_data.php";
require "global_function.php";
//Check if user is logged in or not
if (isset($_SESSION["loggedIn"])) {
  header("Location: profile.php");
}

// profile patterns
$pass_pattern = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,20}$/";
$email_pattern = "/^([A-Za-z0-9]+\.?){2,}[^.]\@(\w\.?)*[^\.]\.[A-Za-z]{2,5}$/";
$phone_pattern = "/^([0-9]+[\.\-]?){8,11}[^\.\-]$/";

//personal patterns
$pattern_name = "/^[a-zA-Z\s]{2,}$/";
$pattern_address = "/^[a-zA-Z0-9\s]{2,}$/";
$pattern_city = "/^[a-zA-Z\s]{2,}$/";
$pattern_zipcode = "/^[0-9]{3,6}$/";

// Create a user.csv if none is found
if (!file_exists("../user.csv")) {
  $file = fopen("../user.csv", "w");
  fwrite($file, "email,password,phone,fname,lname,address,country,city,zipcode\n");
  fclose($file);
}
$users = read_csv_data("../user.csv");
// error messages variables
$mailAlert = $passAlert = $phoneAlert = $nameAlert = $addressAlert = $cityAlert = $zipAlert = "";

// validate the required fields and set valid to false if validate fail
if (isset($_POST["submit"])) {
  $valid = true;
  if (!preg_match($email_pattern, $_POST["uemail"])) {
    $valid = false;
    $mailAlert = "Invalid email";
  }
  if (!preg_match($pass_pattern, $_POST["upassword"]) || $_POST["upassword"] != $_POST["reupassword"]) {
    $valid = false;
    $passAlert = "Invalid password";
  }
  if (!preg_match($phone_pattern, $_POST["uphone"])) {
    $valid = false;
    $phoneAlert = "Invalid phone";
  }
  // Check for repeated email or phone number
  foreach ($users as $u) {
    if ($_POST["uemail"] == $u["email"]) {
      $valid = false;
      $mailAlert = "Email already exist";
    }
    if ($_POST["uphone"] == $u["phone"]) {
      $valid = false;
      $phoneAlert = "Phone number already registered";
    }
  }

  if (!preg_match($pattern_name, $_POST["fname"]) || !preg_match($pattern_name, $_POST["lname"])) {
    $valid = false;
    $nameAlert = "Invalid name";
  }
  if (!preg_match($pattern_address, $_POST["address"])) {
    $valid = false;
    $addressAlert = "Invalid address";
  }
  if (!preg_match($pattern_city, $_POST["city"])) {
    $valid = false;
    $cityAlert = "Invalid city";
  }
  if (!preg_match($pattern_zipcode, $_POST["zipcode"])) {
    $valid = false;
    $zipAlert = "Invalid ZIP code";
  }

  if ($valid) {
    $hash_pw = password_hash($_POST["upassword"], 1);
    $file = fopen("../user.csv", "a");
    fwrite($file, "{$_POST['uemail']},{$hash_pw},{$_POST['uphone']},{$_POST['fname']},{$_POST['lname']},{$_POST['address']},{$_POST['country']},{$_POST['city']},{$_POST['zipcode']}\n");
    fclose($file);
    header("Location: my_account.php");
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration</title>
  <link rel="stylesheet" href="./css_file/style.css" type="text/css">
  <link rel="stylesheet" href="./css_file/login_page.css" type="text/css">
  <script src="./scripts/register.js"></script>
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
      <div class="content register">
        <form action="register.php" method="post">
          <div class="row">
            <div class="column">
              <h2> Profile Info </h2>
              <p>
                <label for="uemail">Email</label> <br>
                <input type="email" id="uemail" name="uemail">
              </p>
              <p class="alert"> <?php echo $mailAlert; ?> </p>
              <p>
                <label for="uphone">Phone number</label> <br>
                <input type="text" id="uphone" name="uphone">
              </p>
              <p class="alert"> <?php echo $phoneAlert; ?> </p>
              <p>
                <label for="upassword">Password</label> <br>
                <input type="password" id="upassword" name="upassword">
              </p>
              <p>
                <label for="reupassword">Re-type password</label> <br>
                <input type="password" id="reupassword" name="reupassword">
              </p>
              <p class="alert"> <?php echo $passAlert; ?> </p>
              <p>
                <label>Profile picture</label> <br>
                <input type="file" name="pfp">
              </p>
              <div>
                <label>Account type</label><br>
                <input type="radio" name="account" value="owner" id="owner" onclick="show_hide(0)">
                <label for="owner">Store owner</label>
                <input type="radio" name="account" value="shopper" id="shopper" onclick="show_hide(1)" checked>
                <label for="shopper">Shopper</label>
              </div>
            </div>
            <div class="column" id="personal">
              <h2> Personal Info </h2>
              <p>
                <label for="fname">First name</label> <br>
                <input type="text" id="fname" name="fname">
              </p>
              <p>
                <label for="lname">Last name</label> <br>
                <input type="text" id="lname" name="lname">
              </p>
              <p class="alert"> <?php echo $nameAlert; ?> </p>
              <p>
                <label for="address">Address</label> <br>
                <input type="text" id="address" name="address">
              </p>
              <p class="alert"> <?php echo $addressAlert; ?> </p>
              <p>
                <label for="city">City</label> <br>
                <input type="text" id="city" name="city">
              </p>
              <p class="alert"><?php echo $cityAlert; ?></p>
              <p>
                <label for="zipcode">Zip code</label> <br>
                <input type="number" min="1000" max="999999" id="zipcode" name="zipcode">
              </p>
              <p class="alert"> <?php echo $zipAlert; ?> </p>
              <p>
                <label for="country">Country</label><br>
                <select id="country" name="country">
                  <option value="AU">Australia</option>
                  <option value="CN">China</option>
                  <option value="GB">United Kingdom</option>
                  <option value="US">United State</option>
                  <option value="VN">Vietnam</option>
                </select>
              </p>
            </div>
          </div>

          <div class="row" id="owner_info">
            <hr>
            <h2> Store Owner Profile </h2>
            <p>
              <label for="business">Business name</label> <br>
              <input type="text" id="business" name="business">
            </p>
            <p>
              <label for="store">Store name</label> <br>
              <input type="text" id="store" name="store">
            </p>
            <p>
              <label>Store Type: </label>
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
            </p>
          </div>
          <div class="row">
            <input type="submit" name="submit" value="Submit">
            <input type="reset" value="Reset">
            <p>Already a user? <a href="my_account.php">Login</a></p>
          </div>
        </form>

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