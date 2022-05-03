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
    <link rel="stylesheet" href="css/admin-edit-page.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,700;1,500&display=swap" rel="stylesheet">

    <title>Edit Product</title>
</head>
<body>
    
    <div class="content-edit-page">
        <center>
            <h2>Edit Product</h2>
        </center>

        <div class="form-edit">
            <form action="php/admin-page.php?product=<?php echo stripslashes($final->id_product)?>" method="post">
                <div class="txt_field">
                    <input type="text" name="product_name" required>
                    <span></span>
                    <label>Product Name</label>
                </div>
                <div class="txt_field">
                    <input type="text" name="price" required>
                    <span></span>
                    <label>Price</label>
                </div>

                <div class="txt_field">
                    <input type="text" name="stock" required>
                    <span></span>
                    <label>Stock</label>
                </div>

                <div class="txt_field" id="file">
                    <div class="file-upload">
                        <input type="file" name="file">
                    </div>
                </div>

                <div class="btn-choose">
                    <input type="submit" value="Update">
                    <input type="submit" id="remove" value="Delete">
                </div>
            </form>
    </div>
    </div>

</body>
</html>