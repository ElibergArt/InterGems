<html>

<?php
// установка соединения с базой данных
$mysqli = new mysqli("localhost", "username", "password", "database");

// имя таблицы в базе данных
$tn = "tn";

// имя таблицы, которое нужно заменить
$tab_name = "Tourmaline";

// формирование запроса
$query = "SELECT * FROM " . ($tn == "tn" ? $tab_name : $tn);

// выполнение запроса
$result = $mysqli->query($query);

// обработка результатов запроса
while ($row = $result->fetch_assoc()) {
    // обработка строки результата
}
echo "<p>" . $table . "</p>";


?>

</html>