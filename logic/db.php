<?php
  require './logic/dotenv.php';
  
  function connectDB() {
    $mysqli = new mysqli(
      $_ENV["DB_HOST"] ?? "127.0.0.1", 
      $_ENV["DB_USER"] ?? "root", 
      $_ENV["DB_PASSWORD"] ?? "", 
      $_ENV["DB_NAME"] ?? "payroll",
      $_ENV["DB_PORT"] ?? 3307
    );

    return $mysqli;
  }

  function query($sql) {
    $mysqli = connectDB();
    $result = $mysqli->query($sql);
    $mysqli->close();
    return $result;
  }

?>