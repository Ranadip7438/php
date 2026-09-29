<?php
$fullname = $_POST['fullname'] ?? '';
$email = $_POST['email'] ?? '';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Q1 Result</title>
</head>
<body>
    <h2>Submitted Data</h2>
    <p>Full Name: <?php echo htmlspecialchars($fullname); ?></p>
    <p>Email Address: <?php echo htmlspecialchars($email); ?></p>
</body>
</html>
