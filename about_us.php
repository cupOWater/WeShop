<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="./css_file/style.css" type="text/css">
    <link rel="stylesheet" href="css_file/about_us.css" type="text/css">
    <script src="./scripts/overlay.js"></script>
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
        <div class="as_header"><h1>ABOUT US</h1></div>
        <div class="as_container">
          <div class="as_content">
            <h2>Member 1:</h2>
            <ul>
              <li>Fullname: Le Trung Tin</li>
              <li>Date of Birth: 02/01/2000</li>
              <li>sID: S3752975</li>
              <li>Hobbies: Basketball || Games || Travel || Party</li>
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
            </div>
            <div class="profile"><img src="./profile_pics/ltt.jpg" alt="Picture of Tin" onclick="on()"></div>

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
            <div class="profile"><img src="./profile_pics/hkt.jpg" alt="Picture of Thanh" onclick="on1()"></div>
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
            <div class="profile"><img src="./profile_pics/dma.jpg" alt="Picture of MAnh" onclick="on2()"></div>
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
            <div class="profile"><img src="./profile_pics/tht.jpg" alt="Picture of Thy" onclick="on3()"></div>
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
        <p>Copyright © 2021 by group 4. All Rights Reserved | <a href="./others_file/tos_copyright.txt" download="./others_file/tos_copyright.txt">Term of Service</a> </p>
      </div>
    </footer>

  </div>
  <script src="./scripts/main.js" type="text/javascript"></script>
</body>
</html>
