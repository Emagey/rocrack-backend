<?php
$bytes = random_bytes(16);
$hex = bin2hex($bytes);
$key = substr($hex, 0, 8) . '-' .substr($hex, 8, 4) . '-' .substr($hex, 12, 4) . '-' .substr($hex, 16, 4) . '-' .substr($hex, 20, 12);

echo $key;
