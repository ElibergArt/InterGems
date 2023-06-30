<?php
$title="stock";
ob_start();
include "request.php";
$content = ob_get_clean();
include "template.php";
?>