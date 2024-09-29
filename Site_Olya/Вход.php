<?php session_start(); ?>


<!DOCTYPE html>
<html style="font-size: 16px;" lang="ru"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Вход</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Вход.css" media="screen">


    <script src="time.js"></script>
    <script src="obrab_vhod.js"></script>
    <meta name="generator" content="Nicepage 6.6.3, nicepage.com">
    <meta name="referrer" content="origin">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i">
    
    
    

    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Вход">
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
      </div></header>
    <section class="skrollable u-clearfix u-image u-parallax u-shading u-section-1" id="sec-fec3" data-image-width="1680" data-image-height="773">
      <div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-align-center u-custom-font u-font-lato u-text u-text-1">Вход <span style="font-weight: 700;"></span>
        </p>
        <div class="u-align-center u-form u-form-1" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">
         
        <form action="login.php" method="POST" class="u-clearfix u-form-spacing-23 u-form-vertical u-inner-form" source="email" name="form" style="padding: 42px;">
            <div class="u-form-group u-form-name">
              <label for="name-bc64" class="u-label">Mail</label>
              <input type="text" placeholder="Введите ваш Mail" id="name-bc64" name="mail" class="u-border-3 u-border-black u-input u-input-rectangle u-radius u-input-1" required="" autofocus="autofocus">
            </div>
            <div class="u-form-email u-form-group">
              <label for="email-bc64" class="u-label">Пароль</label>
              <input type="email" placeholder="Ваш пароль" id="email-bc64" name="pas" class="u-border-3 u-border-black u-input u-input-rectangle u-radius u-input-2" required="">
            </div>
            <div class="u-align-center u-form-group u-form-submit">
              <button type="submit" class="u-btn u-btn-submit u-button-style">Вход</button>
            </div>

            <div class="u-form-send-message u-form-send-error"> 
              <span>Произошла ошибка! Проверьте данные!</span>
              <button type="button" class="u-close-button">×</button>
          </div>


          </form>
        </div>
      </div>
    </section>
    
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-5544"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Денис продакшен</p>
      </div></footer>
      <div id="dateTime"></div>
</body></html>