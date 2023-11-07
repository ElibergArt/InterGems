<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Finlandica:wght@500&family=Montserrat&display=swap"
        rel="stylesheet">
    <title>InterGems -</title>
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

    <link rel="stylesheet" href="assets/styles/style.css">
    <link rel="stylesheet" href="assets/styles/style_side.css">
</head>

<body>

</body>
<div class="header">
    <div class="container menu">
        <div class="header-inner header-inner-transition">
            <div class="header_logo">
                <a href="index.php">
                    <img src="logo.svg" alt="">
                </a>

            </div>
            <nav class="navbar">
                <a class="nav-link" href="index.php">О нас</a>
                <a class="hidden-link" href="#">
                    <div class="nav-link menu-button-dropdown">Каталог

                        <div class='submenu'>
                            <?php
                            $sql = "SHOW TABLES";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_row()) {
                                    $table_name = $row[0];
                                    echo "<a class'menu-button-dropdown-content' href='stock.php?category=" . $table_name . "'>" . $table_name . "
                                </a>";
                                }
                            } else {
                                echo "Таблица не найдена";
                            }
                            $conn->close();
                            ?>
                        </div>
                    </div>
                </a>

                <a class="nav-link" href="news.php">Новости</a>
                <a class="nav-link" href="contacts.php">Контакты</a>
            </nav>
        </div>
    </div>

</div>
<div class="intro side">
    <!-- <div class="container"> -->
    <!-- <div class="intro_title">
            <h1 class="intro_bigtitle">InterGems</h1>
            <h2 class="intro_stitle">Премиальная огранка и потрясающее качество</h2>
        </div> -->
    <!-- </div> -->
</div>
<div class="page_content">
    <?php echo $content
        ?>
</div>
<footer>
    <script>
        const headeranim = document.querySelector('.header-inner');
        headeranim.classList.remove('header-inner-transition');

        // Добавить наблюдение за появлением элемента
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    headeranim.classList.remove('header-inner-transition');
                    return;
                }
                headeranim.classList.add('header-inner-transition');
            });
        });
        observer.observe(document.querySelector('.intro'));
    </script>
    <!--slideshow script -->
    <script>
        let slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            if (n > slides.length) { slideIndex = 1 }
            if (n < 1) { slideIndex = slides.length }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }
    </script>
</footer>

</html>