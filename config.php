<?php
$serverName = "localhost";
$userName = "root";
$password = "root";
$DBName = "patient";
//TODO: create DB Patient 

try{
    $pdo = new PDO("mysql:host=" . $serverName . ";dbname=" . $DBName, $userName, $password);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "connected";
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}
?>