<?php session_start(); ?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="ru"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Регистрация</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Регистрация.css" media="screen">
    <script src="time.js"></script>
    <script src="obrab_reg.js"></script>
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 6.6.3, nicepage.com">
    <meta name="referrer" content="origin">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i">
    
    
    

    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Регистрация">
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
        <p class="u-custom-font u-font-lato u-text u-text-default u-text-1">Регистрация</p>
        
        
        <div class="u-form u-form-1">
          <form action="register.php" method="POST" class="u-clearfix u-form-spacing-23 u-form-vertical u-inner-form" source="email" name="form" style="padding: 42px;">
            <div class="u-form-group u-form-name u-label-top u-form-group-1">
              <label for="name-b2b7" class="u-label u-label-1">Имя</label>
              <input type="text" placeholder="Введите Ваше имя" id="name-b2b7" name="name" class="u-border-3 u-border-black u-input u-input-rectangle u-radius u-input-1" required="" autofocus="autofocus">
            </div>
            <div class="u-form-group u-label-top">
              <label for="email-b2b7" class="u-label u-label-2">Фамилия</label>
              <input type="text" placeholder="Введите фамилию" id="email-b2b7" name="fam" class="u-border-3 u-border-black u-input u-input-rectangle u-radius u-input-2" required="required">
            </div>
            <div class="u-form-group u-label-top">
              <label for="message-b2b7" class="u-label u-label-3">Номер телефона</label>
              <input placeholder="Введите ваш номер" rows="4" cols="50" id="message-b2b7" name="num" class="u-border-3 u-border-black u-input u-input-rectangle u-radius u-input-3" required="required" type="text">
            </div>
            <div class="u-form-email u-form-group u-label-top u-form-group-4">
              <label for="text-400c" class="u-label u-label-4">Mail</label>
              <input type="email" placeholder="Mail" id="text-400c" name="mail" class="u-border-3 u-border-black u-input u-input-rectangle u-radius u-input-4" required="required">
            </div>
            <div class="u-form-group u-label-top u-form-group-5">
              <label for="text-f17a" class="u-label u-label-5">Пароль</label>
              <input type="text" placeholder="Ваш пароль" id="text-f17a" name="pas" class="u-border-3 u-border-black u-input u-input-rectangle u-radius u-input-5" required="required">
            </div>
            <div class="u-form-group u-label-top u-form-group-6">
              <label for="text-2376" class="u-label u-label-6">Банковская карта</label>
              <input type="text" placeholder="Номер карты" id="text-2376" name="card" class="u-border-3 u-border-black u-input u-input-rectangle u-radius u-input-6" required="required">
            </div>
            
            <div class="u-align-center u-form-group u-form-submit u-label-top">
              <button type="submit" class="u-btn u-btn-submit u-button-style">Отправить</button>
              <input type="submit" value="submit" class="u-form-control-hidden">
            </div>


            <div class="u-form-send-message u-form-send-success"> 
            <span>Вы успешно зарегистрировались!</span>
            <button type="button" class="u-close-button">×</button>
        </div>

        <div class="u-form-send-error u-form-send-message">
            <span>Регистрация не удалась. Пожалуйста, исправьте ошибки и попробуйте еще раз.</span>
            <button type="button" class="u-close-button">×</button>
        </div>

            <input type="hidden" value="" name="recaptchaResponse">
            <input type="hidden" name="formServices" value="8ec9ee03-83e9-7f0f-e7d0-34863f6a32ee">
          </form>
        </div>


      </div>
    </section>
    
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-5544"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Денис продакшен</p>
      </div></footer>
      <div id="dateTime"></div>
</body></html>