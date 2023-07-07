<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<title>Intergems –
    <?php echo $title; ?>
</title>
<?php
$servername = "localhost";
$username = "site";
$password = "4316464";
$dbname = "intergems";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Ошибка: " . $conn->connect_error);

}
?>

<head>

</head>

<body>
    <div class="head_img">
        <a href="index.php">
            <div class="logo_background">
                <img src="logo.svg" alt="">
            </div>
        </a>
        <img src="img/main.JPG" alt="">
    </div>


    <div class="menu-bar">
        <a href="index.php">
            <div class="menu-button">
                <p>О компании</p>
            </div>
        </a>
        <div class="menu-button-dropdown">

            <div class="menu-button">
                <p>Каталог камней</p>
            </div>
            <div class="submenu">
                <?php
                $sql = "SHOW TABLES";
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_row()) {
                        $table_name = $row[0];
                            echo "<a href='stock.php?category=" . $table_name . "'>
                                    <div class='menu-button'>
                                        <p>"
                                            . $table_name .
                                        "</p>
                                    </div>
                                </a>";
                    }
                } else {
                    echo "Таблица не найдена";
                }
                $conn->close();
                ?>

            </div>
        </div>
        <a href="#">
            <div class="menu-button">
                <p>Ближайшие мероприятия</p>
            </div>
        </a>
        <a href="#">
            <div class="menu-button">
                <p>Как связаться</p>
            </div>
        </a>
    </div>
    <div class="bodypage">
        <?php echo $content; ?>
    </div>
</body>
<footer>

    <div class="footer-box">
        <div>
            <p>Контакты:</p>
            <p>Телефон: 1234745950</p>
        </div>
        <div>
            <p>Contacts</p>
            <p>Телефон: 1234745950</p>
        </div>
    </div>
</footer>

</html>