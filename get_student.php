<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Set header to return JSON response
header('Content-Type: application/json');

// Read the JSON file
$jsonFile = 'students.json';

// Check if file exists
if (!file_exists($jsonFile)) {
    echo json_encode([
        'success' => false,
        'message' => 'Error: students.json file not found'
    ]);
    exit;
}

// Read file contents
$jsonData = file_get_contents($jsonFile);

// Check if reading was successful
if ($jsonData === false) {
    echo json_encode([
        'success' => false,
        'message' => 'Error: Could not read students.json file'
    ]);
    exit;
}

// Decode JSON to PHP array
$students = json_decode($jsonData, true);

// Check if JSON was valid
if ($students === null) {
    echo json_encode([
        'success' => false,
        'message' => 'Error: Invalid JSON in students.json file'
    ]);
    exit;
}

// Check if student ID is provided via GET request
if (isset($_GET['sid'])) {
    $requestedSid = $_GET['sid'];
    
    // Search for the student with matching SID
    $foundStudent = null;
    foreach ($students as $student) {
        if (strtolower($student['sid']) === strtolower($requestedSid)) {
            $foundStudent = $student;
            break;
        }
    }
    
    // Return the found student or error message
    if ($foundStudent) {
        echo json_encode([
            'success' => true,
            'student' => $foundStudent
        ]);
    } else {
        echo json_encode([
            'success' => false,
            'message' => 'Student not found'
        ]);
    }
} else {
    // If no SID provided, return all students
    echo json_encode([
        'success' => true,
        'students' => $students
    ]);
}
?>