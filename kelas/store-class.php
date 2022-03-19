<?php
include 'connection.php';
$db = new database();

// POST = FORM
$name = $_POST['name'];
$year = $_POST['year'];

$insert = $db->storeClass($name, $year);

// Membuat response
if ($insert) {
    $response = array(
        'status' => 200,
        'message' => 'Success create a class',
        'data' => $insert
    );
} else {
    $response = array(
        'status' => 403,
        'message' => 'Failed create a class',
        'data' => ""
    );
}


// Memberitahu respon sebagai json
header('Content-Type: application/json');

// Mengembalikan respon dalam bentuk json
echo json_encode($response);

?>
