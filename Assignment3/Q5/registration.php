<!DOCTYPE html>
<html>
<head>
    <title>Registration Q5</title>
</head>
<body>
    <h2>Registration Form</h2>
    <form action="processreg.php" method="post">
        <label>Username:</label>
        <input type="text" name="username">
        <br><br>
        <label>Email Address:</label>
        <input type="email" name="email">
        <br><br>
        <label>Gender:</label>
        <input type="radio" name="gender" value="m"> Male
        <input type="radio" name="gender" value="f"> Female
        <input type="radio" name="gender" value="o"> Other
        <br><br>
        <label>Mobile No:</label>
        <input type="text" name="mobile">
        <br><br>
        <label>Country:</label>
        <select name="country">
            <option value="">Select Country</option>
            <option value="India">India</option>
            <option value="USA">USA</option>
            <option value="UK">UK</option>
            <option value="Canada">Canada</option>
        </select>
        <br><br>
        <label>Password:</label>
        <input type="password" name="password">
        <br><br>
        <label>Confirm Password:</label>
        <input type="password" name="confirm_password">
        <br><br>
        <label><input type="checkbox" name="terms" value="yes"> I agree to the terms and condition</label>
        <br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
