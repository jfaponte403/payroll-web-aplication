<?php
  include 'dotenv.php';
  
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
    try {
      $mysqli = connectDB();
    } catch (Exception $e) {
      echo "<b>Error:</b> Unable connect to db. " . $e->getMessage();
      return null;
    }

    try {
      $result = $mysqli->query($sql);
    } catch (Exception $e) {
      echo "<b>Error:</b> Unable execute the query. " . $e->getMessage();
    }

    $mysqli->close();
    return $result;
  }

?>