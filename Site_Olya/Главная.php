<?php session_start(); ?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="ru"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Главная</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Главная.css" media="screen">
    <script src="time.js"></script>
    <script src="obrab.js"></script>
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 6.6.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster:400">
    
    
  
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Главная">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body data-path-to-root="./" data-include-products="false" class="u-body u-xl-mode" data-lang="ru"><header class="u-clearfix u-header u-header" id="sec-2e6f"><div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-black u-border-2 u-border-black u-preserve-proportions u-shape u-shape-circle u-shape-1"></div>
        <div class="u-black u-border-2 u-border-black u-preserve-proportions u-shape u-shape-circle u-shape-2"></div>
        <div class="u-border-3 u-border-black u-line u-line-horizontal u-line-1"></div>
        <div class="u-border-3 u-border-black u-line u-line-vertical u-line-2"></div>
        <div class="u-border-3 u-border-black u-line u-line-vertical u-line-3"></div>
        <nav class="custom-menu custom-menu-one-level offcanvas-menu menu-1">
          <div class="custom-menu nav-container">
              <ul class="u-nav u-unstyled u-nav-1">
                  <li class="nav-item"><a class="border-1 border-grey-75 button-style nav-link radius text-active-custom-color-1 text-hover-palette-2-base" href="Главная.php">Главная</a></li>
                  <li class="nav-item"><a class="border-1 border-grey-75 button-style nav-link radius text-active-custom-color-1 text-hover-palette-2-base" href="История_аренды.php">История</a></li>
                  <li class="nav-item"><a class="border-1 border-grey-75 button-style nav-link radius text-active-custom-color-1 text-hover-palette-2-base" href="Аренда.php">Арендовать</a></li>
                  <li class="nav-item"><a class="border-1 border-grey-75 button-style nav-link radius text-active-custom-color-1 text-hover-palette-2-base" href="Отзывы.php">Отзывы</a></li>
              </ul>
          </div>
      </nav>
      <div id="emailBlock">
    <?php 
    if(isset($_SESSION['email']) && !empty($_SESSION['email'])) {
        echo $_SESSION['email'];
    } else {
        echo "Mail";
    }
    ?></div>
    <a href="Регистрация.php" class="u-align-right u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-btn u-button-style u-none u-text-palette-1-base u-btn-1">Регистрация</a>
    <a href="Вход.php" class="u-align-right u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-btn u-button-style u-none u-text-palette-1-base u-btn-2">Вход</a>
    </header>

    
    <section class="skrollable u-clearfix u-image u-parallax u-shading u-section-1" id="sec-fec3" data-image-width="1680" data-image-height="773">
      <div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-align-center u-custom-font u-font-lobster u-text u-text-white u-text-1">Добро пожаловать на сайт аренды самокатов – вашего надежного спутника в исследовании города с легкостью и стилем!<br>
          <br>&nbsp; Мы рады предложить вам широкий выбор качественных самокатов для всех возрастов и уровней навыков. Будьте готовы к невероятным приключениям в городе: исследуйте его улицы, парки и достопримечательности, наслаждайтесь свежим воздухом и замечательными видами, передвигаясь на наших удобных и безопасных самокатах.<br>
          <br>&nbsp;Независимо от того, вы отправляетесь на прогулку вдоль набережной с друзьями, ищете новые места для фотосессии или просто наслаждаетесь свежим воздухом, наши самокаты помогут вам сделать ваше путешествие незабываемым.<br>
          <br>&nbsp; Не упустите возможность сделать ваш отдых ярким и увлекательным – арендуйте самокаты у нас прямо сейчас и отправляйтесь на приключение!
        </p>

        
        <form id="survey-form" action="obrab.php" method="POST">
    <h2>Опрос</h2>

    <p>Как часто вы бы хотели арендовать самокаты?:</p>
    <input type="radio" id="вопрос1_вариант1" name="вопрос1" value="1">
    <label for="вопрос1_вариант1">Раз в неделю</label><br>
    <input type="radio" id="вопрос1_вариант2" name="вопрос1" value="0">
    <label for="вопрос1_вариант2">По мере необходимости</label><br>

    <p>На какой период времени вы обычно арендуете самокаты?</p>
    <input type="radio" id="вопрос2_вариант1" name="вопрос2" value="0">
    <label for="вопрос2_вариант1">На несколько часов</label><br>
    <input type="radio" id="вопрос2_вариант2" name="вопрос2" value="1">
    <label for="вопрос2_вариант2">На целый день</label><br>

    <p>Какой тип самоката вы предпочитаете?</p>
    <input type="radio" id="вопрос3_вариант1" name="вопрос3" value="1">
    <label for="вопрос3_вариант1">Электрический (с мотором)</label><br>
    <input type="radio" id="вопрос3_вариант2" name="вопрос3" value="0">
    <label for="вопрос3_вариант2">Классический (без мотора)</label><br>

    <button type="submit">Отправить</button>
</form>


          
          <div id="result-message">
        <h3>Результат опроса</h3>
        <p>Кол-во правильных ответов <span id="result"></span></p>
    </div>
      </div>
      
    </section>
    
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-5544"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Денис продакшен</p>
      </div></footer>
    <div id="dateTime"></div>
</body></html>