<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/api/includes/cors.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/api/core.php';
header("Content-Type: application/json");

$sid = $_COOKIE['connect-sid'] ?? '';

if ($sid == '') {
  http_response_code(400);
  die(json_encode([
    'error' => 'An error has occured:( 204'
  ]));
}

if (!validate($sid)) {
  http_response_code(400);
  die(json_encode([
    'error' => 'An error has occured:( 204'
  ]));
}

$stmt = $conn->prepare("SELECT `linkedTo` FROM `keys` WHERE `connectsid` = :connectsid");
$stmt->bindParam(':connectsid', $sid);
$stmt->execute();
$row1 = $stmt->fetch();

die(json_encode([
  'customerId' => 'i forgor :skull:',
  'endDate' => '3929-12-30T21:16:03.000Z',
  'isDev' => 0,
  'userId' => $row1['linkedTo'],
  'currentThemeId' => null
]));
