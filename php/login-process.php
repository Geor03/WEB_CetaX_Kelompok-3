<?php
session_start();

$user = $_POST['user'];
$pw = $_POST['pw'];

$host = 'localhost';
$dbname = 'cetax';
$username = 'root';
$password = '';
$pdo = new PDO("mysql: host=$host;dbname=$dbname",$username,$password);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

$sql = "SELECT * FROM table_customer WHERE username = ?";

$result = $pdo->prepare($sql);
$result->execute([$user]);

if($row = $result->fetch()) {
    if($pw == $row->password) {
        $_SESSION['username'] = $row->username;
        $_SESSION['role'] = $row->role;
        $_SESSION['user_id'] = $row->id;
        $_SESSION['Name'] = $row->first_name;
        // Jangan lupa ganti
        if($_SESSION['role'] == "user"){
            header('Location: ../home.php');
        }
        else if($_SESSION['role'] == "admin"){
            header('Location: ../admin-page.php');//direct ke halaman admin
        }
        
    } else {
        header('Location: ../login.php');
    }
} else {
    header('Location: ../login.php');
}