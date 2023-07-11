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
                <a class="nav-link" href="catalogue.php">Каталог</a>
                <a class="nav-link" href="#">Мероприятия</a>
                <a class="nav-link" href="#">Контакты</a>
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
</footer>

</html>