<?php
    session_start();
    $host = 'localhost';
    $dbname = 'cetax';
    $username = 'root';
    $password = '';
    $pdo = new PDO("mysql: host=$host;dbname=$dbname",$username,$password);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
<<<<<<< HEAD
    $query = $pdo->prepare("INSERT INTO `table_order`( `id_product`, `id_customer`, 
            `size`, `quantity`, `material`, `shipping`, `total_price`, `id_paymentMethod`, `Date`) 
            VALUES ('$id','$user_id','$size,'$qty','$material','[value-6]','[value-7]','[value-8]','$date')");
    $result = $query->execute();
=======

    $id = $_GET['product'];
    $result = $pdo->prepare("SELECT * FROM table_product WHERE id_product = $id");
    $result->execute();
    $final = $result->fetch();
    $user_id = $_SESSION['user_id'];
    if(isset($_POST['size']))$size = $_POST['size'];
    if(isset($_POST['qty']))$qty = $_POST['qty'];
    if(isset($_POST['material']))$material = $_POST['material'];
    if(isset($_POST['ship']))$shipment = $_POST['ship'];
    if(isset($_POST['payment']))$payment = $_POST['payment'];
    $date = date("Y/m/d");
    $total_price = $final->price*$qty;

    if($qty < $final->stock_qty){
        header('Location: ../home.php');
    }
>>>>>>> 290d1f8baf18cfe01e5b5e6b4d2b92643edc2ed3
    if($result){
        $query = $pdo->prepare("INSERT INTO `table_order`( `id_product`, `id_customer`, `size`, `quantity`, `material`, `shipping`, `total_price`, `id_paymentMethod`, `Date`) VALUES ('$id','$user_id','$size,'$qty','$material','$shipment','$total_price','$payment','$date')");
        $result = $query->execute();
        header('Location: ../home.php');
    }