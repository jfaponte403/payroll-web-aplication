<?php
  /**
   * If you don't have composer installed or the dotenv dependency,
   * coment this lines and replace manually the conections variables. 
   **/ 
  require __DIR__ . '/../vendor/autoload.php';
  $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "/../");
  $dotenv->load();
  //...
  
  $mysqli = new mysqli(
    $_ENV["DB_HOST"] ?? "127.0.0.1", 
    $_ENV["DB_USER"] ?? "root", 
    $_ENV["DB_PASSWORD"] ?? "", 
    $_ENV["DB_NAME"] ?? "payroll",
    $_ENV["DB_PORT"] ?? 3307
  );

?>