<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/api/includes/cors.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/api/core.php';
header('Content-Type: application/json');

$payload = json_decode(file_get_contents('php://input'), true);

if (!isset($payload['key']) || !isset($payload['userid'])) {
  die('nuh uh lil vro');
}

$stmt = $conn->prepare("SELECT * FROM `keys` WHERE `key` = :key");
$stmt->bindParam(':key', $payload['key']);
$stmt->execute();

if ($stmt->rowCount() == 0) {
  http_response_code(400);
  die(json_encode([
        'error' => 'An error has occured'
  ]));
}

$row1 = $stmt->fetch();

if ($row1['linkedTo'] > 0) {
  http_response_code(401);
  die(json_encode([
        'error' => 'An error has occuredKey is already linked to account '.$row1['linkedTo']
  ]));
}	

$sid = bin2hex(random_bytes(200));
$stmt2 = $conn->prepare("UPDATE `keys` SET `connectsid` = :connectsid, `linkedTo` = :linkedTo WHERE `key` = :key");
$stmt2->bindParam(':connectsid', $sid);
$stmt2->bindParam(':linkedTo', $payload['userid']);
$stmt2->bindParam(':key', $payload['key']);
$stmt2->execute();

setcookie('connect-sid', $sid, ['expires' => time() + (3600 * 3600), 'path' => '/', 'domain' => 'rocrack.astic.site', 'secure' => true, 'httponly' => true, 'samesite' => 'None']);
?>
{"success":"true"}


