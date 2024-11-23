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
  "1": "banner_1.png",
  "2": "wavy_2.jpg",
  "3": "orange_3.png",
  "4": "abstract_4.jpg",
  "5": "space_5.png",
  "6": "swirl_6.jpg",
  "7": "maverick_7.png",
  "8": "hive_8.png",
  "9": "fade_9.png",
  "19056130": "chris_19056130.png",
  "125775822": "nightfoxx_125775822.jpg",
  "140258990": "kreekcraft_140258990.png",
  "328744005": "sharkblox_328744005.png"
}
