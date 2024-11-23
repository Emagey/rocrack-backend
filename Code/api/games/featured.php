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
?>
{
    "games": [
        {
            "gameid": 16450619804,
            "playTime": "0",
            "playCount": "0"
        },
        {
            "gameid": 121618405071439,
            "playTime": "0",
	    "playCount": ""
	}
    ],
    "refresh": 1732212000000
}
