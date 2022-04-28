<?php
    if(isset($_POST['user']))$user = $_POST['user'];
    if(isset($_POST['email']))$email = $_POST['email'];
    if(isset($_POST['pw']))$pass = $_POST['pw'];
    if(isset($_POST['Fname']))$Fname = $_POST['Fname'];
    if(isset($_POST['Lname']))$Lname = $_POST['Lname'];
    if(isset($_POST['phone']))$phone = $_POST['phone'];
    if(isset($_POST['address']))$address = $_POST['address'];
    $role = "user";
    
    $host = 'localhost';
    $dbname = 'cetax';
    $username = 'root';
    $password = '';
    $pdo = new PDO("mysql: host=$host;dbname=$dbname",$username,$password);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    $query = $pdo->prepare("INSERT INTO `table_customer`( `username`, `email`, `password`, `first_name`, `last_name`, `no_telp`, `address`, `role`) values ('$user','$email','$pass','$Fname','$Lname','$phone','$address','$role')");
    $result = $query->execute();
    if($result){
        header('Location: home.php');
    }