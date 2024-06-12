<?php
header("Content-Type: application/json");

// Get the URL path
$url = isset($_GET['url']) ? $_GET['url'] : '';
$url = rtrim($url, '/');
$url = explode('/', $url);

// API version
$version = array_shift($url);

// Include the requested API file
if ($version && file_exists("api/$version/index.php")) {
    require "api/$version/index.php";
} else {
    echo json_encode(['error' => 'Invalid API version']);
}
?>
