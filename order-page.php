<?php
  include_once 'css/all-style.php';
  session_start();
  if( $_SESSION['role'] == null){
    header('Location: login.php');
  }
  $productId = $_GET['product'];
  $host = 'localhost';
  $dbname = 'cetax';
  $username = 'root';
  $password = '';
  $pdo = new PDO("mysql: host=$host;dbname=$dbname",$username,$password);
  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);


  $result = $pdo->prepare("SELECT * FROM table_product WHERE id_product = $productId");
  $result->execute();
  $final = $result->fetch();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,700;1,500&display=swap" rel="stylesheet">

    <title>Order</title>
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

        <?php
        if( $_SESSION['role'] != null){?>
            <div class="logout">
        
            <p>Hello, <?= $_SESSION['Name'] ?></p>

            <a href="php/logout.php">Log Out</a>
            </div>
        <?php
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
    <h1 id="order-title"><?php echo stripslashes($final->product_name)?></h1>
    
    <div class="content-order">
        <!-- Product & Product Description -->
        <div class="left-content">
            <img src="images/baju3.png" alt="">

            <div class="product-desc">
                <h3>Product Description</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure 
                    repudiandae natus enim? Explicabo quae eum dignissimos possimus consectetur 
                    nam optio cumque temporibus perspiciatis commodi, fugit, animi unde voluptatibus perferendis atque?
                </p>
            </div>
        </div>

        <div class="right-content">
          <!-- Product Detail & Product Options -->
            <div class="product-det">
                <h1>Product Detail</h1>
                <p>
                    Price <br>
                    <s>IDR 60.000</s> $<?php echo stripslashes($final->price)?>
                </p>

                <p>
                    Estimated Production Time <br>
                    &plusmn 3 days
                </p>
            </div>

            <div class="product-op">
                <div class="form-text">
                    <h1>Product Options</h1>
                    <form action="php/login-process.php?product=<?php echo stripslashes($final->id_product)?>" method="post">
                        <div class="txt_field">
                            <input type="text" id="size" name="size" required>
                            <span></span>
                            <label>Size</label>
                        </div>

                        <div class="txt_field">
                            <input type="text" name="qty" required>
                            <span></span>
                            <label>Quantity</label>
                        </div>

                        <div class="txt_field">
                            <input type="text" name="material" required>
                            <span></span>
                            <label>Material</label>
                        </div>

                        <div id="file">
                            <div class="file-upload">
                                <input type="file">
                            </div>
                        </div>
                    </form>
                </div>
            </div>  
        </div>
    </div>

    <div class="btn">
        <div class="btn-purchase">
            <input type="submit" value="Purchase Now">
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