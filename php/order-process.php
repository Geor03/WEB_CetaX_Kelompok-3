<?php
    session_start();
    $user_id = $_SESSION['user_id'];
    if(isset($_POST['size']))$size = $_POST['size'];
    if(isset($_POST['qty']))$qty = $_POST['qty'];
    if(isset($_POST['material']))$material = $_POST['material'];
    $id = $_GET['product'];
    $date = date("Y/m/d");    
    $host = 'localhost';
    $dbname = 'cetax';
    $username = 'root';
    $password = '';
    $pdo = new PDO("mysql: host=$host;dbname=$dbname",$username,$password);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    $query = $pdo->prepare("INSERT INTO `table_order`( `id_product`, `id_customer`, `size`, `quantity`, `material`, `shipping`, `total_price`, `id_paymentMethod`, `Date`) VALUES ('$id','$user_id','$size,'$qty','$material','[value-6]','[value-7]','[value-8]','$date')");
    $result = $query->execute();
    if($result){
        header('Location: ../login.php');   
    }