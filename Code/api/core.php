<?php

try {
  $conn = new PDO("mysql:host=localhost;dbname=rocrack", "ur mysql user", "ur mysql user's pass");
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  die('sigma sigma boy!!1');
}

function validate($sid) {
  global $conn;
	
  $stmt = $conn->prepare("SELECT * FROM `keys` WHERE `connectsid` = :connectsid");
  $stmt->bindParam(':connectsid', $sid);
  $stmt->execute();

  if ($stmt->rowCount() == 1) {
    return true;
  }

  return false;
}
