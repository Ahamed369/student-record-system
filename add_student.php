<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Set header to return JSON response
header('Content-Type: application/json');

// Check if request method is POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode([
        'success' => false,
        'message' => 'Only POST requests are allowed'
    ]);
    exit;
}

// Get the raw POST data
$rawData = file_get_contents('php://input');
$newStudent = json_decode($rawData, true);

// Validate the incoming data
if (!$newStudent) {
    echo json_encode([
        'success' => false,
        'message' => 'Invalid JSON data received'
    ]);
    exit;
}

// Validate required fields
$requiredFields = ['sid', 'name', 'age', 'address', 'cgpa'];
foreach ($requiredFields as $field) {
    if (!isset($newStudent[$field]) || empty($newStudent[$field])) {
        echo json_encode([
            'success' => false,
            'message' => "Missing required field: $field"
        ]);
        exit;
    }
}

// Read existing students from JSON file
$jsonFile = 'students.json';

if (!file_exists($jsonFile)) {
    echo json_encode([
        'success' => false,
        'message' => 'students.json file not found'
    ]);
    exit;
}

$jsonData = file_get_contents($jsonFile);
$students = json_decode($jsonData, true);

if ($students === null) {
    echo json_encode([
        'success' => false,
        'message' => 'Error reading students.json file'
    ]);
    exit;
}

// Check if student ID already exists
foreach ($students as $student) {
    if ($student['sid'] === $newStudent['sid']) {
        echo json_encode([
            'success' => false,
            'message' => 'Student ID already exists'
        ]);
        exit;
    }
}

// Add new student to array
$students[] = $newStudent;

// Write updated data back to JSON file
$jsonOutput = json_encode($students, JSON_PRETTY_PRINT);

if (file_put_contents($jsonFile, $jsonOutput) === false) {
    echo json_encode([
        'success' => false,
        'message' => 'Error writing to students.json file'
    ]);
    exit;
}

// Return success response
echo json_encode([
    'success' => true,
    'message' => 'Student added successfully',
    'student' => $newStudent
]);
?>