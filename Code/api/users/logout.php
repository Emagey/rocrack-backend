<?php
header("Access-Control-Allow-Origin: https://www.roblox.com");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");
header("Access-Control-Allow-Credentials: true");

if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
	        exit(0);
}

header("Content-Type: application/json");
/*setcookie('user-data', 'test', [
	            'expires' => time() - 1,
		                    'path' => '/',
				                        'domain' => 'rocrack.astic.site',
							                        'secure' => true,
										                            'httponly' => true,
													                                    'samesite' => 'None'
																	    ]);
setcookie('connect-sid', 'test', [
                    'expires' => time() - 1,
                                    'path' => '/',
                                                        'domain' => 'rocrack.astic.site',
                                                                                'secure' => true,
                                                                                                            'httponly' => true,
                                                                                                                                            'samesite' => 'None'

            ]);
 */
?>
[]
