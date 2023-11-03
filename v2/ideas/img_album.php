<html lang="ru">

<head>
    <meta charset="utf-8">
    <style>
        /* The grid: Four equal columns that floats next to each other */
        .column {
            /* float: left; */
            width: 25%;
            padding: 10px;
            width: 100px;
            height: 100px;
            overflow: hidden;

        }

        /* Style the images inside the grid */
        .column img {
            opacity: 0.8;
            cursor: pointer;
            background-color: aquamarine;
            object-fit: cover;
            width: 100%;

            height: 100%;
        }

        .column img:hover {
            opacity: 1;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: flex;
            flex-wrap: wrap;
            clear: both;
        }

        /* The expanding image container (positioning is needed to position the close button and the text) */
        .container {
            position: relative;
            display: block;
            /* width: 100px;
            height: 50px; */
            background-color: aquamarine;
            width: 600px;
            height: 600px;

        }

        .container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Expanding image text. No need for that*/
        #imgtext {
            position: absolute;
            bottom: 15px;
            left: 15px;
            color: white;
            font-size: 20px;
        }

        /* Closable button inside the image */
        .closebtn {
            position: absolute;
            top: 10px;
            right: 15px;
            color: white;
            font-size: 35px;
            cursor: pointer;
        }

        .page-content {
            display: flex;
            flex-wrap: nowrap;
            align-items: center;
        }
    </style>
</head>

<body>
    <!-- The grid: four columns -->

    <div class="page-content">
        <div class="row">
            <div class="column">
                <img src="TN/TN1.jpg" onclick="myFunction(this);">
            </div>
            <div class="column">
                <img src="TN/TN2.jpg" onclick="myFunction(this);">
            </div>
            <div class="column">
                <img src="TN/TN3.jpg" onclick="myFunction(this);">
            </div>
            <div class="column">
                <img src="TN/TN4.jpg" onclick="myFunction(this);">
            </div>
        </div>

        <!-- The expanding image container -->
        <div class="container">
            <!-- Close the image -->
            <!-- <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>  no need for it-->

            <!-- Expanded image -->
            <img src="TN/TN1.JPG" id="expandedImg" style="width:100%">

            <!-- Image text -->
            <div id="imgtext"></div>
        </div>
    </div>

</body>
<footer>
    <script>
        function myFunction(imgs) {
            var expandImg = document.getElementById("expandedImg");
            var imgText = document.getElementById("imgtext");
            expandImg.src = imgs.src;
            imgText.innerHTML = imgs.alt;
            expandImg.parentElement.style.display = "block";
        }
    </script>
</footer>
<!-- При создании новой папки необходимо основную фотографию указывать как 1.jpg, последующие – как 2, 3 и т.д. -->

</html>
<?php
echo
    "<div class='page-content'>
    <div class='row'>
        <div class='column'>
            <img src=' " . $category . "/ " . $row['num'] . " / " . $addednumber . "' onclick='myFunction(this);'>
        </div>
        <div class='column'>
            <img src='TN/TN2.jpg' onclick='myFunction(this);'>
        </div>
        <div class='column'>
            <img src='TN/TN3.jpg' onclick='myFunction(this);'>
        </div>
        <div class='column'>
            <img src='TN/TN4.jpg' onclick='myFunction(this);'>
        </div>
    </div>"
    ?>

<!-- Это предложение от ГПТ. Тут не все нам подходит
Понимаю, что задача немного сложнее. Чтобы решить ее, вам потребуется использовать функции для работы с файлами и базой данных в PHP. Вот пример кода, который может помочь вам:
// Получение количества картинок в папке
$folder = 'путь_к_папке_с_картинками';
$files = scandir($folder);
$numImages = count($files) - 2; // Вычитаем 2, чтобы учесть "." и ".."

// Получение значения столбца num из базы данных
$category = 'Турмалин';
$query = "SELECT num FROM ваша_таблица WHERE category = '$category'";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_assoc($result);
$num = $row['num'];

// Создание запроса для каждой картинки
for ($i = 1; $i <= $numImages; $i++) {
    $addedNumber = $num + $i;
    $imageUrl = "адрес_сайта/путь_к_папке_с_картинками/картинка_$addedNumber.jpg";
    // Ваш код для обращения к адресу и вывода картинки
}
CopyCopy
Обратите внимание, что вам нужно будет заменить "путь_к_папке_с_картинками", "ваша_таблица" и "адрес_сайта" на фактические значения в соответствии с вашими требованиями. Также убедитесь, что у вас есть соединение с базой данных и правильно настроены функции для работы с ней.
Вы правы, если столбец "num" имеет не числовое значение, то операция сложения $addedNumber = $num + $i; может вызвать проблемы. В этом случае вам нужно будет использовать другой подход для создания значения $addedNumber. Например, вы можете использовать конкатенацию строк, чтобы объединить значение столбца "num" с числовым значением $i. Вот пример кода, который может помочь:CopyCopyCopyCopyCopyCopy
$addedNumber = $num . $i;
CopyCopy
Пожалуйста, убедитесь, что вы правильно адаптируете этот код к вашим требованиям и структуре вашей базы данных. Если у вас возникнут еще вопросы, не стесняйтесь задавать.

Можно как-то упростить задачу перебора количества картинок в папке? Надо, чтобы в итоге получался полный перечень ссылок на все картинки в папке. Адрес первой картинки будет выглядеть как "Турмалин/TN1/1.jpg"
GPT Avatar
Да, можно упростить задачу перебора количества картинок в папке. Вы можете использовать функцию scandir() для получения списка файлов в папке, а затем отфильтровать только файлы с расширением изображений (например, .jpg, .png и т.д.). Вот пример кода, который может помочь:CopyCopy
$folderPath = "Турмалин/TN1/"; // Путь к папке с изображениями
$files = scandir($folderPath); // Получаем список файлов в папке

$imageLinks = array(); // Создаем пустой массив для хранения ссылок на изображения

foreach ($files as $file) {
    $extension = pathinfo($file, PATHINFO_EXTENSION); // Получаем расширение файла
    $allowedExtensions = array("jpg", "png", "jpeg"); // Укажите здесь допустимые расширения изображений

    if (in_array($extension, $allowedExtensions)) {
        $imageLinks[] = $folderPath . $file; // Добавляем ссылку на изображение в массив
    }
}

// Выводим полный перечень ссылок на все картинки в папке
foreach ($imageLinks as $link) {
    echo $link . "<br>";
}

Пожалуйста, убедитесь, что вы правильно адаптируете этот код к вашей структуре папок и требованиям. Если у вас возникнут еще вопросы, не стесняйтесь задавать.

а, вы можете использовать переменные $category и $num для определения пути к папке с изображениями. В этом случае вы можете изменить строку $folderPath = "Турмалин/TN1/"; на $folderPath = $category . $num . "/";. Таким образом, путь к папке будет формироваться на основе значений переменных $category и $num. Например, если $category равно "Турмалин" и $num равно "TN1", то путь к папке будет "Турмалин/TN1/". Пожалуйста, убедитесь, что вы правильно адаптируете этот код к вашим требованиям и структуре папок. Если у вас возникнут еще вопросы, не стесняйтесь задавать.
-->


<!-- 
то есть, запрос к конкретной карнитке будет 
$folderPath = $category "/" . $num



!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
full code fo this
!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
<?php
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

$folderPath = $category . "/" . $num;
$files = scandir($folderpath);
$imageLinks = array();

foreach ($files as $file) {
    $extension = pathinfo($file, PATHINFO_EXTENSION); // Получаем расширение файла
    $allowedExtensions = array("jpg", "png", "jpeg"); // Укажите здесь допустимые расширения изображений

    if (in_array($extension, $allowedExtensions)) {
        $imageLinks[] = $folderPath . $file; // Добавляем ссылку на изображение в массив
    }
}

// Выводим полный перечень ссылок на все картинки в папке
foreach ($imageLinks as $link) {
    echo $link . "<br>";
}
?>
пока еще не проверялось на работоспособность
 -->