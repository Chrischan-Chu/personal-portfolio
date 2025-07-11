<?php
if (!isset($conn)) {
  session_start();
  include "config.php";
}

// Save if form is submitted AND user is logged in
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION['is_admin']) && $_SESSION['is_admin']) {
  $p1 = $_POST['paragraph1'];
  $p2 = $_POST['paragraph2'];

  $sql = "UPDATE update_about SET paragraph1 = ?, paragraph2 = ? WHERE id = 1";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ss", $p1, $p2);
  $stmt->execute();
  $stmt->close();
}

// Fetch paragraph content
$sql = "SELECT paragraph1, paragraph2 FROM update_about WHERE id = 1 LIMIT 1";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
