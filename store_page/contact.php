<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interitor | Contact</title>
    <link rel="stylesheet" href="../css_file/store_style.css" type="text/css">
    <link rel="stylesheet" href="../css_file/contact.css" type="text/css">

</head>
<body>
  <header>
    <div class="row">
      <div class="column">
        <h1><a href="store.html">
          <img src="../Pics/interitor.png" alt="logo" width="150" height="150" class="img_logo">
        </a></h1>
      </div>
      <div class="column">
        <div class="navbar">
          <ul>
            <li><a href="store.html">Home</a></li>

            <li>
              <label for="product_sub">Product</label>
              <input type="checkbox" id="product_sub">
              <div class="menu_box">
                <a href="products_cat.html">Category</a>
                <a href="products_date.html">Date</a>
              </div>
            </li>

            <li><a href="abt_us.html">About Us</a></li>
            <li><a href="contact.html">Contact</a></li>

            <li class="hidden_menu">
                <label for="menu_top">
                  <img src="../Pics/menu.png" alt="3 stripes" height="40px">
                </label>
                <input type="checkbox" id="menu_top">
                <div class="menu_box">
                  <a href="store.html">Home</a>
                  <label for="product_sub">Product</label>
                  <input type="checkbox" id="product_sub">
                  <div class="menu_box">
                    <a href="products_cat.html">By Category</a>
                    <a href="products_date.html">By Date</a>
                  </div>
                  <a href="abt_us.html">About Us</a>
                  <a href="contact.html">Contact</a>
                </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </header>

  <main>
    <h1 class="contact_str_header">Contact Us</h1>
    <div class="contact_header">
      <h2>The Interitor would like to hear from you?</h2>
      <div class="contact_box">
        <form action="#" onsubmit="return validation()">
          <fieldset class="aboutyou">
            <legend><label>About You</label></legend>
            <p>Fullname: <br>
            <input type="text" maxlength="50" id="fullName"></p>
            <p>Email: <br>
            <input type="email" id="userEmail"></p>
            <p>Phone: <br>
            <input type="text" id="userPhone"></p>
            <label for="contacttype">Choose contact type:</label>
            <input type="radio" name="contact_method" value="email"> Email
            <input type="radio" name="contact_method" value="phone"> Phone
          </fieldset><br>
          <fieldset class="day">
            <legend><label for="day">Services:</label></legend>
            <input type="checkbox" id="delivery" value="Delivery" name="service_type"> Delivery
            <br/>
            <input type="checkbox" id="payment" value="Payment" name="service_type"> Payment
            <br/>
            <input type="checkbox" id="returnAndRefund" value="Return and Refund" name="service_type"> Return and Refund
            <br/>
          </fieldset><br>
          <label for="box"><p>Write your questions</p></label>
          <p id="text_box_msg"></p>
          <textarea name="textbox" id="box" cols="101" rows="10">Delete and Enter your message here...</textarea><br><br>
          
          <div class="submit">
            <input type="submit" value="Submit" class="submit_button">
            <input type="reset" value="Reset" class="reset_button">
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
    <div class="navbar">
      <ul>
        <li><a href="store.html">Home</a></li>
        <li>
          <label for="product_sub_bot">Product</label>
          <input type="checkbox" id="product_sub_bot">
          <div class="menu_box">
            <a href="products_cat.html">Category</a>
            <a href="products_date.html">Date</a>
          </div>
        </li>
        <li><a href="abt_us.html">About Us</a></li>
        <li><a href="contact.html">Contact</a></li>
        <li class="hidden_menu">
            <label for="menu_bot">
              <img src="../Pics/menu.png" alt="3 stripes &equiv;" height="40px">
            </label>
            <input type="checkbox" id="menu_bot">
            <div class="menu_box">
              <a href="store.html">Home</a>
              <label for="product_sub_bot">Product</label>
              <input type="checkbox" id="product_sub_bot">
              <div class="menu_box">
                <a href="products_cat.html">Category</a>
                <a href="products_date.html">Date</a>
              </div>
              <a href="abt_us.html">About Us</a>
              <a href="contact.html">Contact</a>
            </div>
          </li>
      </ul>
    </div>
    <p id="copyright">Copyright © 2021 by group 4. All Rights Reserved | <a href="../others_file/tos_copyright.html" target="_blank">Term of Service</a> </p>
  </footer>
  <script src="../scripts/main.js" type="text/javascript"></script>
  <script src="../scripts/contact.js" type="text/javascript"></script>
</body>
</html>
