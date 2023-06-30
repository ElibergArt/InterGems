<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<title>Intergems –
    <?php echo $title; ?>
</title>

<head>
    <link rel="stylesheet" href="style.css">
    <title>Intergems</title>
</head>

<body>


    <div class="head_img">
        <!-- <div class="logo_background">
            <img src="logo.svg" alt="">
        </div> -->
        <img src="img/main.JPG" alt="">

    </div>
    <div class="menu-bar">
        <a href="index.php">
            <div class="menu-button">
                <p>О компании</p>
            </div>
        </a>
        <a href="stock.php">
            <div class="menu-button dropdown">
                <p> Каталог камней
                </p>
                <div class="menu-button-dropdown-content"></div>

            </div>
        </a>
        <a href="#">
            <div class="menu-button">
                <p> Ближайшие мероприятия</p>
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
    <div></div>
</footer>

</html>