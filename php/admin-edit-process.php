<?php
session_start();
$host = 'localhost';
$dbname = 'cetax';
$username = 'root';
$password = '';
$pdo = new PDO("mysql: host=$host;dbname=$dbname",$username,$password);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

$id = $_GET['product'];
$user_id = $_SESSION['user_id'];
if(isset($_POST['product_name']))$productname = $_POST['product_name'];
if(isset($_POST['price']))$price = $_POST['price'];
if(isset($_POST['stock']))$stock = $_POST['stock'];
if(isset($_POST['file']))$file = $_POST['file'];

if($result){
    $query = $pdo->prepare("UPDATE `table_product` SET `product_name`='$productname',
            `product_photo`='$file',`price`='$price',`stock_qty`='$stock' WHERE id_product = $id");
    $result = $query->execute();
    header('Location: ../admin-page.php');
}