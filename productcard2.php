<?php
// Подключение к базе данных
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "intergems";

$linkt = mysqli_connect("localhost", "root", "", "intergems");

$rest = mysqli_query($linkt, "SELECT * FROM data ORDER BY id");
$rowt = mysqli_fetch_assoc($rest);

// Проверка подключения
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Получение идентификатора продукта из параметра GET
$id = $_GET['id'];

// Получение данных о продукте из базы данных
$sql = "SELECT * FROM tm WHERE id = $id";
$result = mysqli_query($conn, $sql);

// Проверка наличия данных
if (mysqli_num_rows($result) > 0) {
    // Вывод данных о продукте
    $row = mysqli_fetch_assoc($result);
    $title = $row['color'] . " " . $row['gem'];
    $description = "Weight: " . $row['weight'] . ", Cut: " . $row['cut'];
    $image_path = $row['img_path'];
} else {
    // Если продукт не найден, выводим сообщение об ошибке
    $title = "Product not found";
    $description = "The requested product could not be found.";
    $image_path = "";
}

// Закрытие соединения с базой данных
mysqli_close($conn); 
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
</head>
<body>
    <h1><?php echo $title; ?></h1>
    <img src="<?php echo $image_path; ?>" alt="Product Image">
    <p>test</p>
</body>
</html>