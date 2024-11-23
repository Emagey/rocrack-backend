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
[{"level":1,"AVhome":1,"AVborder":1,"AVbanner":1},{"level":5,"AVhome":2,"AVborder":2,"AVbanner":2},{"level":10,"AVhome":3,"AVborder":3,"AVbanner":3},{"level":20,"AVhome":4,"AVborder":4,"AVbanner":4},{"level":30,"AVhome":5,"AVborder":5,"AVbanner":5},{"level":328744005,"AVhome":328744005,"AVborder":5,"AVbanner":328744005},{"level":19056130,"AVhome":5,"AVborder":5,"AVbanner":19056130},{"level":140258990,"AVhome":5,"AVborder":5,"AVbanner":140258990},{"level":35,"AVhome":5,"AVborder":5,"AVbanner":6},{"level":125775822,"AVhome":5,"AVborder":5,"AVbanner":125775822},{"level":50,"AVhome":5,"AVborder":6,"AVbanner":7},{"level":65,"AVhome":5,"AVborder":6,"AVbanner":8},{"level":80,"AVhome":5,"AVborder":6,"AVbanner":9}]
