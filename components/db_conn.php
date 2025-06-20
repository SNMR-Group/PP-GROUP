<?php 
$servername = "localhost";
$username = "u810920872_ppgroup";
$password = "Ppgroup@123";
$dbname = "u810920872_ppgroup"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Determine the type of data to fetch
$type = isset($_GET['type']) ? $_GET['type'] : 'furniture';

if ($type === 'furniture') {
    $sql = "SELECT * FROM furniture";
} elseif ($type === 'agriculture') {
    $sql = "SELECT * FROM agriculture";
}elseif ($type === 'fmcg') {
    $sql = "SELECT * FROM fmcg_products";
}elseif ($type === 'property') {
    $sql = "SELECT * FROM realestate";
}elseif ($type === 'electrical') {
    $sql = "SELECT * FROM electrical";
}else {
    echo json_encode(['error' => 'Invalid type']);
    exit();
}

$result = $conn->query($sql);

$data = array();

while($row = $result->fetch_assoc()) {
    $data[] = $row;
}

echo json_encode($data);

$conn->close();
?>
