<?php
  include_once 'css/all-style.php';
  session_start();
  $host = 'localhost';
  $dbname = 'cetax';
  $username = 'root';
  $password = '';
  $pdo = new PDO("mysql: host=$host;dbname=$dbname",$username,$password);
  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);


  $result = $pdo->prepare(" SELECT * FROM table_product ");
  $result->execute();
  $final = $result->fetchAll();
  if( $_SESSION['role'] == null){
    header('Location: login.php');
  }
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Link -->
  <!-- <link rel="stylesheet" href="/css/index.css"> -->
  <script src="js/index.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,700;1,500&display=swap" rel="stylesheet">

  <title>Home</title>
</head>
<body>

  <!-- Navbar -->
  <nav>
    <div class="logo">
      <img src="images/cetax 1.png" alt="">
      <h1 class="brand">Ceta</h1><h1 class="brand" id="color">X</h1>
    </div>

    <div class="kanan">
      <ul class="navbar">
          <li><a href="home.php">Home</a></li>
          <li><a href="product.php">Product</a></li>
          <li><a href="about-us.php">About Us</a></li>
          <li><a href="contact-us.php">Contact Us</a></li>
      </ul>
    </div>

    <div class="logout">
      
      <p>Customer Name</p>

      <a href="php/logout.php">Log Out</a>
    </div>

    <?php
      if( $_SESSION['role'] != null){
        //nanti masukin yg profile sama log out button disini
      }
      else{
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

  <div class="content">

    <!-- Content Slide -->

    <div class="content-slide">

        <!-- Image slider start -->

        <div class="slider">
            <div class="slides">

                <!-- Button start -->

                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <input type="radio" name="radio-btn" id="radio4">
                <input type="radio" name="radio-btn" id="radio5">

                <!-- Button end -->

                <!-- Slide image start -->

                <div class="slide first">
                    <img src="images/images1.png" alt="">
                </div>
                <div class="slide">
                    <img src="images/iklan.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="images/iklan 2.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="images/gambarpromosi1.png" alt="">
                </div>
                <div class="slide">
                    <img src="images/iklan 2.jpg" alt="">
                </div>

                <!-- Slide image end -->

                <!-- Auto slide start -->

                <div class="nav-auto">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>
                    <div class="auto-btn4"></div>
                    <div class="auto-btn5"></div>
                </div>

                <!-- Auto slide end -->

            </div>

            <!-- Manual slide start -->

            <div class="nav-manual">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
                <label for="radio4" class="manual-btn"></label>
                <label for="radio5" class="manual-btn"></label>
            </div>

            <!-- Manual slide end -->

        </div>
    </div>

    <!-- Top Products -->

    <div class="title">
      <h1>Top Products</h1>
    </div>

    <!-- Product -->
    
    <div class="product">
      <?php foreach($final as $key=>$product) :?>
      <div class="card">
        <div class="img-box">
            <img src="<?php echo stripslashes($product->product_photo) ?>" alt="">
        </div>

        <div class="price-box">
            <h3><?php echo stripslashes($product->product_name) ?></h3>
            <h2 class="price">$<?php echo stripslashes($product->price) ?></h2>
            <a href="" class="buy">Buy Now</a>
        </div>
      </div>
      <?php endforeach ?>
    </div>

      <!-- <div class="card">
        <div class="img-box">
            <img src="images/comp3.png" alt="">
        </div>

        <div class="price-box">
            <h3>Santa Monica</h3>
            <h2 class="price">$299.<small>99</small></h2>
            <a href="" class="buy">Buy Now</a>
        </div>
      </div>

      <div class="card">
        <div class="img-box">
            <img src="images/comp2.png" alt="">
        </div>

        <div class="price-box">
            <h3>Crop Top</h3>
            <h2 class="price">$299.<small>99</small></h2>
            <a href="" class="buy">Buy Now</a>
        </div>
      </div>

      <div class="card">
        <div class="img-box">
            <img src="images/bag.png" alt="">
        </div>

        <div class="price-box">
            <h3>Louis Vuitton</h3>
            <h2 class="price">$299.<small>99</small></h2>
            <a href="" class="buy">Buy Now</a>
        </div>
      </div> -->
   

    <!-- Why Us & Portfolio -->
    <div class="box-why">
      <!-- Why Us -->
      <img src="images/Why-us.png" id="why-us" alt="">

      <!-- Portfolio -->
      <a id="portofolio" href="portfolio.php">
        <div class="portfolio">
          <h1>Our Portfolio</h1>
          <a id="click" href="portfolio.php">Click Here →</a>

          <a href="portfolio.html">
            <img src="images/baju2.png" alt="">
          </a>
        </div>
      </a>
    </div>

    <!-- Clients -->
    <div class="clients">
      <h1 id="client-title">Our Clients</h1>

      <div class="img-clients">
        <img src="images/adidas.png" alt="">
        <img src="images/disney.png" alt="">
        <img src="images/vista.png" alt="">
        <img id="mcd" src="images/mcd.png" alt="">
        <img src="images/starbucks.png" alt="">
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

</body>
</html>