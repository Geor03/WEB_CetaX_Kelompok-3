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
// if(isset($_POST['file']))$file = $_POST['file'];

// Include the database configuration file
// File upload path
$targetDir = "images/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            //$insert = $db->query("INSERT into images (file_name, uploaded_on) VALUES ('".$fileName."', NOW())");
            $query = $pdo->prepare("UPDATE `table_product` SET `id_product`='$id',`id_productCategory`='$category',`product_name`='$productname',`product_photo`='.$targetFilePath.',`price`='$price',`stock_qty`='$stock' WHERE id_product = $id");
            $result = $query->execute();
            if($result){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
                header('Location: ../admin-page.php');
            }else{
                header('Location: ../admin-page.php');
            } 
        }else{
            header('Location: ../admin-page.php');
        }
    }else{
        header('Location: ../admin-page.php');
    }
}else{
    header('Location: ../admin-page.php');
}



    $query = $pdo->prepare("UPDATE `table_product` SET `product_name`='$productname',`product_photo`='$file',`price`='$price',`stock_qty`='$stock' WHERE id_product = $id");
    $result = $query->execute();
?>