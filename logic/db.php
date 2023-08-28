<?php
  include './logic/dotenv.php';
  function connectDB() {
    $mysqli = new mysqli(
      $_ENV["DB_HOST"] ?? "localhost", 
      $_ENV["DB_USER"] ?? "root", 
      $_ENV["DB_PASSWORD"] ?? "123456", 
      $_ENV["DB_NAME"] ?? "payroll",
      $_ENV["DB_PORT"] ?? 3306
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