<?php
$servername = "localhost";
$username = "site";
$password = "4316464";
$dbname = "News";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// if ($conn->connect_error) {
//     die("Ошибка: " . $conn->connect_error);
// }

// if (!isset($_GET['category'])) {
//     header("Location: 404.php");
//     exit();
// }

// $category = $_GET['category'];


$sql = "SELECT * FROM News ";
$result = mysqli_query($conn, $sql);

// Проверка результата запроса
if ($result) {

} else {
    // Если запрос не выполнен
    echo "Ошибка выполнения запроса: " . mysqli_error($conn);
}

// $field = mysqli_fetch_field_direct($result, 0);
// echo "<div class='stock_table-name'>
//     <h2> " . $category . " </h2>
//     </div>  
//     ";
// echo "<div class='stock_base'>";
// echo "";
foreach ($result as $row) {
    echo "
    
    <div class='content newspage'>
    <div class='news_table'>
        <div class='stock_image-container'>
            <img class='stock_image-container' src='assets/img/news/" . $row[' img'] . ".jpg'  alt='Image'> 
            </div>
        <div class='news_text'>
            <h4>
            " . $row['Head'] . "
        </h4>
        <p> " . $row['Body'] . "</p>
        </div>
     </div>
    </div>
     ";
}
echo "</div>";
$result->free();

$conn->close();

?>