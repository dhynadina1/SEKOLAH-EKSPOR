<?php
include 'connection.php';
$db = new database();

// POST = FORM

$id = $_GET['id'];
$name = $_POST['name'];
$year = $_POST['year'];

$insert = $db->updateStudent($id, $name, $year);

// Membuat response
if($insert) {
    $response = array(
        'status' => 200,
        'message' => 'Success update a class',
        'data' => $insert
    );
} else {
    $response = array(
        'status' => 403,
        'message' => 'Failed update a class',
        'data' => ""
    );
}


// Memberitahu respon sebagai json
header('Content-Type: application/json');

// Mengembalikan respon dalam bentuk json
echo json_encode($response);
?>