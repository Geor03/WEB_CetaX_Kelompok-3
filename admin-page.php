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

    <!-- Links -->
    <link rel="stylesheet" href="css/admin-page.css">
    <script src="https://kit.fontawesome.com/a623eebd84.js" crossorigin="anonymous"></script>

    <title>Admin Dashboard</title>
</head>
<body>
    
    <!-- Navigation Menu -->
    <section id="menu">
        <div class="logo">
            <img src="images/cetax 1.png" alt="">
            <h2>CetaX</h2>
        </div>

        <div class="items">
            <li><i class="fa-solid fa-chart-pie"></i><a href="admin-page.php">Dashboard</a></li>
            <li><i class="fa-solid fa-right-from-bracket"></i><a href="php/logout.php">Log out</a></li>
        </div>
    </section>

    <!-- Navigation -->
    <section id="interface">
        <div class="navigation">
            <div class="n1">
                <div class="search">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="text" placeholder="Search">
                </div>
            </div>
        </div>

        <!-- Dashboard Title -->
        <h3 class="i-name">
            Dashboard
        </h3>

        <!-- Items -->
        <div class="board">
            <table width="100%">
                <thead>
                    <tr>
                        <td>Name</td>
                        <td>Title</td>
                        <td>Status</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($final as $key=>$product) :?>
                    <tr>
                        <td class="people">
                            <div class="people-de">
                                <h5>Customer Name</h5>
                                <p>customer@example.com</p>
                            </div>
                        </td>

                        <td class="people-des">
                            <h5>T-Shirt</h5>
                            <p>5 Items</p>
                        </td>

                        <td class="active"><p>Active</p></td>

                        <td class="edit">
                            <button id="open">Edit</button>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>

    </section>

    <div class="edit-container" id="open-edit">
        <div class="content">
            <h3>Edit Product</h3>
            <button id="close">X</button>
        </div>

        <div class="form-text">
                <form action="php/signup-process.php" method="post">
                    <div class="txt_field">
                        <input type="text" name="name" required>
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
                            <input type="file">
                        </div>
                    </div>

                    <div class="btn-choose">
                        <input type="submit" value="Update">
                        <input type="submit" id="remove" value="Delete">
                    </div>
                </form>
        </div>
    </div>

    <script>
        const open = document.getElementById('open');
        const edit_container = document.getElementById('open-edit');
        const close = document.getElementById('close');

        open.addEventListener('click', () => {
            edit_container.classList.add('show');
        });

        close.addEventListener('click', () => {
            edit_container.classList.remove('show');
        });
    </script>

</body>
</html>