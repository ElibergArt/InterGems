<html>
<!doctype html>
<head>
    <title>InterGems – <?php echo $title;?></title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<div class="index">
    <div class="igems">
        <svg version="1.1" width="42" height="42" viewBox="0 0 1024 1024">
            <path class="facet-1" fill="#72F2FE" d="M67.296 385.664l428.736 532.128-171.936-532.128h-256.8z"></path>
            <path class="facet-2" fill="#2AD5E5" d="M370.688 385.664l151.84 533.216 130.656-533.216h-282.496z"></path>
            <path class="facet-3" fill="#72F2FE" d="M545.632 917.792l412.736-532.128h-254.816l-157.92 532.128z"></path>
            <path class="top-facet-1" fill="#2AD5E5" d="M188.448 139.264l-123.744 211.584h247.52l-123.776-211.584z">
            </path>
            <path class="top-facet-2" fill="#72F2FE" d="M474.848 127.136h-247.52l123.776 218.848 123.744-218.848z">
            </path>
            <path class="top-facet-3" fill="#2AD5E5" d="M634.816 350.848l-123.744-211.584-123.776 211.584h247.52z">
            </path>
            <path class="top-facet-4" fill="#72F2FE" d="M796.672 127.136h-247.552l123.744 218.848 123.808-218.848z">
            </path>
            <path class="top-facet-5" fill="#2AD5E5" d="M959.328 350.848l-123.744-211.584-123.808 211.584h247.552z ">
            </path>
        </svg>

        <div>
            <img class="svglogo" src="img/logo.svg" height="200px" alt="">
        </div>

    </div>
</div>
<div class="top_menu">
    <a href="/index.php" class="top_menu">
        <div class="top_menu_button">
            <p class="link">About</p>
        </div>
    </a>
    <a href="/stock.php" class="top_menu">
        <div class="top_menu_button">
            <p class="link">Stock</p>
        </div>
    </a>
    <a href="/contacts.php" class="top_menu">
        <div class="top_menu_button">
            <p class="link">Contacts</p>
        </div>
    </a>
</div>
<body>
		<?php echo $content; ?>
        <div>

        </div>
</body>
<footer>
    <div class="footer-holder">
        <div class="contacts">
            <p>
                Контакты
            </p>
            <a href="tel:88005553535">
                +7(800) 555-35-35
            </a>
        </div>
        <div class="contacts" style="text-align: right;">
            <p>Адрес: Неизвестный проезд дом 100500 офис 228</p>
            <p>Test</p>
        </div>
    </div>
</footer>

</html>