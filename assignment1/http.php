<?php
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') {
    echo "The page is called using HTTPS.";
} else {
    echo "The page is called using HTTP.";
}
?>
