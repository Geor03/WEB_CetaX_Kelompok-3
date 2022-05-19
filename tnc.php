<?php
include_once 'css/all-style.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Links -->
  <link rel="stylesheet" href="css/tnc.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,700;1,500&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a623eebd84.js" crossorigin="anonymous"></script>

  <title>Terms & Conditions</title>
</head>

<body>

  <!-- Navbar -->
  <nav>
    <div class="logo">
      <img src="images/cetax 1.png" alt="">
      <h1 class="brand">Ceta</h1>
      <h1 class="brand" id="color">X</h1>
    </div>

    <div class="kanan">
      <ul class="navbar">
        <li><a href="home.php">Home</a></li>
        <li><a href="product.php">Product</a></li>
        <li><a href="portfolio.php">Portfolio</a></li>
        <li><a href="about-us.php">About Us</a></li>
        <li><a href="contact-us.php">Contact Us</a></li>
      </ul>
    </div>


    <?php
    if ($_SESSION['role'] != null) { ?>
      <div class="logout">
        <a id="profile" href="profile.php"><i class="fa-solid fa-user"></i></a>

        <p>Hello, <?= $_SESSION['Name'] ?></p>

        <a id="log" href="php/logout.php">Log Out</a>
      </div>
    <?php
    } else {
    ?>
      <div class="login">
        <a id="login-btn" href="login.php">Log In</a>
        <a id="sign-btn" href="signup.php">Sign Up</a>
      </div>
    <?php
    }
    ?>
  </nav>

  <!-- Content -->
  <div class="container-tnc">

    <div class="tnc-title">
      <h1>Terms & Conditions</h1>
      <h3>The Terms & Conditions applies if you use our services</h4>
    </div>

    <div class="tnc-section">
      <h2>Selected Category</h2>

      <div class="box-tnc-section">
        <p class="heading-tnc-box">Terms & Conditions</p>
        <div class="tnc">
          <details>
            <summary>Terms & Conditions #1</summary>
            <p class="answer">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque dicta cum
              nostrum beatae, quis aut consequuntur veniam nemo praesentium, optio
              sapiente ut odio magnam mollitia fugiat veritatis omnis quod vel.</p>
          </details>

          <details>
            <summary>Terms & Conditions #2</summary>
            <p class="answer">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque dicta cum
              nostrum beatae, quis aut consequuntur veniam nemo praesentium, optio
              sapiente ut odio magnam mollitia fugiat veritatis omnis quod vel.</p>
          </details>

          <details>
            <summary>Terms & Conditions #3</summary>
            <p class="answer">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque dicta cum
              nostrum beatae, quis aut consequuntur veniam nemo praesentium, optio
              sapiente ut odio magnam mollitia fugiat veritatis omnis quod vel.</p>
          </details>

          <details>
            <summary>Terms & Conditions #4</summary>
            <p class="answer">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque dicta cum
              nostrum beatae, quis aut consequuntur veniam nemo praesentium, optio
              sapiente ut odio magnam mollitia fugiat veritatis omnis quod vel.</p>
          </details>

          <details>
            <summary>Terms & Conditions #5</summary>
            <p class="answer">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque dicta cum
              nostrum beatae, quis aut consequuntur veniam nemo praesentium, optio
              sapiente ut odio magnam mollitia fugiat veritatis omnis quod vel.</p>
          </details>
        </div>
      </div>
    </div>

  </div>

  <!-- Footer -->

  <footer>
    <div class="container-footer-tnc">
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
        </div>

        <div class="copyright">
          <p>
            &#169 2022 All Right Resource <br>| Kelompok 2
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
        <a href="faq.php">
          FAQs
        </a>
        <a href="tnc.php">
          Terms & Condition
        </a>
      </div>
    </div>
  </footer>

</body>

</html>