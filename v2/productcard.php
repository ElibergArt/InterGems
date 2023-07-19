<?php
$title = "Stock";
ob_start(); // начинаем буферизацию вывода
include "productcard_request.php"; // включаем содержимое запроса
$content = ob_get_clean(); // сохраняем содержимое шаблона в переменную $content
include "template_side.php"; // включаем шаблон страницы
?>