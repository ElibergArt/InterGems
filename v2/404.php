<?php

$title = "Page not found";
$path = "html/404.html";
$content = file_get_contents($path);
include "template.php";
?>