<?php

$title = "Page not found";
$path = "404.html";
$content = file_get_contents($path);
include "template.php";
?>