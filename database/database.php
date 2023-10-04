<?php 

$sName = "localhost";
$uName = "root";
$password = "behappy";
$db_name = "register";

try{
    $conn = new PDO("mysql:host=$sName;dbname=$db_name;",$uName,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}

?>