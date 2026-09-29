<?php

$username = "";
$email = "";
$gender = "";
$mobile = "";
$country = "";
$password = "";
$confirm_password = "";

$errors = [];
$success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = trim($_POST["username"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $gender = $_POST["gender"] ?? "";
    $mobile = trim($_POST["mobile"] ?? "");
    $country = $_POST["country"] ?? "";
    $password = $_POST["password"] ?? "";
    $confirm_password = $_POST["confirm_password"] ?? "";

    if ($username == "") {
        $errors["username"] = "Username is required";
    } elseif (!preg_match("/^[a-zA-Z0-9 ]+$/", $username)) {
        $errors["username"] = "Only alphanumeric characters and spaces are allowed";
    }

    if ($email == "") {
        $errors["email"] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors["email"] = "Invalid email format";
    }

    if ($gender == "") {
        $errors["gender"] = "Gender must be selected";
    }

    if ($mobile == "") {
        $errors["mobile"] = "Mobile number is required";
    } elseif (!preg_match("/^\+?[0-9]{10}$/", $mobile)) {
        $errors["mobile"] = "Mobile number must contain exactly 10 digits";
    }

    if ($country == "") {
        $errors["country"] = "Country must be selected";
    }

    if (strlen($password) < 8) {
        $errors["password"] = "Password must be at least 8 characters";
    }

    if ($confirm_password == "") {
        $errors["confirm_password"] = "Confirm password is required";
    } elseif ($confirm_password != $password) {
        $errors["confirm_password"] = "Passwords do not match";
    }

    if (empty($errors)) {
        $success = "Registration Successful";

        $username = "";
        $email = "";
        $gender = "";
        $mobile = "";
        $country = "";
        $password = "";
        $confirm_password = "";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>

    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .form-box {
            width: 500px;
            margin: 30px auto;
        }

        .row {
            margin-bottom: 15px;
        }

        .row input[type="text"],
        .row input[type="email"],
        .row input[type="password"],
        .row select {
            width: 250px;
            padding: 7px;
        }

        .error {
            color: red;
            margin-left: 8px;
        }

        .success {
            color: green;
            margin-bottom: 15px;
        }
    </style>
</head>

<body>

<div class="form-box">

    <h2>Registration Form</h2>

    <?php
    if ($success != "") {
        echo '<div class="success">' . $success . '</div>';
    }
    ?>

    <form method="post" action="registration.php">

        <div class="row">
            <label>Username:</label>
            <input type="text" name="username"
                   value="<?php echo htmlspecialchars($username); ?>">

            <?php
            if (isset($errors["username"])) {
                echo '<span class="error">* ' . htmlspecialchars($errors["username"]) . '</span>';
            }
            ?>
        </div>

        <div class="row">
            <label>Email Address:</label>
            <input type="email" name="email"
                   value="<?php echo htmlspecialchars($email); ?>">

            <?php
            if (isset($errors["email"])) {
                echo '<span class="error">* ' . htmlspecialchars($errors["email"]) . '</span>';
            }
            ?>
        </div>

        <div class="row">
            <label>Gender:</label>

            <input type="radio" name="gender" value="m"
                <?php if ($gender == "m") echo "checked"; ?>> Male

            <input type="radio" name="gender" value="f"
                <?php if ($gender == "f") echo "checked"; ?>> Female

            <input type="radio" name="gender" value="o"
                <?php if ($gender == "o") echo "checked"; ?>> Other

            <?php
            if (isset($errors["gender"])) {
                echo '<span class="error">* ' . htmlspecialchars($errors["gender"]) . '</span>';
            }
            ?>
        </div>

        <div class="row">
            <label>Mobile No:</label>
            <input type="text" name="mobile"
                   value="<?php echo htmlspecialchars($mobile); ?>">

            <?php
            if (isset($errors["mobile"])) {
                echo '<span class="error">* ' . htmlspecialchars($errors["mobile"]) . '</span>';
            }
            ?>
        </div>

        <div class="row">
            <label>Country:</label>

            <select name="country">
                <option value="">Select Country</option>
                <option value="India" <?php if ($country == "India") echo "selected"; ?>>India</option>
                <option value="USA" <?php if ($country == "USA") echo "selected"; ?>>USA</option>
                <option value="UK" <?php if ($country == "UK") echo "selected"; ?>>UK</option>
                <option value="Canada" <?php if ($country == "Canada") echo "selected"; ?>>Canada</option>
            </select>

            <?php
            if (isset($errors["country"])) {
                echo '<span class="error">* ' . htmlspecialchars($errors["country"]) . '</span>';
            }
            ?>
        </div>

        <div class="row">
            <label>Password:</label>
            <input type="password" name="password">

            <?php
            if (isset($errors["password"])) {
                echo '<span class="error">* ' . htmlspecialchars($errors["password"]) . '</span>';
            }
            ?>
        </div>

        <div class="row">
            <label>Confirm Password:</label>
            <input type="password" name="confirm_password">

            <?php
            if (isset($errors["confirm_password"])) {
                echo '<span class="error">* ' . htmlspecialchars($errors["confirm_password"]) . '</span>';
            }
            ?>
        </div>

        <div class="row">
            <input type="checkbox" name="terms" value="yes">
            I agree to the terms and condition
        </div>

        <input type="submit" value="Submit">

    </form>

</div>

</body>
</html>