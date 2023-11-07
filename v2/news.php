<?php
$title="stock";
ob_start();
include "news_request.php";
$content = ob_get_clean();
include "template_side.php";
?>