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
if(isset($_POST['category']))$category = $_POST['category'];

$fileName = $_FILES['image']['name'];
$file_temp = $_FILES['image']['tmp_name'];
$allowed_ext = array("jpg", "jpeg", "gif", "png");
$targetFilePath = "images/".$fileName;
$exp = explode(".", $fileName);
$ext = end($exp);


    
// Insert image file name into database
//$insert = $db->query("INSERT into images (file_name, uploaded_on) VALUES ('".$fileName."', NOW())");
$query = $pdo->prepare("UPDATE `table_product` SET `id_product`='$id',`id_productCategory`='$category',`product_name`='$productname',`product_photo`='$targetFilePath',`price`='$price',`stock_qty`='$stock' WHERE id_product = $id");
$result = $query->execute();
if($result){
    echo "<script>alert('Edit Succesfully');window.location.href='../admin-page.php';</script>";
}else{
    echo "<script>alert('Edit Failed');window.location.href='../admin-page.php';</script>";
}
