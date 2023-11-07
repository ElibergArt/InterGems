<?php
$servername = "localhost";
$username = "site";
$password = "4316464";
$dbname = "intergems";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Ошибка: " . $conn->connect_error);
}

if (!isset($_GET['category'])) {
    header("Location: 404.php");
    exit();
}

$category = $_GET['category'];


$sql = "SELECT * FROM $category ";
$result = mysqli_query($conn, $sql);

// Проверка результата запроса
if ($result) {

} else {
    // Если запрос не выполнен
    echo "Ошибка выполнения запроса: " . mysqli_error($conn);
}

$field = mysqli_fetch_field_direct($result, 0);
// $field_table = str_replace("tm", "Tourmaline", $field->table);
echo "<div class='stock_table-name'>
    <h2> " . $category . " </h2>
    </div>  
    ";
echo "<div class='stock_base'>";
echo "";
// тут будет плашка фильтров. В графе реквеста надо прописать идентичность слов "полихромный" и "арбузный" для правильной работы фильтра
foreach ($result as $row) {
    echo "
    <a href='productcard.php?category=" . $category . "&id=" . $row['id'] . "'>
    
        
            <div class='product_card " . $row['color'] . " " . $row['cut'] . " " . $row['type'] . "'>
                <h4>
                    " . $row['color'] . " " . $row['gem'] . "
                </h4>
                    <div class='stock_image-container'><img class='stock_image-container' src='assets/img/gems/" . $category . "/" . $row['num'] . ".jpg'  alt='Image'> 
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