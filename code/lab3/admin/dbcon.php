<?php
// B1. Ket noi Database
$host = 'localhost';
$db   = 'quanly';
try{
    $conn  = new PDO("mysql:host=$host; dbname=$db",'root','');
    }
catch(PDOException $e){
    // echo "sai";
    echo $e->getMessage();
}
?>