<?php
$conn = new mysqli("localhost", "root", "", "intergems");
if ($conn->connect_error) {
    die("Ошибка: " . $conn->connect_error);
}
$sql = "SELECT * FROM tm";
if ($result = $conn->query($sql)) {
    $rowsCount = $result->num_rows; // количество полученных строк

    $field = mysqli_fetch_field_direct($result, 0);
    $field_table = str_replace("tm", "Tourmaline", $field->table);

    echo "<div class='stock_table-name'>
    <h2> " . $field_table . " </h2>
    </div>
    ";
    echo "<div class='stock_base'>";
    foreach ($result as $row) {
        echo "<div class='product_card'>
            <h4>
                " . $row['color'] . " " . $row['gem'] . "
            </h4>
            <img src='" . $row['img_path'] . "' style='height: 200px; width: 200px' alt='Image'> 
            <p>Weight: " . $row['weight'] . "</p>
            <p>Cut: " . $row['cut'] . "<p>       
    </div>";
    }
    echo "</div>";
    $result->free();
} else {
    echo "Ошибка: " . $conn->error;
}
$conn->close();

?>