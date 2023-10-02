<?php
// Get the IP address from the POST request
$data = json_decode(file_get_contents('php://input'), true);
$ipAddress = $data['ipAddress'];

// Append the IP address to the text file
file_put_contents('ip_addresses.txt', $ipAddress . PHP_EOL, FILE_APPEND);

// Send a response
echo json_encode(['success' => true]);

// Redirect back to the original page
header('Location: index.html'); // Replace 'index.html' with the actual filename of your HTML page
exit();
?>
