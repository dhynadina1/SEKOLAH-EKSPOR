<?php 
include 'connection.php';
$db = new database();

// Menghapus data
$id = $_GET['id'];
$data = $db->deleteStudent($id);

// Membuat response
if ($data) {
    $response = array(
        'status' => 200,
        'message' => 'Success delete class',
        'data' => ""
    );
} else {
    $response = array(
        'status' => 403,
        'message' => 'Failed delete class',
        'data' => ""
    );
}


// Memberitahu respon sebagai json
header('Content-Type: application/json');

// Mengembalikan respon dalam bentuk json
echo json_encode($response);
?>
