<?php
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'trailers';

    try {
        $conexion = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
      } catch (PDOException $e) {
        die('Conexion Fallida: ' . $e->getMessage());
      }
?>




