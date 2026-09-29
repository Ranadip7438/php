<?php
include 'connect.php';

$username = trim($_POST['username'] ?? '');
$email = trim($_POST['email'] ?? '');
$gender = $_POST['gender'] ?? '';
$mobile = trim($_POST['mobile'] ?? '');
$country = $_POST['country'] ?? '';
$password = $_POST['password'] ?? '';

$sql = "INSERT INTO registration (username, email, gender, mobile, country, password) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssss", $username, $email, $gender, $mobile, $country, $password);

if ($stmt->execute()) {
    header("Location: ../Q6/login.php");
    exit;
}

header("Location: registration.php");
exit;
?>
