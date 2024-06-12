<?php

$request_method = $_SERVER["REQUEST_METHOD"];
$resource = isset($url[0]) ? $url[0] : '';

switch ($resource) {
    case 'users':
        require 'users.php';
        break;
    default:
        echo json_encode(['error' => 'Invalid endpoint']);
        break;
}
?>
