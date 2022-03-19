<?php
include 'connection.php';
$db = new database();

// POST = FORM

$id = $_GET['id'];
$name = $_POST['name'];
$nisn = $_POST['nisn'];
$gender = $_POST['gender'];
$class_id = $_POST['class_id'];

$insert = $db->updateStudent($id, $name, $nisn, $gender, $class_id);

// Membuat response
if($insert) {
    $response = array(
        'status' => 200,
        'message' => 'Success update a student',
        'data' => $insert
    );
} else {
    $response = array(
        'status' => 403,
        'message' => 'Failed update a student',
        'data' => ""
    );
}


// Memberitahu respon sebagai json
header('Content-Type: application/json');

// Mengembalikan respon dalam bentuk json
echo json_encode($response);
