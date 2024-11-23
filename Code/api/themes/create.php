<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/api/cors.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/api/core.php';

$sid = $_COOKIE['connect-sid'] ?? '';
$payload = json_decode(file_get_contents('php://input'), true);

if (!validate($sid)) {
  die('lil sigma u are NOT baby gronk');
}


