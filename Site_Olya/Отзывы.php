<?php session_start(); ?>



<!DOCTYPE html>
<html style="font-size: 16px;" lang="ru"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Отзывы</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Отзывы.css" media="screen">
    <script src="time.js"></script>
    <script src="otzv_sam.js"></script>
    <script src="refresh_page.js"></script>

    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 6.6.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    

    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Отзывы">
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
        <div class="u-table u-table-responsive u-table-1">
          <table class="u-table-entity">
            <colgroup>
              <col width="20%">
              <col width="20%">
              <col width="20%">
              <col width="20%">
              <col width="20%">
            </colgroup>
            <thead class="u-align-center u-grey-75 u-table-header u-table-header-1">
              <tr style="height: 46px;">
                <th class="u-border-1 u-border-grey-90 u-table-cell"> Имя</th>
                <th class="u-border-1 u-border-grey-90 u-table-cell">Фамилия</th>
                <th class="u-border-1 u-border-grey-90 u-table-cell"> Mail</th>
                <th class="u-border-1 u-border-grey-90 u-table-cell">Номер телефона</th>
                <th class="u-border-1 u-border-grey-90 u-table-cell">Отзыв</th>
              </tr>
            </thead>
            <tbody class="u-table-body">

            </tbody>
          </table>
          <div class="u-form u-block-e617-35">
          <form action="obrab_otz.php?success=true" method="POST" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" source="email" data-services="0fc48f9821ebba43f87b557d3d47d5ca" name="form" style="padding: 10px;">
        
        
        <div class="u-form-group u-form-name u-block-e617-36">
            <label for="name-c38b" class="u-label u-block-e617-37">Имя</label>
            <input type="text" placeholder="Введите Ваше имя" id="name-c38b" name="name" class="u-input u-input-rectangle u-block-e617-38" required="">
        </div>
        <div class="u-form-group u-block-e617-39">
    <label for="text-a60b" class="u-label u-block-e617-40">Фамилия</label>
    <input type="text" placeholder="Введите фамилию" id="text-a60b" name="fam" class="u-input u-input-rectangle u-block-e617-41">
</div><div class="u-form-email u-form-group u-block-e617-42">
            <label for="email-c38b" class="u-label u-block-e617-43">Эл. почта</label>
            <input type="email" placeholder="Введите имейл адрес" id="email-c38b" name="email" class="u-input u-input-rectangle u-block-e617-44" required="">
        </div>
        <div class="u-form-group u-block-e617-50">
    <label for="text-59fe" class="u-label u-block-e617-51">Номер</label>
    <input type="text" placeholder="Введите ваш номер" id="text-59fe" name="num" class="u-input u-input-rectangle u-block-e617-52">
</div><div class="u-form-group u-form-message u-block-e617-45">
            <label for="message-c38b" class="u-label u-block-e617-46">Сообщение</label>
            <textarea placeholder="Введите Ваше сообщение" rows="4" cols="50" id="message-c38b" name="mes" class="u-input u-input-rectangle u-block-e617-47" required=""></textarea>
        </div>
        <div class="u-align-center u-form-group u-form-submit u-block-e617-48">
          <button type="submit" class="u-btn u-btn-submit u-button-style">Отправить</button>
        </div>
        <div class="u-form-send-message u-form-send-success">
            Спасибо! Ваше сообщение отправлено.
        </div>
        <div class="u-form-send-error u-form-send-message">
            Отправка не удалась. Пожалуйста, исправьте ошибки и попробуйте еще раз.
        </div>
        <input type="hidden" value="" name="recaptchaResponse">
    </form>
</div></div>
          
        </div>


      </div>
      
    </section>
    
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-5544"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Денис продакшен</p>
      </div></footer> 
      <div id="dateTime"></div>
</body></html>