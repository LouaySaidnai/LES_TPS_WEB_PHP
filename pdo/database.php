<?php
$dsn = "mysql:host=localhost:3333;dbname=rt2";
$username = 'root';
$password = '';


try {
  $conn = new PDO($dsn, $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
  echo "<br>Error Code: " . $e->getCode();
  echo "<br>File: " . $e->getFile();
  echo "<br>Line: " . $e->getLine();
}
?>
