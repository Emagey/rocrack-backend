<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/api/includes/cors.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/api/core.php';
header('Content-Type: application/json');

if (!isset($_GET['id'])) {
  http_response_code(400);
  die(json_encode([
    'error' => 'An error has occured'
  ]));
}

$stmt = $conn->prepare("SELECT * FROM `keys` WHERE `linkedTo` = :linkedTo");
$stmt->bindParam(':linkedTo', $_GET['id']);
$stmt->execute();

if ($stmt->rowCount() == 0) {
  http_response_code(400);
  die(json_encode([
    'error' => 'An error has occured'
  ]));
}

$stmt2 = $conn->prepare("SELECT * FROM `badges` WHERE `userID` = :userID");
$stmt2->bindParam(':userID', $_GET['id']);
$stmt2->execute();
$row2 = $stmt2->fetchAll();
$badges = ['month-0'];

foreach ($row2 as $badge) {
  $badges[] = $badge['badge'];
}

die(json_encode([
  'xp' => 0,
  'AVborder' => 1,
  'AVbanner' => 1,
  'views' => 0,
  'isDev' => 0,
  'badges' => $badges
]));
