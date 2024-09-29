<?php session_start(); ?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="ru"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Аренда</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Аренда.css" media="screen">
    <script src="time.js"></script>
    <script src="arenda_sam.js"></script>
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 6.6.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    

    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Аренда">
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
        <div class="u-align-center u-table u-table-responsive u-table-1">
          <table class="u-table-entity">
            <colgroup>
              <col width="25%">
              <col width="25%">
              <col width="25%">
              <col width="25%">
            </colgroup>
            <thead class="u-align-center u-grey-75 u-table-header u-table-header-1">
              <tr style="height: 25px;">
                <th class="u-border-1 u-border-grey-90 u-table-cell">Марка самоката </th>
                <th class="u-border-1 u-border-grey-90 u-table-cell">Номер самоката</th>
                <th class="u-border-1 u-border-grey-90 u-table-cell"> Цена\Час</th>
                <th class="u-border-1 u-border-grey-90 u-table-cell">Статус</th>
              </tr>
            </thead>
            <tbody class="u-table-body">
            </tbody>
          </table>
        </div>
      </div>
    </section>
    
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-5544"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Денис продакшен</p>
      </div></footer>
      <div id="dateTime"></div>
</body></html>