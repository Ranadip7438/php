<!DOCTYPE html>
<html>
<body>

<form method="post">

    Enter Number:
    <input type="number" name="number" required>

    <input type="submit" value="Check">

</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $number = (int)$_POST["number"];

    if ($number % 2 == 0) {

        echo "$number is Even.";

    } else {

        echo "$number is Odd.";
    }
}

?>

</body>
</html>