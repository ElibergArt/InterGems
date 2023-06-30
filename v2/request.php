<?php
$servername = "localhost";
$username = "site";
$password = "4316464";
$dbname = "intergems";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Ошибка: " . $conn->connect_error);
}
$sql = "SELECT * FROM tm";
$result = mysqli_query($conn, $sql);

// Проверка результата запроса
if ($result) {
    // Формирование списка товаров
    // echo "<ul>";
    // while ($row = mysqli_fetch_assoc($result)) {
    //     echo "<li>";
    //     echo "<a href='productcard.php?id=" . $row['id'] . "'>";
    //     echo "<img src='" . $row['image'] . "' alt='" . $row['name'] . "'>";
    //     echo "<h3>" . $row['name'] . "</h3>";
    //     echo "<p>" . $row['price'] . "</p>";
    //     echo "</a>";
    //     echo "</li>";
    // }
    // echo "</ul>";
} else {
    // Если запрос не выполнен
    echo "Ошибка выполнения запроса: " . mysqli_error($conn);
}

$field = mysqli_fetch_field_direct($result, 0);
$field_table = str_replace("tm", "Tourmaline", $field->table);

echo "<div class='stock_table-name'>
    <h2> " . $field_table . " </h2>
    </div>
    ";
echo "<div class='stock_base'>";
foreach ($result as $row) {
    echo "
        <a href='productcard.php?id=" . $row['id'] . "'>
            <div class='product_card'>
                <h4>
                    " . $row['color'] . " " . $row['gem'] . "
                </h4>
                    <div class='stock_image-container'><img class='stock_image-container' src='" . $row['img_path'] . "'  alt='Image'> 
                    </div>
                    <p>Вес: " . $row['weight'] . "</p>
                    <p>Огранка: " . $row['cut'] . "<p>       
                 </a>
             </div>";
}
echo "</div>";
$result->free();

$conn->close();

?>