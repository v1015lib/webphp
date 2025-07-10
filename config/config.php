<?php
// Datos de conexión
$host = 'localhost';
$database = 'diezqpys_data_lib';
$username = 'diezqpys_adminlibreria';
$password = 'mastermaain1015@Libreria';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$database;charset=utf8mb4", $username, $password);
    
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
    
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
    die();
}


?>