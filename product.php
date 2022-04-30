<?php
  include_once 'css/all-style.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Links -->
    <link rel="stylesheet" href="css/product.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,700;1,500&display=swap" rel="stylesheet">

    <title>Product</title>
</head>
<body>
    <!-- Navbar -->
    <nav>
        <div class="logo">
          <img src="images/cetax 1.png" alt="">
          <h1>Ceta</h1><h1 id="color">X</h1>
        </div>
  
        <div class="kanan">
          <ul class="navbar">
              <li><a href="home.php">Home</a></li>
              <li><a href="product.php">Product</a></li>
              <li><a href="about-us.php">About Us</a></li>
              <li><a href="contact-us.php">Contact Us</a></li>
          </ul>
        </div>
  
        <div class="login">
          <a id="login-btn" href="login.php">Log In</a>
          <a id="sign-btn" href="signup.php">Sign Up</a>
        </div>
    </nav>

      <!-- Content -->
      <div class="container">
        <!-- Box 1 -->
        <div class="box">
          <!-- Slide image -->
          <div class="slide-img">
              <img src="images/baju1.png" alt="">
              <div class="overlay">
                  <a href="order-page.php" class="buy-btn">Learn More</a>
              </div>
          </div>

          <div class="detail-box">
              <!-- Type -->
              <div class="type">
                  <a href="order-page.php">Shirt</a>
              </div>
              <!-- Price -->
              <a href="order-page.php" class="price">Shirt Printing</a>
          </div>
        </div>

        <!-- Box 2 -->
        <div class="box">
          <!-- Slide image -->
          <div class="slide-img">
              <img src="images/totebag.jpg" alt="">
              <div class="overlay">
                  <a href="order-page.php" class="buy-btn">Learn More</a>
              </div>
          </div>

          <div class="detail-box">
              <!-- Type -->
              <div class="type">
                  <a href="order-page.php">Tote Bag</a>
              </div>
              <!-- Price -->
              <a href="order-page.php" class="price">Tote Bag Printing</a>
          </div>
        </div>

        <!-- Box 3 -->
        <div class="box">
          <!-- Slide image -->
          <div class="slide-img">
              <img src="images/mug.jpg" alt="">
              <div class="overlay">
                  <a href="order-page.php" class="buy-btn">Learn More</a>
              </div>
          </div>

          <div class="detail-box">
              <!-- Type -->
              <div class="type">
                  <a href="order-page.php">Mug</a>
              </div>
              <!-- Price -->
              <a href="order-page.php" class="price">Mug Printing</a>
          </div>
        </div>
      </div>

    <!-- Container 2 -->

    <div class="container-2">
        <!-- Box 1 -->
        <div class="box">
          <!-- Slide image -->
          <div class="slide-img">
              <img src="images/sticker.jpg" alt="">
              <div class="overlay">
                  <a href="order-page.php" class="buy-btn">Learn More</a>
              </div>
          </div>

          <div class="detail-box">
              <!-- Type -->
              <div class="type">
                  <a href="order-page.php">Mini Sticker</a>
              </div>
              <!-- Price -->
              <a href="order-page.php" class="price">Mini Sticker Printing</a>
          </div>
        </div>

        <!-- Box 2 -->
        <div class="box">
          <!-- Slide image -->
          <div class="slide-img">
              <img src="images/stickerdeco.jpg" alt="">
              <div class="overlay">
                  <a href="order-page.php" class="buy-btn">Learn More</a>
              </div>
          </div>

          <div class="detail-box">
              <!-- Type -->
              <div class="type">
                  <a href="order-page.php">Sticker Deco</a>
              </div>
              <!-- Price -->
              <a href="order-page.php" class="price">Sticker Deco Printing</a>
          </div>
        </div>

        <!-- Box 3 -->
        <div class="box">
          <!-- Slide image -->
          <div class="slide-img">
              <img src="images/hoodie.jpg" alt="">
              <div class="overlay">
                  <a href="order-page.php" class="buy-btn">Learn More</a>
              </div>
          </div>

          <div class="detail-box">
              <!-- Type -->
              <div class="type">
                  <a href="order-page.php">Hoodie</a>
              </div>
              <!-- Price -->
              <a href="order-page.php" class="price">Hoodie Printing</a>
          </div>
        </div>
    </div>

    <!-- How to Order -->
    <h1 id="order-title">How to Order</h1>
    <div class="order">
      <div class="order-box">
        <div class="order-img">
          <img src="images/1.png" alt="">
        </div>
        <h1>Step #1</h1>
        <p>Choose and click the desired product</p>
      </div>

      <div class="order-box">
        <div class="order-img">
          <img src="images/2.png" alt="">
        </div>
        <h1>Step #1</h1>
        <p>Specify the product details including product options 
          and your own design</p>
      </div>

      <div class="order-box">
        <div class="order-img">
          <img src="images/3.png" alt="">
        </div>
        <h1>Step #1</h1>
        <p>Click purchase now</p>
      </div>

      <div class="order-box">
        <div class="order-img">
          <img src="images/4.png" alt="">
        </div>
        <h1>Step #1</h1>
        <p>Enter your shipping information and choose payment methods</p>
      </div>
    </div>

    <!-- Footer -->

    <footer>
        <div class="cetax">
          <h3>CetaX</h3>
  
          <div class="footer-img">
            <a href="https://www.facebook.com/login/">
              <img src="images/fb.png" alt="">
            </a>
  
            <a href="https://www.instagram.com/accounts/login/?hl=en">
              <img src="images/ig.png" alt="">
            </a>
  
            <a href="https://www.youtube.com/">
              <img src="images/yt.png" alt="">
            </a>
  
            <a href="">
              <img src="" alt="">
            </a>
          </div>
  
          <div class="copyright">
            <p>
              &#169 2022 All Right Resource | Kelompok 2
            </p>
          </div>
        </div>
  
        <div class="location">
          <h3>Location info</h3>
          <p>
            Jl. Scientia Boulevard, Curug Sangereng, 
            Kec. Klp. Dua, Kabupaten Tangerang, Banten 
            15810
          </p>
        </div>
  
        <div class="contact-us">
          <h3>Contact Us</h3>
          <p>
            Phone 0812-9898-2929 <br>
            Customer Service 021-55231
          </p>
        </div>
  
        <div class="useful-link">
          <h3>Useful Link</h3>
          <a href="product.php">
            Product
          </a>
          <a href="portfolio.php">
            Portfolio
          </a>
          <a href="about-us.php">
            About Us
          </a>
          <a href="">
            FAQs
          </a>
          <a href="">
            Terms & Condition
          </a>
        </div>
      </footer>

    <script src="js/product.js"></script>
</body>
</html>