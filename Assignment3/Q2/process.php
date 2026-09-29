<?php
$username = $_POST['username'] ?? '';
$email = $_POST['email'] ?? '';
$gender = $_POST['gender'] ?? '';
$mobile = $_POST['mobile'] ?? '';
$country = $_POST['country'] ?? '';
$password = $_POST['password'] ?? '';
$confirm_password = $_POST['confirm_password'] ?? '';
$terms = $_POST['terms'] ?? 'Not selected';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Q2 Result</title>
</head>
<body>
    <h2>Registration Data</h2>
    <p>Username: <?php echo htmlspecialchars($username); ?></p>
    <p>Email Address: <?php echo htmlspecialchars($email); ?></p>
    <p>Gender: <?php echo htmlspecialchars($gender); ?></p>
    <p>Mobile No: <?php echo htmlspecialchars($mobile); ?></p>
    <p>Country: <?php echo htmlspecialchars($country); ?></p>
    <p>Password: <?php echo htmlspecialchars($password); ?></p>
    <p>Confirm Password: <?php echo htmlspecialchars($confirm_password); ?></p>
    <p>Terms and Condition: <?php echo htmlspecialchars($terms); ?></p>
</body>
</html>
