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
{
    "message": "All services operational.",
    "updates": null,
    "updateLog": [
        "RELEASE - v1.0.0\nRewrote auth"
    ]
}
