<?php
require_once 'assets/firebase/init.php'; // Initialize Firebase

    $status = 100;
    $gate_status = [ 
        'gate' => $status
    ];

    $database->getReference('node1')->push($gate_status);





// Node to update
$nodeToUpdate = 'fromnode/node1'; // Replace with your specific node path

// Firebase authentication token (optional, depending on your security rules)
$authToken = "battery-serving-station.firebaseapp.com"; // Replace with your authentication token

// Data to update (in this example, we're updating a 'lastUpdated' field with the current date)
$dataToUpdate = [
    'lastUpdated' => date('Y-m-d H:i:s'),
];

// Convert data to JSON
$jsonData = json_encode($dataToUpdate);

// Create cURL resource
$ch = curl_init();

// Set cURL options
curl_setopt($ch, CURLOPT_URL, $firebaseUrl . '/' . $nodeToUpdate . '.json');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PATCH'); // Use PATCH to update
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Add Firebase authentication token to the header if provided
if ($authToken) {
    $headers = [
        'Authorization: Bearer ' . $authToken,
        'Content-Type: application/json',
    ];
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
}

// Execute cURL session
$response = curl_exec($ch);

// Check for errors
if (curl_errno($ch)) {
    echo 'Error: ' . curl_error($ch);
} else {
    echo 'Data updated successfully!';
}

// Close cURL session
curl_close($ch);