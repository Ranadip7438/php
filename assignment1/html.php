 2. html form and submit it
  <!DOCTYPE html>
 <html>
 <body>
 <form method="post">
    enter Name:<input type="text" name="username" required>
     <input type="submit" value="Submit">
 </form>
 <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Your name is: " . htmlspecialchars($_POST["username"]);
}
?>
</html>
</body>