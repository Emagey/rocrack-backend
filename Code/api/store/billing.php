<?php
header("Access-Control-Allow-Origin: https://www.roblox.com");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");
header("Access-Control-Allow-Credentials: true");

if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
	        exit(0);
}

header("Content-Type: application/json");
?>
{"url":"https://alrovi.chargebee.com/portal/v2/home"}
