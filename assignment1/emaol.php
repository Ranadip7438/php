<!DOCTYPE html>
<html>
<body>
<form method="post">
    Email: <input type="text" name="email" required>
    <input type="submit" value="Check">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST["email"]);

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Valid email address.";
    } else {
        echo "Invalid email address.";
    }
}
?>
</body>
</html>
