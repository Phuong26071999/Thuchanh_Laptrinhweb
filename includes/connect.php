<?php
$servername = "localhost";
$username = "root";
$password = "";
$giay1trang=6;


try {
  $conn = new PDO("mysql:host=$servername;dbname=shopgiay", $username, $password);
  // set the PDO error mode to exception
  $conn -> query('set names utf8');
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "<div hidden>Connection successfully!!! </div>";
} catch(PDOException $e) {
  echo "<div hidden>Connection failed: ". $e->getMessage().'</div>' ;
}
?>