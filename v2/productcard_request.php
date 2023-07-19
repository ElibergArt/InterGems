<?php
// Проверка, что параметр id передан в URL
if (!isset($_GET['id'])) {
    header("Location: stock.php");
    exit();
}

if (!isset($_GET['category'])) {
     header("Location: 405.php");
    exit();
}


// Получение значения параметра id из URL
$id = $_GET['id'];
$category = $_GET['category'];

// Подключение к базе данных
$servername = "localhost";
$username = "site";
$password = "4316464";
$dbname = "intergems";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Проверка соединения
if (!$conn) {
    die("Ошибка соединения: " . mysqli_connect_error());
}

// Запрос SELECT для получения информации о товаре
$sql = "SELECT * FROM $category WHERE id='$id'";
$result = mysqli_query($conn, $sql);

// Проверка результата запроса
if ($result) {
    // Получение данных из результата запроса
    $row = mysqli_fetch_assoc($result);
    if ($row) {
        // Формирование страницы товара на основе полученных данных
        //echo "<h1>". $row['color']. ' ' . $row['gem'] . "</h1>";
        //echo "<img height='100px' src='" . $row['img_path'] . "' alt='image'>"; //remove height at end
        echo "<div class='productcard_container'>
        <div class='productcard_album'>
            <img  src='assets/img/gems/" . $category . "/" . $row['num'] . ".jpg' alt=''>
        </div>

        

        <div class='productcard_text'>
            <h2> " . $row['gem'] . "</h2>
            <p>Цвет: " . $row['color'] . "</p>
            <p>Вес: " . $row['weight'] . " ct</p> 
            <p>Огранка: " . $row['cut'] . "  </p> 
        <p>Размер: " . $row['size_w'] . "x" . $row['size_h'] . " мм</p>
        <p>Происхождение: " . $row['origin'] . "</p>
        <p>Включения: " . $row['includes'] . "</p>
        <p>Комментарии: " . $row['add_note'] . "</p>
         </div>
    </div>";
        // echo "<p>" . $row['description'] . "</p>";
        // echo "<p>" . $row['price'] . "</p>";


    } else {
        // Если метод mysqli_fetch_assoc() вернул null
        echo "Ошибка: товар не найден";
    }
} else {
    // Если запрос не выполнен
    echo "Ошибка выполнения запроса: " . mysqli_error($conn);
}

// Закрытие соединения
mysqli_close($conn);



?>

<!-- gem, color, cut, size_w, size_h, weigh, img_path, origin, includes, add_type, add_note  -->