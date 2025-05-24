<?php


header('Content-Type: application/json');


$host = 'localhost';
$db = 'travel';
$user = 'root';
$pass = '';


$conn = new mysqli($host, $user, $pass, $db);


if ($conn->connect_error) {
    echo json_encode(['success' => false, 'message' => 'Database Error']);
    exit();
}


if (!isset($_POST['username']) || !isset($_POST['password'])) {
    echo json_encode(['success' => false, 'message' => 'Missing username or password']);
    exit();
}

$username = $_POST['username'];
$password = md5($_POST['password']);


$sql = "SELECT * FROM users WHERE username = ? AND password = ?";
$stmt = $conn->prepare($sql);

if (!$stmt) {
    echo json_encode(['success' => false, 'message' => 'Query prepare failed']);
    exit();
}

$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo json_encode(['success' => true, 'message' => 'Login Successful']);
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid Username Or Password']);
}

$stmt->close();
$conn->close();
?>
