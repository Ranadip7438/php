<?php
session_start();
include '../Q5/connect.php';

$username = trim($_POST['username'] ?? '');
$password = $_POST['password'] ?? '';

$sql = "SELECT id, username FROM registration WHERE username = ? AND password = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $row = $result->fetch_assoc();
    $_SESSION['username'] = $row['username'];
    header("Location: home.php");
    exit;
}

header("Location: login.php");
exit;
?>
