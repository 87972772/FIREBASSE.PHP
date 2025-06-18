<?php
header("Content-Type: application/json");

// Get the path like /maintenance.json
$path = $_SERVER['PATH_INFO'] ?? '/';
$url = "https://yush-6896d-default-rtdb.firebaseio.com" . $path;

// Fetch from Firebase
$response = file_get_contents($url);
echo $response;
