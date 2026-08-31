<?php

echo $undefinedVariable;

$error = error_get_last();

if ($error !== null) {

    echo "<pre>";
    print_r($error);
    echo "</pre>";

} else {

    echo "No error has occurred.";
}

?>