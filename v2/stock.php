<?php
$title="stock";
ob_start();
// include "request.php";
include "request.php";
$content = ob_get_clean();
include "template_side.php";
?>