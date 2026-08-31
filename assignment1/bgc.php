<?php



 



//6. return the components of the url 
 $url = 'https://www.w3resource.com/php-exercises/php-basic-exercises.php';
 $parts = parse_url($url);

 echo "Scheme: " . $parts['scheme'] . "<br>";
 echo "Host: " . $parts['host'] . "<br>";
 echo "Path: " . $parts['path'];



?>



