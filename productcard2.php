
<?php
$conn = new mysqli("localhost", "root", "", "intergems");
if ($conn->connect_error) {
    die("Ошибка: " . $conn->connect_error);
}
$id = 1; // идентификатор строки
$sql = "SELECT * FROM tm WHERE id = $id";
$result = mysqli_query($link, $sql); // $link - соединение с базой данных
$row = mysqli_fetch_assoc($result);

$id = $_GET['id']; // получаем идентификатор товара из параметра GET
$sql = "SELECT * FROM products WHERE id = $id";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($result);



echo "
    <div class='productcard_container'>
        <div class='productcard_album'>
            <img src='img/GEMS/TN/" . $row['id'] . ".jpg' alt=''>
        </div>
    </div>
    <p>123test</p>
    ?>"
    ?> 