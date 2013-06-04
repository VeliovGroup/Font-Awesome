<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en" xmlns="http://www.w3.org/1999/html"> <!--<![endif]-->
<head>
  <!-- Basic Page Needs
 ================================================== -->
  <meta charset="utf-8" />
  <title>Font Awesome по Русски</title>
  <meta name="description" content="Font Awesome: на Русском. Font Awesome, иконки для дизайнеров и совместного использования с Twitter Bootstrap">
  <meta name="keywords" content="Twitter, Bootstrap, Font Awesome, примеры, russian, CSS, CSS3, HTML, HTML5, font, шрифт, шрифты, front-end, frontend, разработчик, Toolkit, LESS, на русском, по русски, по-русски">

  <!-- FaceBook Open Graph -->
  <meta id="ogtitle" property="og:title" content="Font Awesome: на Русском" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="http://fontawesome.veliovgroup.com" />
  <meta property="og:image" content="http://veliovgroup.com/admin/uploads/fa.png" />
  <meta id="ogname" property="og:site_name" content="Font Awesome, иконки для дизайнеров и совместного использования с Twitter Bootstrap" />
  <meta id="ogdesc" property="og:description" content="Font Awesome: на Русском. Font Awesome, иконки для дизайнеров и совместного использования с Twitter Bootstrap" />
  <!--END FaceBook Open Graph-->

  <!--<meta name="viewport" content="width=device-width; initial-scale=1; maximum-scale=1">-->

  <!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

  <!-- CSS
 ================================================== -->

  <link rel="stylesheet" href="assets/css/site.css">
  <link rel="stylesheet" href="assets/css/prettify.css">
  <link rel="stylesheet" href="assets/css/font-awesome.css">
  <!--[if IE 7]>
  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css">
  <![endif]-->
  <!-- Le fav and touch icons -->
  <link rel="shortcut icon" href="assets/ico/favicon.ico">

  <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-12784007-22']);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  </script>
</head>
<body data-spy="scroll" data-target=".navbar">

<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <a class="brand" href="#"><i class="icon-flag"></i> Font Awesome</a>
      <ul class="nav">
        <li><a href="#whats-new">Что нового?</a></li>
        <li class="dropdown">
          <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">
            Иконки
            <i class="icon-caret-down"></i>
          </a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#icons-new">Новые иконки</a></li>
            <li class="divider"></li>
            <li class="nav-header">Все иконки</li>
            <li><a href="#icons-web-app"><i class="icon-edit"></i> Веб приложение</a></li>
            <li><a href="#icons-text-editor"><i class="icon-save"></i> Редактор текста</a></li>
            <li><a href="#icons-directional"><i class="icon-hand-right"></i> Указатели</a></li>
            <li><a href="#icons-video-player"><i class="icon-play"></i> Видео плеер</a></li>
            <li><a href="#icons-social"><i class="icon-github"></i> Социальные</a></li>
            <li><a href="#icons-medical"><i class="icon-stethoscope"></i> Медицинские</a></li>
          </ul>
        </li>
        <li><a href="#integration">Интеграция</a></li>
        <li><a href="#examples">Примеры</a></li>
        <li><a href="#contribute">Сотрудничество</a></li>
        <li><a href="#roadmap">Roadmap</a></li>
        <li><a href="#license">Лицензия</a></li>
      </ul>
      <ul class="nav pull-right">
        <li><a href="mailto:dave@davegandy.com"><i class="icon-envelope"></i> Dave</a></li>
      </ul>
    </div>
  </div>
</div>


<div class="jumbotron">
<div class="container">
  <div class="row">
    <div class="span8">
      <div class="hero-content">
        <h1>Font Awesome</h1>
        <p>Шрифтовые иконки для<br>использования с Twitter Bootstrap</p>
        <div class="actions">
          <a class="btn btn-primary btn-large" href="https://github.com/FortAwesome/Font-Awesome/zipball/master"
             onClick="_gaq.push(['_trackEvent', 'Outbound Link', 'Download on GitHub']);">
            <i class="icon-download icon-2x pull-left"></i>
            Скачать Font<br>Awesome</a>
          <a class="btn btn-large btn-github" href="https://github.com/FortAwesome/Font-Awesome" target="_blank"
             onClick="_gaq.push(['_trackEvent', 'Outbound Link', 'View Project on GitHub']);">
            <i class="icon-github icon-2x pull-left"></i>
            Посмотреть<br>на GitHub</a>
        </div>
        <div class="shameless-self-promotion">
          Версия 3.0.2 • Создана & Поддерживается Дейвом Ганди (Dave Gandy)
        </div>
      </div>
    </div>
    <div class="span4">
      <div id="iconCarousel" class="carousel slide">
        <!-- Carousel items -->
        <div class="carousel-inner">
          <div class="active item"><div><i class="icon-flag"></i></div></div>
          <div class="item"><div><i class="icon-cloud-download"></i></div></div>
          <div class="item"><div><i class="icon-lightbulb"></i></div></div>
          <div class="item"><div><i class="icon-group"></i></div></div>
          <div class="item"><div><i class="icon-ambulance"></i></div></div>
          <div class="item"><div><i class="icon-star-empty"></i></div></div>
          <div class="item"><div><i class="icon-envelope"></i></div></div>
          <div class="item"><div><i class="icon-coffee"></i></div></div>
          <div class="item"><div><i class="icon-medkit"></i></div></div>
          <div class="item"><div><i class="icon-book"></i></div></div>
          <div class="item"><div><i class="icon-fighter-jet"></i></div></div>
          <div class="item"><div><i class="icon-edit"></i></div></div>
          <div class="item"><div><i class="icon-search"></i></div></div>
          <div class="item"><div><i class="icon-beer"></i></div></div>
          <div class="item"><div><i class="icon-quote-left"></i></div></div>
          <div class="item"><div><i class="icon-stethoscope"></i></div></div>
          <div class="item"><div><i class="icon-heart-empty"></i></div></div>
          <div class="item"><div><i class="icon-thumbs-up"></i></div></div>
        </div>
        <!-- Carousel nav -->
        <a class="carousel-control left" href="#iconCarousel" data-slide="prev"
           onClick="_gaq.push(['_trackEvent', 'iconCarousel', 'Prev']);">
          <i class="icon-arrow-left"></i></a>
        <a class="carousel-control right" href="#iconCarousel" data-slide="next"
           onClick="_gaq.push(['_trackEvent', 'iconCarousel', 'Next']);">
          <i class="icon-arrow-right"></i></a>
      </div>
    </div>
  </div>

</div>
</div>

<div id="social-buttons">
  <div class="container">
    <span class="watch">
      <a class="btn btn-mini" href="https://github.com/FortAwesome/Font-Awesome" target="_blank"><i class="icon-github icon-large"></i> Смотреть</a>
      <a id="watchers" class="count btn btn-mini" href="https://github.com/FortAwesome/Font-Awesome">9000+</a>
    </span>
    <span class="fork">
      <a class="btn btn-mini" href="https://github.com/FortAwesome/Font-Awesome" target="_blank"><i class="icon-github icon-large"></i> Форкнуть</a>
      <a id="forks" class="count btn btn-mini" href="#">800+</a>
    </span>
    <span class="follow">
      <a class="btn btn-mini" href="http://twitter.com/fortaweso_me/" target="_blank"><i class="icon-twitter icon-large"></i> Зафолловить @fortaweso_me</a>
      <span id="followers" class="count btn btn-mini">2500+</span>
    </span>
  </div>

  <div class="container" style="margin-top: 10px;">
    <span class="follow">
      <a class="btn btn-mini" href="http://twitter.com/smart_egg/" target="_blank"><i class="icon-twitter icon-large"></i> Зафолловить @smart_egg</a>
      <span id="se_followers" class="count btn btn-mini">200+</span>
    </span>
    <span class="follow">
      <a class="btn btn-mini" href="http://twitter.com/VeliovGroup/" target="_blank"><i class="icon-twitter icon-large"></i> Зафолловить @VeliovGroup</a>
      <span id="vg_followers" class="count btn btn-mini">100+</span>
    </span>
  </div>
  <div class="container" style="margin-top: 10px;">
    <span class="follow">
      <a class="btn btn-mini" href="http://twitter.com/home?status=<?= urlencode('Font Awesome по Русски: http://fontawesome.veliovgroup.com'); ?>" target="_blank"><i class="blue icon-twitter icon-large"></i> Tweet</a>
    </span>
    <span class="follow">
      <a class="btn btn-mini" href="http://www.facebook.com/plugins/like.php?href=<?= urlencode('http://fontawesome.veliovgroup.com'); ?>" target="_blank"><i class="blue icon-thumbs-up icon-large"></i> Like</a>
    </span>
    <span class="follow">
      <a class="btn btn-mini" href="https://plus.google.com/share?url=<?= urlencode('http://fontawesome.veliovgroup.com'); ?>" target="_blank"><i class="icon-google-plus icon-large"></i></a>
    </span>
    <span class="follow">
      <a class="btn btn-mini" href="http://vkontakte.ru/share.php?url=<?= urlencode('http://fontawesome.veliovgroup.com'); ?>" target="_blank"><strong>B</strong></a>
    </span>
    <span class="follow">
      <a class="btn btn-mini" href="http://www.facebook.com/sharer.php?t=<?= urlencode('Font Awesome по Русски: ')?>&u=<?= urlencode('http://fontawesome.veliovgroup.com'); ?>" target="_blank"><i class="icon-facebook-sign icon-large"></i></a>
    </span>
    <style type="text/css">
     i.blue{
        color: #4293ce;
      }
    </style>
  </div>
</div>

<div class="container">
<section id="why" class="clearfix">
  <div class="row">
    <div class="span4">
      <h4><i class="icon-flag"></i> Один шрифт, 249 иконок</h4>
      Все в одном файле, Font Awesome - это язык иконок для Ваших web-проектов.
    </div>
    <div class="span4">
      <h4><i class="icon-pencil"></i> Управление через CSS</h4>
      Изменяйте цвет, размер, тень, и все что возможно изменить через CSS.
    </div>
    <div class="span4">
      <h4><i class="icon-fullscreen"></i> Бесконечная масштабируемость</h4>
      Масштабируемая векторная графика позволяет делать иконки любого размера без потери в качестве.
    </div>
  </div>
  <div class="row">
    <div class="span4">
      <h4><i class="icon-beer"></i> На халяву!</h4>
      Font Awesome абсолютно бесплатный продукт, даже для коммерческого использования. Узнайте больше о <a href="#license">лицензии</a>.
    </div>
    <div class="span4">
      <h4><i class="icon-ok"></i> Работает в IE7</h4>
      Font Awesome работает в IE7. Мои соболезнования если это важно для Вас.
    </div>
    <div class="span4">
      <h4><i class="icon-eye-open"></i> Отлично подходит для Retina дисплеев</h4>
      Иконки в Font Awesome - векторные, что само собой означает превосходное отображение на дисплеях высокого разрешения.
    </div>
  </div>
  <div class="row">
    <div class="span4">
      <h4><i class="icon-thumbs-up"></i> Сделан для Twitter Bootstrap</h4>
      Создан совместно и для использования с <a href="http://bootstrap.veliovgroup.com" target="_blank">Twitter Bootstrap</a>.
    </div>
    <div class="span4">
      <h4><i class="icon-tint"></i> Дизайнеры оценят</h4>
      Установите FontAwesome.otf и <a href="design.html" target="_blank">посетите страницу копи-паст</a>. Удачи с дизайном.
    </div>
    <div class="span4">
      <h4><i class="icon-search"></i> Поддерживается читалками</h4>
      Font Awesome - в отличие от других шрифтовых иконок поддерживается на дисплеях из цифровой бумаги.
    </div>
  </div>
</section>

<section id="whats-new">
  <h2 class="page-header">Что нового в Font Awesome 3.0</h2>
  <div class="row">
    <div class="span4">
      <h4><i class="icon-magic"></i> Каждый пиксель на месте</h4>
      Каждая иконка индивидуально перерисована для совместимости со стандартным размером шрифта в Bootstrap'е в 14px.
    </div>
    <div class="span4">
      <h4><i class="icon-th-large"></i> <a target="_blank"  href="http://icnfnt.com/">Собери свой</a></h4>
      Спасибо <a target="_blank" href="https://twitter.com/grantgordon">@grantgordon</a> и <a target="_blank" href="https://twitter.com/johnsmclay">@johnsmclay</a>, благодаря этим ребятам Вы можете самостоятельно <a target="_blank"  href="http://icnfnt.com/">собрать</a> свой комплект из иконок, которые нужны только Вашему проекту.
    </div>
    <div class="span4">
      <h4><i class="icon-legal"></i> <a href="#license">Наша лицензия лучше</a></h4>
      SIL open font license для дизайна, MIT license для кодинга. Ссылка на проект больше не обязательна, НО приветствуется.
    </div>
  </div>
  <div class="row">
    <div class="span4">
      <h4><i class="icon-lightbulb"></i> 40 новых иконок, в новой версии 3.0</h4>
      Мы сделали все что было запрошено со стороны нашего сообщества <a href="https://github.com/FortAwesome/Font-Awesome" target="_blank">Font Awesome GitHub</a>.
    </div>
    <div class="span4">
      <h4><i class="icon-spinner icon-spin"></i> <a href="#examples">Новые стили</a></h4>
      <a href="#examples">Новые стили</a> для анимации, новые классы 2x-4x для увеличения иконок, границы вокруг иконок, и другие вкусности.
    </div>
    <div class="span4">
      <h4><i class="icon-resize-small"></i> Уменьшен размер на 28%</h4>
      Версия 3.0 весит меньше, несмотря на прирост в 16% в количестве иконок. И супер-маленький размер <a target="_blank"  href="http://icnfnt.com/">при самостоятельной сборке</a>.
    </div>
  </div>
</section>

<section id="icons-new" class="row">
  <div class="span12">
    <h2 class="page-header">Новые иконки 3.0</h2>
    <p>
      Вы просили, - мы сделали. Font Awesome поставляется с 40 новыми иконками. Вам нужно что-то еще? Запросите новые иконки на
      <a href="https://github.com/FortAwesome/Font-Awesome" target="_blank">странице сообщества</a>. Все будут рады если Вы <a href="#contribute">добавите свои собственные иконки</a>.
    </p>
  </div>

  <div class="span3">
    <ul class="the-icons">
      <li><i class="icon-cloud-download"></i> icon-cloud-download</li>
      <li><i class="icon-cloud-upload"></i> icon-cloud-upload</li>
      <li><i class="icon-lightbulb"></i> icon-lightbulb</li>
      <li><i class="icon-exchange"></i> icon-exchange</li>
      <li><i class="icon-bell-alt"></i> icon-bell-alt</li>
      <li><i class="icon-file-alt"></i> icon-file-alt</li>
      <li><i class="icon-beer"></i> icon-beer</li>
      <li><i class="icon-coffee"></i> icon-coffee</li>
      <li><i class="icon-food"></i> icon-food</li>
      <li><i class="icon-fighter-jet"></i> icon-fighter-jet</li>
    </ul>
  </div>
  <div class="span3">
    <ul class="the-icons">
      <li><i class="icon-user-md"></i> icon-user-md</li>
      <li><i class="icon-stethoscope"></i> icon-stethoscope</li>
      <li><i class="icon-suitcase"></i> icon-suitcase</li>
      <li><i class="icon-building"></i> icon-building</li>
      <li><i class="icon-hospital"></i> icon-hospital</li>
      <li><i class="icon-ambulance"></i> icon-ambulance</li>
      <li><i class="icon-medkit"></i> icon-medkit</li>
      <li><i class="icon-h-sign"></i> icon-h-sign</li>
      <li><i class="icon-plus-sign-alt"></i> icon-plus-sign-alt</li>
      <li><i class="icon-spinner"></i> icon-spinner</li>
    </ul>
  </div>
  <div class="span3">
    <ul class="the-icons">
      <li><i class="icon-angle-left"></i> icon-angle-left</li>
      <li><i class="icon-angle-right"></i> icon-angle-right</li>
      <li><i class="icon-angle-up"></i> icon-angle-up</li>
      <li><i class="icon-angle-down"></i> icon-angle-down</li>
      <li><i class="icon-double-angle-left"></i> icon-double-angle-left</li>
      <li><i class="icon-double-angle-right"></i> icon-double-angle-right</li>
      <li><i class="icon-double-angle-up"></i> icon-double-angle-up</li>
      <li><i class="icon-double-angle-down"></i> icon-double-angle-down</li>
      <li><i class="icon-circle-blank"></i> icon-circle-blank</li>
      <li><i class="icon-circle"></i> icon-circle</li>
    </ul>
  </div>
  <div class="span3">
    <ul class="the-icons">
      <li><i class="icon-desktop"></i> icon-desktop</li>
      <li><i class="icon-laptop"></i> icon-laptop</li>
      <li><i class="icon-tablet"></i> icon-tablet</li>
      <li><i class="icon-mobile-phone"></i> icon-mobile-phone</li>
      <li><i class="icon-quote-left"></i> icon-quote-left</li>
      <li><i class="icon-quote-right"></i> icon-quote-right</li>
      <li><i class="icon-reply"></i> icon-reply</li>
      <li><i class="icon-github-alt"></i> icon-github-alt</li>
      <li><i class="icon-folder-close-alt"></i> icon-folder-close-alt</li>
      <li><i class="icon-folder-open-alt"></i> icon-folder-open-alt</li>
    </ul>
  </div>
</section>

<section id="icons-web-app" class="row">
  <div class="span12">
    <h2 class="page-header">Web-приложение</h2>
  </div>

  <div class="span3">
    <ul class="the-icons">
      <li><i class="icon-adjust"></i> icon-adjust</li>
      <li><i class="icon-asterisk"></i> icon-asterisk</li>
      <li><i class="icon-ban-circle"></i> icon-ban-circle</li>
      <li><i class="icon-bar-chart"></i> icon-bar-chart</li>
      <li><i class="icon-barcode"></i> icon-barcode</li>
      <li><i class="icon-beaker"></i> icon-beaker</li>
      <li><i class="icon-beer"></i> icon-beer</li>
      <li><i class="icon-bell"></i> icon-bell</li>
      <li><i class="icon-bell-alt"></i> icon-bell-alt</li>
      <li><i class="icon-bolt"></i> icon-bolt</li>
      <li><i class="icon-book"></i> icon-book</li>
      <li><i class="icon-bookmark"></i> icon-bookmark</li>
      <li><i class="icon-bookmark-empty"></i> icon-bookmark-empty</li>
      <li><i class="icon-briefcase"></i> icon-briefcase</li>
      <li><i class="icon-bullhorn"></i> icon-bullhorn</li>
      <li><i class="icon-calendar"></i> icon-calendar</li>
      <li><i class="icon-camera"></i> icon-camera</li>
      <li><i class="icon-camera-retro"></i> icon-camera-retro</li>
      <li><i class="icon-certificate"></i> icon-certificate</li>
      <li><i class="icon-check"></i> icon-check</li>
      <li><i class="icon-check-empty"></i> icon-check-empty</li>
      <li><i class="icon-circle"></i> icon-circle</li>
      <li><i class="icon-circle-blank"></i> icon-circle-blank</li>
      <li><i class="icon-cloud"></i> icon-cloud</li>
      <li><i class="icon-cloud-download"></i> icon-cloud-download</li>
      <li><i class="icon-cloud-upload"></i> icon-cloud-upload</li>
      <li><i class="icon-coffee"></i> icon-coffee</li>
      <li><i class="icon-cog"></i> icon-cog</li>
      <li><i class="icon-cogs"></i> icon-cogs</li>
      <li><i class="icon-comment"></i> icon-comment</li>
      <li><i class="icon-comment-alt"></i> icon-comment-alt</li>
      <li><i class="icon-comments"></i> icon-comments</li>
      <li><i class="icon-comments-alt"></i> icon-comments-alt</li>
      <li><i class="icon-credit-card"></i> icon-credit-card</li>
      <li><i class="icon-dashboard"></i> icon-dashboard</li>
      <li><i class="icon-desktop"></i> icon-desktop</li>
      <li><i class="icon-download"></i> icon-download</li>
      <li><i class="icon-download-alt"></i> icon-download-alt</li>
    </ul>
  </div>
  <div class="span3">
    <ul class="the-icons">
      <li><i class="icon-edit"></i> icon-edit</li>
      <li><i class="icon-envelope"></i> icon-envelope</li>
      <li><i class="icon-envelope-alt"></i> icon-envelope-alt</li>
      <li><i class="icon-exchange"></i> icon-exchange</li>
      <li><i class="icon-exclamation-sign"></i> icon-exclamation-sign</li>
      <li><i class="icon-external-link"></i> icon-external-link</li>
      <li><i class="icon-eye-close"></i> icon-eye-close</li>
      <li><i class="icon-eye-open"></i> icon-eye-open</li>
      <li><i class="icon-facetime-video"></i> icon-facetime-video</li>
      <li><i class="icon-fighter-jet"></i> icon-fighter-jet</li>
      <li><i class="icon-film"></i> icon-film</li>
      <li><i class="icon-filter"></i> icon-filter</li>
      <li><i class="icon-fire"></i> icon-fire</li>
      <li><i class="icon-flag"></i> icon-flag</li>
      <li><i class="icon-folder-close"></i> icon-folder-close</li>
      <li><i class="icon-folder-open"></i> icon-folder-open</li>
      <li><i class="icon-folder-close-alt"></i> icon-folder-close-alt</li>
      <li><i class="icon-folder-open-alt"></i> icon-folder-open-alt</li>
      <li><i class="icon-food"></i> icon-food</li>
      <li><i class="icon-gift"></i> icon-gift</li>
      <li><i class="icon-glass"></i> icon-glass</li>
      <li><i class="icon-globe"></i> icon-globe</li>
      <li><i class="icon-group"></i> icon-group</li>
      <li><i class="icon-hdd"></i> icon-hdd</li>
      <li><i class="icon-headphones"></i> icon-headphones</li>
      <li><i class="icon-heart"></i> icon-heart</li>
      <li><i class="icon-heart-empty"></i> icon-heart-empty</li>
      <li><i class="icon-home"></i> icon-home</li>
      <li><i class="icon-inbox"></i> icon-inbox</li>
      <li><i class="icon-info-sign"></i> icon-info-sign</li>
      <li><i class="icon-key"></i> icon-key</li>
      <li><i class="icon-leaf"></i> icon-leaf</li>
      <li><i class="icon-laptop"></i> icon-laptop</li>
      <li><i class="icon-legal"></i> icon-legal</li>
      <li><i class="icon-lemon"></i> icon-lemon</li>
      <li><i class="icon-lightbulb"></i> icon-lightbulb</li>
      <li><i class="icon-lock"></i> icon-lock</li>
      <li><i class="icon-unlock"></i> icon-unlock</li>
    </ul>
  </div>
  <div class="span3">
    <ul class="the-icons">
      <li><i class="icon-magic"></i> icon-magic</li>
      <li><i class="icon-magnet"></i> icon-magnet</li>
      <li><i class="icon-map-marker"></i> icon-map-marker</li>
      <li><i class="icon-minus"></i> icon-minus</li>
      <li><i class="icon-minus-sign"></i> icon-minus-sign</li>
      <li><i class="icon-mobile-phone"></i> icon-mobile-phone</li>
      <li><i class="icon-money"></i> icon-money</li>
      <li><i class="icon-move"></i> icon-move</li>
      <li><i class="icon-music"></i> icon-music</li>
      <li><i class="icon-off"></i> icon-off</li>
      <li><i class="icon-ok"></i> icon-ok</li>
      <li><i class="icon-ok-circle"></i> icon-ok-circle</li>
      <li><i class="icon-ok-sign"></i> icon-ok-sign</li>
      <li><i class="icon-pencil"></i> icon-pencil</li>
      <li><i class="icon-picture"></i> icon-picture</li>
      <li><i class="icon-plane"></i> icon-plane</li>
      <li><i class="icon-plus"></i> icon-plus</li>
      <li><i class="icon-plus-sign"></i> icon-plus-sign</li>
      <li><i class="icon-print"></i> icon-print</li>
      <li><i class="icon-pushpin"></i> icon-pushpin</li>
      <li><i class="icon-qrcode"></i> icon-qrcode</li>
      <li><i class="icon-question-sign"></i> icon-question-sign</li>
      <li><i class="icon-quote-left"></i> icon-quote-left</li>
      <li><i class="icon-quote-right"></i> icon-quote-right</li>
      <li><i class="icon-random"></i> icon-random</li>
      <li><i class="icon-refresh"></i> icon-refresh</li>
      <li><i class="icon-remove"></i> icon-remove</li>
      <li><i class="icon-remove-circle"></i> icon-remove-circle</li>
      <li><i class="icon-remove-sign"></i> icon-remove-sign</li>
      <li><i class="icon-reorder"></i> icon-reorder</li>
      <li><i class="icon-reply"></i> icon-reply</li>
      <li><i class="icon-resize-horizontal"></i> icon-resize-horizontal</li>
      <li><i class="icon-resize-vertical"></i> icon-resize-vertical</li>
      <li><i class="icon-retweet"></i> icon-retweet</li>
      <li><i class="icon-road"></i> icon-road</li>
      <li><i class="icon-rss"></i> icon-rss</li>
      <li><i class="icon-screenshot"></i> icon-screenshot</li>
      <li><i class="icon-search"></i> icon-search</li>
    </ul>
  </div>
  <div class="span3">
    <ul class="the-icons">
      <li><i class="icon-share"></i> icon-share</li>
      <li><i class="icon-share-alt"></i> icon-share-alt</li>
      <li><i class="icon-shopping-cart"></i> icon-shopping-cart</li>
      <li><i class="icon-signal"></i> icon-signal</li>
      <li><i class="icon-signin"></i> icon-signin</li>
      <li><i class="icon-signout"></i> icon-signout</li>
      <li><i class="icon-sitemap"></i> icon-sitemap</li>
      <li><i class="icon-sort"></i> icon-sort</li>
      <li><i class="icon-sort-down"></i> icon-sort-down</li>
      <li><i class="icon-sort-up"></i> icon-sort-up</li>
      <li><i class="icon-spinner"></i> icon-spinner</li>
      <li><i class="icon-star"></i> icon-star</li>
      <li><i class="icon-star-empty"></i> icon-star-empty</li>
      <li><i class="icon-star-half"></i> icon-star-half</li>
      <li><i class="icon-tablet"></i> icon-tablet</li>
      <li><i class="icon-tag"></i> icon-tag</li>
      <li><i class="icon-tags"></i> icon-tags</li>
      <li><i class="icon-tasks"></i> icon-tasks</li>
      <li><i class="icon-thumbs-down"></i> icon-thumbs-down</li>
      <li><i class="icon-thumbs-up"></i> icon-thumbs-up</li>
      <li><i class="icon-time"></i> icon-time</li>
      <li><i class="icon-tint"></i> icon-tint</li>
      <li><i class="icon-trash"></i> icon-trash</li>
      <li><i class="icon-trophy"></i> icon-trophy</li>
      <li><i class="icon-truck"></i> icon-truck</li>
      <li><i class="icon-umbrella"></i> icon-umbrella</li>
      <li><i class="icon-upload"></i> icon-upload</li>
      <li><i class="icon-upload-alt"></i> icon-upload-alt</li>
      <li><i class="icon-user"></i> icon-user</li>
      <li><i class="icon-user-md"></i> icon-user-md</li>
      <li><i class="icon-volume-off"></i> icon-volume-off</li>
      <li><i class="icon-volume-down"></i> icon-volume-down</li>
      <li><i class="icon-volume-up"></i> icon-volume-up</li>
      <li><i class="icon-warning-sign"></i> icon-warning-sign</li>
      <li><i class="icon-wrench"></i> icon-wrench</li>
      <li><i class="icon-zoom-in"></i> icon-zoom-in</li>
      <li><i class="icon-zoom-out"></i> icon-zoom-out</li>
    </ul>
  </div>
</section>

<section id="icons-text-editor" class="row">
  <div class="span12">
    <h2 class="page-header">Редактор текста</h2>
  </div>
  <div class="span3">
    <ul class="the-icons">
      <li><i class="icon-file"></i> icon-file</li>
      <li><i class="icon-file-alt"></i> icon-file-alt</li>
      <li><i class="icon-cut"></i> icon-cut</li>
      <li><i class="icon-copy"></i> icon-copy</li>
      <li><i class="icon-paste"></i> icon-paste</li>
      <li><i class="icon-save"></i> icon-save</li>
      <li><i class="icon-undo"></i> icon-undo</li>
      <li><i class="icon-repeat"></i> icon-repeat</li>
    </ul>
  </div>
  <div class="span3">
    <ul class="the-icons">
      <li><i class="icon-text-height"></i> icon-text-height</li>
      <li><i class="icon-text-width"></i> icon-text-width</li>
      <li><i class="icon-align-left"></i> icon-align-left</li>
      <li><i class="icon-align-center"></i> icon-align-center</li>
      <li><i class="icon-align-right"></i> icon-align-right</li>
      <li><i class="icon-align-justify"></i> icon-align-justify</li>
      <li><i class="icon-indent-left"></i> icon-indent-left</li>
      <li><i class="icon-indent-right"></i> icon-indent-right</li>
    </ul>
  </div>
  <div class="span3">
    <ul class="the-icons">
      <li><i class="icon-font"></i> icon-font</li>
      <li><i class="icon-bold"></i> icon-bold</li>
      <li><i class="icon-italic"></i> icon-italic</li>
      <li><i class="icon-strikethrough"></i> icon-strikethrough</li>
      <li><i class="icon-underline"></i> icon-underline</li>
      <li><i class="icon-link"></i> icon-link</li>
      <li><i class="icon-paper-clip"></i> icon-paper-clip</li>
      <li><i class="icon-columns"></i> icon-columns</li>
    </ul>
  </div>
  <div class="span3">
    <ul class="the-icons">
      <li><i class="icon-table"></i> icon-table</li>
      <li><i class="icon-th-large"></i> icon-th-large</li>
      <li><i class="icon-th"></i> icon-th</li>
      <li><i class="icon-th-list"></i> icon-th-list</li>
      <li><i class="icon-list"></i> icon-list</li>
      <li><i class="icon-list-ol"></i> icon-list-ol</li>
      <li><i class="icon-list-ul"></i> icon-list-ul</li>
      <li><i class="icon-list-alt"></i> icon-list-alt</li>
    </ul>
  </div>
</section>

<section id="icons-directional" class="row">
  <div class="span12">
    <h2 class="page-header">Указатели</h2>
  </div>
  <div class="span3">
    <ul class="the-icons">
      <li><i class="icon-angle-left"></i> icon-angle-left</li>
      <li><i class="icon-angle-right"></i> icon-angle-right</li>
      <li><i class="icon-angle-up"></i> icon-angle-up</li>
      <li><i class="icon-angle-down"></i> icon-angle-down</li>
      <li><i class="icon-arrow-down"></i> icon-arrow-down</li>
      <li><i class="icon-arrow-left"></i> icon-arrow-left</li>
      <li><i class="icon-arrow-right"></i> icon-arrow-right</li>
      <li><i class="icon-arrow-up"></i> icon-arrow-up</li>
    </ul>
  </div>
  <div class="span3">
    <ul class="the-icons">
      <li><i class="icon-caret-down"></i> icon-caret-down</li>
      <li><i class="icon-caret-left"></i> icon-caret-left</li>
      <li><i class="icon-caret-right"></i> icon-caret-right</li>
      <li><i class="icon-caret-up"></i> icon-caret-up</li>
      <li><i class="icon-chevron-down"></i> icon-chevron-down</li>
      <li><i class="icon-chevron-left"></i> icon-chevron-left</li>
      <li><i class="icon-chevron-right"></i> icon-chevron-right</li>
      <li><i class="icon-chevron-up"></i> icon-chevron-up</li>
    </ul>
  </div>
  <div class="span3">
    <ul class="the-icons">
      <li><i class="icon-circle-arrow-down"></i> icon-circle-arrow-down</li>
      <li><i class="icon-circle-arrow-left"></i> icon-circle-arrow-left</li>
      <li><i class="icon-circle-arrow-right"></i> icon-circle-arrow-right</li>
      <li><i class="icon-circle-arrow-up"></i> icon-circle-arrow-up</li>
      <li><i class="icon-double-angle-left"></i> icon-double-angle-left</li>
      <li><i class="icon-double-angle-right"></i> icon-double-angle-right</li>
      <li><i class="icon-double-angle-up"></i> icon-double-angle-up</li>
      <li><i class="icon-double-angle-down"></i> icon-double-angle-down</li>
    </ul>
  </div>
  <div class="span3">
    <ul class="the-icons">
      <li><i class="icon-hand-down"></i> icon-hand-down</li>
      <li><i class="icon-hand-left"></i> icon-hand-left</li>
      <li><i class="icon-hand-right"></i> icon-hand-right</li>
      <li><i class="icon-hand-up"></i> icon-hand-up</li>
      <li><i class="icon-circle"></i> icon-circle</li>
      <li><i class="icon-circle-blank"></i> icon-circle-blank</li>
    </ul>
  </div>
</section>

<section id="icons-video-player" class="row">
  <div class="span12">
    <h2 class="page-header">Видео плеер</h2>
  </div>
  <div class="span3">
    <ul class="the-icons">
      <li><i class="icon-play-circle"></i> icon-play-circle</li>
      <li><i class="icon-play"></i> icon-play</li>
      <li><i class="icon-pause"></i> icon-pause</li>
      <li><i class="icon-stop"></i> icon-stop</li>
    </ul>
  </div>
  <div class="span3">
    <ul class="the-icons">
      <li><i class="icon-step-backward"></i> icon-step-backward</li>
      <li><i class="icon-fast-backward"></i> icon-fast-backward</li>
      <li><i class="icon-backward"></i> icon-backward</li>
      <li><i class="icon-forward"></i> icon-forward</li>
    </ul>
  </div>
  <div class="span3">
    <ul class="the-icons">
      <li><i class="icon-fast-forward"></i> icon-fast-forward</li>
      <li><i class="icon-step-forward"></i> icon-step-forward</li>
      <li><i class="icon-eject"></i> icon-eject</li>
    </ul>
  </div>
  <div class="span3">
    <ul class="the-icons">
      <li><i class="icon-fullscreen"></i> icon-fullscreen</li>
      <li><i class="icon-resize-full"></i> icon-resize-full</li>
      <li><i class="icon-resize-small"></i> icon-resize-small</li>
    </ul>
  </div>
</section>

<section id="icons-social" class="row">
  <div class="span12">
    <h2 class="page-header">Социальные</h2>
  </div>
  <div class="span3">
    <ul class="the-icons">
      <li><i class="icon-phone"></i> icon-phone</li>
      <li><i class="icon-phone-sign"></i> icon-phone-sign</li>
      <li><i class="icon-facebook"></i> icon-facebook</li>
      <li><i class="icon-facebook-sign"></i> icon-facebook-sign</li>
    </ul>
  </div>
  <div class="span3">
    <ul class="the-icons">
      <li><i class="icon-twitter"></i> icon-twitter</li>
      <li><i class="icon-twitter-sign"></i> icon-twitter-sign</li>
      <li><i class="icon-github"></i> icon-github</li>
      <li><i class="icon-github-alt"></i> icon-github-alt</li>
    </ul>
  </div>
  <div class="span3">
    <ul class="the-icons">
      <li><i class="icon-github-sign"></i> icon-github-sign</li>
      <li><i class="icon-linkedin"></i> icon-linkedin</li>
      <li><i class="icon-linkedin-sign"></i> icon-linkedin-sign</li>
      <li><i class="icon-pinterest"></i> icon-pinterest</li>
    </ul>
  </div>
  <div class="span3">
    <ul class="the-icons">
      <li><i class="icon-pinterest-sign"></i> icon-pinterest-sign</li>
      <li><i class="icon-google-plus"></i> icon-google-plus</li>
      <li><i class="icon-google-plus-sign"></i> icon-google-plus-sign</li>
      <li><i class="icon-sign-blank"></i> icon-sign-blank</li>
    </ul>
  </div>
</section>

<section id="icons-medical" class="row">
  <div class="span12">
    <h2 class="page-header">Медицинские <small>Хотите повлиять на здравоохранение? Присоединяйтесь ко мне - <a href="#kyruus">Kyruus</a>.</small></h2>
  </div>
  <div class="span3">
    <ul class="the-icons">
      <li><i class="icon-ambulance"></i> icon-ambulance</li>
      <li><i class="icon-beaker"></i> icon-beaker</li>
    </ul>
  </div>
  <div class="span3">
    <ul class="the-icons">
      <li><i class="icon-h-sign"></i> icon-h-sign</li>
      <li><i class="icon-hospital"></i> icon-hospital</li>
    </ul>
  </div>
  <div class="span3">
    <ul class="the-icons">
      <li><i class="icon-medkit"></i> icon-medkit</li>
      <li><i class="icon-plus-sign-alt"></i> icon-plus-sign-alt</li>
    </ul>
  </div>
  <div class="span3">
    <ul class="the-icons">
      <li><i class="icon-stethoscope"></i> icon-stethoscope</li>
      <li><i class="icon-user-md"></i> icon-user-md</li>
    </ul>
  </div>
</section>

<section id="integration">
  <h2 class="page-header">Интеграция</h2>
  <p>Интегрировать Font Awesome очень просто в Twitter Bootstrap, а так же использовать отдельно на ваше усмотрение.</p>
  <div class="row">
    <div class="span12">
      <h4>Bootstrap + Font Awesome</h4>
    </div>
    <div class="span3">
      <p>Используйте Font Awesome с Bootstrap CSS.</p>
    </div>
    <div class="span9">
      <ol>
        <li>Скопируйте папку со шрифтами Font Awesome в Ваш проект.</li>
        <li>Затем скопируйте font-awesome.min.css в Ваш проект.</li>
        <li>
          Откройте файл font-awesome.min.css и отредактируйте путь к файлам со шрифтами, если это необходимо.
          <p class="alert alert-info"><i class="icon-info-sign"></i> Папка со шрифтами находится относительно (выше) директории с CSS-файлами.</p>
        </li>
        <li>
          Внутри тега <code>&lt;head&gt;</code> Вашей html-страницы, поместите ссылку на font-awesome.min.css.
<pre class="prettyprint linenums">
&lt;link rel="stylesheet" href="../css/bootstrap.min.css"&gt;
&lt;link rel="stylesheet" href="../css/font-awesome.min.css"&gt;
</pre>
        </li>
        <li>Обратите внимание на примеры использования Font Awesome перед началом работы над своим проектом!</li>
      </ol>
    </div>
  </div>
  <div class="row">
    <div class="span12">
      <h4>Кастомная интеграция Bootstrap + Font Awesome с использованием LESS</h4>
    </div>
    <div class="span3">
      <p>Используйте этот метод для интеграции Font Awesome в Twitter Bootstrap используя LESS.</p>
    </div>
    <div class="span9">
      <ol>
        <li>Скопируйте папку со шрифтами Font Awesome в Ваш проект.</li>
        <li>Затем скопируйте font-awesome.less в директорию bootstrap/less.</li>
        <li>Откройте bootstrap.less и замените <code>@import "sprites.less";</code> на <code>@import "font-awesome.less";</code></li>
        <li>
          Откройте файл font-awesome.less и отредактируйте переменную <code>@FontAwesomePath</code> так что бы она указывала на директорию со шрифтами.
<pre class="prettyprint linenums">
@FontAwesomePath:   "../font";
</pre>
          <p class="alert alert-info"><i class="icon-info-sign"></i> Папка со шрифтами находится относительно (выше) директории с скомпилированными CSS-файлами.</p>
        </li>
        <li>Перекомпилируйте Ваш LESS в случае использования статичного компилятора. В другом случае все готово к работе.</li>
        <li>Обратите внимание на примеры использования Font Awesome перед началом работы над своим проектом!</li>
      </ol>
    </div>
  </div>
  <div class="row">
    <div class="span12">
      <h4>Кастомная интеграция Bootstrap + Font Awesome Integration используя SASS или SCSS</h4>
      <p>Никогда не пробовал использовать это в живом проекте, так что дайте знать, если найдете ошибки в SCSS или SASS файлах.</p>
    </div>
  </div>
  <div class="row">
    <div class="span12">
      <h4>Не используете Bootstrap?</h4>
    </div>
    <div class="span3">
      <p>Font Awesome - работает и без использования Twitter Bootstrap.</p>
    </div>
    <div class="span9">
      <ol>
        <li>Скопируйте папку со шрифтами Font Awesome в Ваш проект.</li>
        <li>Затем скопируйте font-awesome.less или font-awesome.min.css в папку Вашего проекта.</li>
        <li>Откройте font-awesome.less либо font-awesome.min.css и отредактируйте пути к шрифтам (см. пример выше).</li>
        <li>Обратите внимание на примеры использования Font Awesome перед началом работы над своим проектом!</li>
      </ol>
    </div>
  </div>
  <div class="row">
    <div class="span12">
      <h4>Требуется поддержка IE7?</h4>
    </div>
    <div class="span3">
      <p>Font Awesome работает в IE7. Мои соболезнования если это важно для Вас.</p>
    </div>
    <div class="span9">
      <ol>
        <li>Добавьте файл font-awesome-ie7.min.css в папку Вашего проекта.</li>
        <li>
          В теге <code>&lt;head&gt;</code> Вашей html страницы, добавьте ссылку на font-awesome-ie7.min.css.
<pre class="prettyprint linenums">
&lt;link rel="stylesheet" href="../css/bootstrap.min.css"&gt;
&lt;link rel="stylesheet" href="../css/font-awesome.min.css"&gt;
&lt;!--[if IE 7]&gt;
&lt;link rel=&quot;stylesheet&quot; href=&quot;assets/css/font-awesome-ie7.min.css&quot;&gt;
&lt;![endif]--&gt;
</pre>
        </li>
        <li>Теперь можно звонить тем кто требовал поддержку в IE7.</li>
      </ol>
    </div>
  </div>
</section>

<section id="examples">
  <h2 class="page-header">Примеры</h2>
  <p>Много-много примеров в стиле Twitter Bootstrap.</p>
  <div class="row">
    <div class="span4">
      <div class="well well-transparent">
        <p>Используйте наши иконки в:</p>
        <ul class="icons">
          <li><i class="icon-ok"></i>Списки (как этот)</li>
          <li><i class="icon-ok"></i>Кнопки</li>
          <li><i class="icon-ok"></i>Группы кнопок</li>
          <li><i class="icon-ok"></i>Навигация</li>
          <li><i class="icon-ok"></i>Пред- и пост- идущие элементы в input</li>
          <li><i class="icon-ok"></i>И много другого в вашем CSS</li>
        </ul>
      </div>
    </div>
    <div class="span4">
      <p>
        <a class="btn" href="#"><i class="icon-repeat"></i> Перезагрузка</a>
        <a class="btn btn-success" href="#"><i class="icon-shopping-cart icon-large"></i> Оплатить</a>
        <a class="btn btn-danger" href="#"><i class="icon-trash icon-large"></i> Удалить</a>
      </p>
      <p>
        <a class="btn btn-large btn-primary" href="#"><i class="icon-comment"></i> Комментировать</a>
        <a class="btn btn-small" href="#"><i class="icon-cog"></i> Настройки</a>
        <a class="btn btn-small btn-info" href="#"><i class="icon-info-sign"></i> Информация</a>
      </p>
      <div class="well" style="padding: 8px 0;">
        <ul class="nav nav-list">
          <li class="active"><a href="#"><i class="icon-home"></i> Главная</a></li>
          <li><a href="#"><i class="icon-book"></i> Библиотека</a></li>
          <li><a href="#"><i class="icon-pencil"></i> Приложения</a></li>
          <li><a href="#"><i class="icon-cogs"></i> Настройки</a></li>
        </ul>
      </div>
    </div>
    <div class="span4">
      <div class="btn-toolbar">
        <div class="btn-group">
          <a class="btn" href="#"><i class="icon-align-left"></i></a>
          <a class="btn" href="#"><i class="icon-align-center"></i></a>
          <a class="btn" href="#"><i class="icon-align-right"></i></a>
          <a class="btn" href="#"><i class="icon-align-justify"></i></a>
        </div>
        <div class="btn-group">
          <a class="btn btn-primary" href="#"><i class="icon-user"></i> Профиль</a>
          <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="icon-caret-down"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#"><i class="icon-pencil"></i> Редактировать</a></li>
            <li><a href="#"><i class="icon-trash"></i> Удалить</a></li>
            <li><a href="#"><i class="icon-ban-circle"></i> Забанить</a></li>
            <li class="divider"></li>
            <li><a href="#"><i class="i"></i> Сделать админом</a></li>
          </ul>
        </div>
      </div>
      <form>
        <div class="control-group">
          <div class="controls">
            <div class="input-prepend">
              <span class="add-on"><i class="icon-envelope"></i></span>
              <input class="span2" id="inputIcon" type="text" placeholder="Email address">
            </div>
          </div>
        </div>
        <div class="control-group">
          <div class="controls">
            <div class="input-prepend">
              <span class="add-on"><i class="icon-key"></i></span>
              <input class="span2" id="inputIcon2" type="text" placeholder="Password">
            </div>
          </div>
        </div>
      </form>
      <div>
        <span class="rating">
          <span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span>
        </span>
      </div>
    </div>
  </div>

  <h3 class="page-header">Новые стили в 3.0</h3>
  <div class="row">
    <div class="span4">
      <i class="icon-quote-left icon-4x pull-left icon-muted"></i>
      Используйте множество классов в одном элементе, для создания цитаты как в этом примере.
      Или анимирование иконки для отображения процесса загрузки или обновления. Либо просто комбинируйте классы для создания своего уникального стиля.
    </div>
    <div class="span4">
      <div class="well well-large well-transparent lead">
        <i class="icon-spinner icon-spin icon-2x pull-left"></i> Крутящаяся иконка во время загрузки...
      </div>
    </div>
    <div class="span4">
      <p>
        <a class="btn btn-large btn-danger" href="#"><i class="icon-flag icon-2x pull-left"></i>Font Awesome<br>Version 3.0</a>
      </p>
      <a class="btn btn-primary" href="#"><i class="icon-refresh icon-spin"></i> Синхронизация...</a>
    </div>
  </div>

<h3 class="page-header">Примеры в HTML</h3>
<div class="row">
  <div class="span12">
    <h4>Строчные иконки</h4>
  </div>
  <div class="span3">
    <p>Поместите тег <code>&lt;i&gt;</code> иконки Font Awesome рядом с любым элементом или в тексте.</p>
  </div>
  <div class="span9">
    <div class="well well-transparent">
      <div style="font-size: 24px; line-height: 1.5em;">
        <i class="icon-camera-retro"></i> icon-camera-retro
      </div>
    </div>
<pre class="prettyprint linenums">
&lt;i class="icon-camera-retro"&gt;&lt;/i&gt; icon-camera-retro
</pre>
    <div class="alert alert-info"><i class="icon-info-sign"></i> Иконки появляются через псевдо-CSS-селектор :before.</div>
  </div>
</div>
<div class="row">
  <div class="span12">
    <h4>Большие иконки</h4>
  </div>
  <div class="span3">
    <p>
      Для увеличения иконки до размеров родительского элемента, используйте классы <code>icon-large</code>, <code>icon-2x</code>,
      <code>icon-3x</code> или <code>icon-4x</code>.
    </p>
  </div>
  <div class="span9">
    <p>
      Увеличьте размер иконки используя класс <code>icon-large</code> (33% увеличение), <code>icon-2x</code>,
      <code>icon-3x</code> либо <code>icon-4x</code>.
    </p>
    <div class="well well-transparent">
      <div style="font-size: 24px; line-height: 1.5em;">
        <p><i class="icon-camera-retro icon-large"></i> icon-camera-retro</p>
        <p><i class="icon-camera-retro icon-2x"></i> icon-camera-retro</p>
        <p><i class="icon-camera-retro icon-3x"></i> icon-camera-retro</p>
        <p><i class="icon-camera-retro icon-4x"></i> icon-camera-retro</p>
      </div>
    </div>
<pre class="prettyprint linenums">
&lt;p&gt;&lt;i class=&quot;icon-camera-retro icon-large&quot;&gt;&lt;/i&gt; icon-camera-retro&lt;/p&gt;
&lt;p&gt;&lt;i class=&quot;icon-camera-retro icon-2x&quot;&gt;&lt;/i&gt; icon-camera-retro&lt;/p&gt;
&lt;p&gt;&lt;i class=&quot;icon-camera-retro icon-3x&quot;&gt;&lt;/i&gt; icon-camera-retro&lt;/p&gt;
&lt;p&gt;&lt;i class=&quot;icon-camera-retro icon-4x&quot;&gt;&lt;/i&gt; icon-camera-retro&lt;/p&gt;
</pre>
    <div class="alert alert-info">
      <i class="icon-info-sign"></i> Если ваши иконки обрезаются по краям - убедитесь в корректной установке line-height.
    </div>
  </div>
</div>
<div class="row">
  <div class="span12">
    <h4>Анимирование</h4>
  </div>
  <div class="span3">
    <p>
      Используйте класс <code>icon-spin</code> - и Ваша иконка будет крутится. Рекомендуем использовать с <code>icon-spinner</code> и
      <code>icon-refresh</code>.
    </p>
  </div>
  <div class="span9">
    <div class="well well-large well-transparent lead">
      <i class="icon-spinner icon-spin"></i> Кручусь-верчусь - контент гружусь...
    </div>
<pre class="prettyprint linenums">
&lt;i class=&quot;icon-spinner icon-spin&quot;&gt;&lt;/i&gt; Кручусь-верчусь - контент гружусь...
</pre>
    <p class="alert alert-info">
      <i class="icon-info-sign"></i> CSS3-анимация не работает в IE7 - IE9.
    </p>
  </div>
</div>
<div class="row">
  <div class="span3">

  </div>
  <div class="span9">

  </div>
</div>
<div class="row">
  <div class="span12">
    <h4>Границы & Впуклые иконки</h4>
  </div>
  <div class="span3">
    <p>
      Используйте классы <code>icon-border</code> и <code>pull-right</code>, либо <code>pull-left</code> для цитат и заглавных иконок в тексте.
    </p>
  </div>
  <div class="span9">
    <div class="well well-large well-transparent">
      <i class="icon-quote-left icon-4x pull-left icon-muted"></i>
      Используйте множество классов в одном элементе, для создания цитаты как в этом примере. Или анимирование иконки для отображения процесса загрузки или обновления. Либо просто комбинируйте классы для создания своего уникального стиля.
    </div>
<pre class="prettyprint linenums">
&lt;i class=&quot;icon-quote-left icon-4x pull-left icon-muted&quot;&gt;&lt;/i&gt;
Используйте множество классов в одном элементе ... создания своего уникального стиля.
</pre>
    <div class="well well-large well-transparent">
      <i class="icon-flag icon-4x pull-left icon-border"></i>
      Используйте множество классов в одном элементе, для создания цитаты как в этом примере. Или анимирование иконки для отображения процесса загрузки или обновления. Либо просто комбинируйте классы для создания своего уникального стиля.
    </div>
<pre class="prettyprint linenums">
&lt;i class=&quot;icon-flag icon-4x pull-left icon-border&quot;&gt;&lt;/i&gt;
Используйте множество классов в одном элементе ... создания своего уникального стиля.
</pre>
  </div>
</div>
<div class="row">
  <div class="span12">
    <h4>Кнопки</h4>
  </div>
  <div class="span3">
    <p>
      <a class="btn" href="#">
        <i class="icon-repeat"></i> Перезагрузить</a>
      <a class="btn btn-success" href="#">
        <i class="icon-shopping-cart icon-large"></i> Оплатить</a>
    </p>
    <p>
      <a class="btn btn-large btn-primary" href="#">
        <i class="icon-comment"></i> Комментировать</a>
      <a class="btn btn-small btn-info" href="#">
        <i class="icon-info-sign"></i> Информация</a>
    </p>
    <p>
      <a class="btn btn-danger" href="#">
        <i class="icon-trash icon-large"></i> Удалить</a>
      <a class="btn btn-small" href="#">
        <i class="icon-cog"></i> Настройки</a>
    </p>
    <p>
      <a class="btn btn-large btn-danger" href="#"><i class="icon-flag icon-2x pull-left"></i>Font Awesome<br>Version 3.0</a>
    </p>
    <p>
      <a class="btn btn-primary" href="#"><i class="icon-refresh icon-spin"></i> Синхронизация...</a>
    </p>

  </div>
  <div class="span9">
    <p>
      Иконки Font Awesome отлично подходят для использования с кнопками. Вы так же можете использовать большие иконки и кнопки, и классы:
      <code>pull-right</code>, <code>pull-left</code>, <code>icon-spin</code>.
    </p>
<pre class="prettyprint linenums">
&lt;a class="btn" href="#"&gt;
  &lt;i class="icon-repeat"&gt;&lt;/i&gt; Перезагрузить&lt;/a&gt;
&lt;a class="btn btn-success" href="#"&gt;
  &lt;i class="icon-shopping-cart icon-large"&gt;&lt;/i&gt; Checkout&lt;/a&gt;
&lt;a class="btn btn-large btn-primary" href="#"&gt;
  &lt;i class="icon-comment"&gt;&lt;/i&gt; Комментировать&lt;/a&gt;
&lt;a class="btn btn-small btn-info" href="#"&gt;
  &lt;i class="icon-info-sign"&gt;&lt;/i&gt; Info&lt;/a&gt;
&lt;a class="btn btn-danger" href="#"&gt;
  &lt;i class="icon-trash icon-large"&gt;&lt;/i&gt; Удалить&lt;/a&gt;
&lt;a class="btn btn-small" href="#"&gt;
  &lt;i class="icon-cog"&gt;&lt;/i&gt; Настройки&lt;/a&gt;
&lt;a class=&quot;btn btn-large btn-danger&quot; href=&quot;#&quot;&gt;
  &lt;i class=&quot;icon-flag icon-2x pull-left&quot;&gt;&lt;/i&gt;Font Awesome&lt;br&gt;Version 3.0&lt;/a&gt;
&lt;a class=&quot;btn btn-primary&quot; href=&quot;#&quot;&gt;
  &lt;i class=&quot;icon-refresh icon-spin&quot;&gt;&lt;/i&gt; Синхронизация...&lt;/a&gt;
</pre>
  </div>
</div>
<div class="row">
  <div class="span12">
    <h4>Группы кнопок</h4>
  </div>
  <div class="span3">
    <p>
      <div class="btn-group">
        <a class="btn" href="#"><i class="icon-align-left"></i></a>
        <a class="btn" href="#"><i class="icon-align-center"></i></a>
        <a class="btn" href="#"><i class="icon-align-right"></i></a>
        <a class="btn" href="#"><i class="icon-align-justify"></i></a>
      </div>
    </p>
  </div>
  <div class="span9">
<pre class="prettyprint linenums">
&lt;div class="btn-group"&gt;
  &lt;a class="btn" href="#"&gt;&lt;i class="icon-align-left"&gt;&lt;/i&gt;&lt;/a&gt;
  &lt;a class="btn" href="#"&gt;&lt;i class="icon-align-center"&gt;&lt;/i&gt;&lt;/a&gt;
  &lt;a class="btn" href="#"&gt;&lt;i class="icon-align-right"&gt;&lt;/i&gt;&lt;/a&gt;
  &lt;a class="btn" href="#"&gt;&lt;i class="icon-align-justify"&gt;&lt;/i&gt;&lt;/a&gt;
&lt;/div&gt;
</pre>
  </div>
</div>
<div class="row">
  <div class="span12">
    <h4>Выпадающие списки и кнопки</h4>
  </div>
  <div class="span3">
    <p>
    <div class="btn-group open">
      <a class="btn btn-primary" href="#"><i class="icon-user"></i> Профиль</a>
      <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#">
        <span class="icon-caret-down"></span></a>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="icon-pencil"></i> Редактировать</a></li>
        <li><a href="#"><i class="icon-trash"></i> Удалить</a></li>
        <li><a href="#"><i class="icon-ban-circle"></i> Забанить</a></li>
        <li class="divider"></li>
        <li><a href="#"><i class="i"></i> Сделать админом</a></li>
      </ul>
    </div>
  </div>
  </p>
  <div class="span9">
<pre class="prettyprint linenums">
&lt;div class="btn-group open"&gt;
    &lt;a class="btn btn-primary" href="#"&gt;&lt;i class="icon-user"&gt;&lt;/i&gt; Профиль&lt;/a&gt;
    &lt;a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"&gt;&lt;span class="icon-caret-down"&gt;&lt;/span&gt;&lt;/a&gt;
    &lt;ul class="dropdown-menu"&gt;
        &lt;li&gt;&lt;a href="#"&gt;&lt;i class="icon-pencil"&gt;&lt;/i&gt; Редактировать&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="#"&gt;&lt;i class="icon-trash"&gt;&lt;/i&gt; Удалить&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="#"&gt;&lt;i class="icon-ban-circle"&gt;&lt;/i&gt; Забанить&lt;/a&gt;&lt;/li&gt;
        &lt;li class="divider"&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="#"&gt;&lt;i class="i"&gt;&lt;/i&gt; Сделать админом&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;
</pre>
    <div class="alert alert-info"><i class="icon-info-sign"></i> Не забудьте добавьте JavaScript для активации <a href="http://bootstrap.veliovgroup.com/components.php#buttonDropdowns" target="_blank">выпадающих списков</a>.</div>
  </div>
</div>
<div class="row">
  <div class="span12">
    <h4>Списки</h4>
  </div>
  <div class="span3">
    <p>
    <ul class="icons">
      <li><i class="icon-ok"></i> Списки</li>
      <li><i class="icon-ok"></i> Кнопки</li>
      <li><i class="icon-ok"></i> Группы кнопок</li>
      <li><i class="icon-ok"></i> Навигация</li>
      <li><i class="icon-ok"></i> Пост- и пред- идущие элементы</li>
    </ul>
    </p>
  </div>
  <div class="span9">
    <p>Замените знак списка своим собственным.</p>
<pre class="prettyprint linenums">
&lt;ul class="icons"&gt;
  &lt;li&gt;&lt;i class="icon-ok"&gt;&lt;/i&gt; Списки&lt;/li&gt;
  &lt;li&gt;&lt;i class="icon-ok"&gt;&lt;/i&gt; Кнопки&lt;/li&gt;
  &lt;li&gt;&lt;i class="icon-ok"&gt;&lt;/i&gt; Группы кнопок&lt;/li&gt;
  &lt;li&gt;&lt;i class="icon-ok"&gt;&lt;/i&gt; Навигация&lt;/li&gt;
  &lt;li&gt;&lt;i class="icon-ok"&gt;&lt;/i&gt; Пост- и пред- идущие элементы&lt;/li&gt;
&lt;/ul&gt;
</pre>
  </div>
</div>
<div class="row">
  <div class="span12">
    <h4>Навигация</h4>
  </div>
  <div class="span3">
    <div class="well" style="padding: 8px 0;">
      <ul class="nav nav-list">
        <li class="active"><a href="#"><i class="icon-home"></i> На главную</a></li>
        <li><a href="#"><i class="icon-book"></i> Библиотека</a></li>
        <li><a href="#"><i class="icon-pencil"></i> Приложения</a></li>
        <li><a href="#"><i class="icon-cogs"></i> Настройки</a></li>
      </ul>
    </div>
  </div>
  <div class="span9">
    <p>Используйте иконки в навигации для визуализации пунктов меню.</p>
<pre class="prettyprint linenums">
&lt;ul class="nav nav-list"&gt;
  &lt;li class="active"&gt;&lt;a href="#"&gt;&lt;i class="icon-home"&gt;&lt;/i&gt; На главную&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;&lt;i class="icon-book"&gt;&lt;/i&gt; Библиотека&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;&lt;i class="icon-pencil"&gt;&lt;/i&gt; Приложения&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;&lt;i class="icon-cogs"&gt;&lt;/i&gt; Настройки&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
</pre>
  </div>
</div>
<div class="row">
  <div class="span12">
    <h4>Пост- и пред- идущие элементы</h4>
  </div>
  <div class="span3">
    <p>
    <form>
      <div class="input-prepend">
        <span class="add-on"><i class="icon-envelope"></i></span>
        <input class="span2" type="text" placeholder="Email">
      </div>
      <div class="input-prepend">
        <span class="add-on"><i class="icon-key"></i></span>
        <input class="span2" type="password" placeholder="Пароль">
      </div>
    </form>
    </p>
  </div>
  <div class="span9">
<pre class="prettyprint linenums">
&lt;form&gt;
  &lt;div class="input-prepend"&gt;
    &lt;span class="add-on"&gt;&lt;i class="icon-envelope"&gt;&lt;/i&gt;&lt;/span&gt;
    &lt;input class="span2" type="text" placeholder="Email"&gt;
  &lt;/div&gt;
  &lt;div class="input-prepend"&gt;
    &lt;span class="add-on"&gt;&lt;i class="icon-key"&gt;&lt;/i&gt;&lt;/span&gt;
    &lt;input class="span2" type="password" placeholder="Пароль"&gt;
  &lt;/div&gt;
&lt;/form&gt;
</pre>
  </div>
</div>
<div class="row">
  <div class="span12">
    <h4>Кастомный CSS</h4>
  </div>
  <div class="span3">
    <p>Все что возможно сделать при помощи CSS, можно применить к Font Awesome.</p>
  </div>
  <div class="span9">
    <p>Звёздный рейтинг (Вдохновение от <a href="http://css-tricks.com/star-ratings/" target="_blank">CSS Tricks</a>)</p>
    <div class="well">
      <span class="rating">
        <span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span>
      </span>
    </div>
  </div>
</div>
</section>

<section id="contribute">
  <h2 class="page-header">Сотрудничество и помощь Font Awesome</h2>
  <div class="row">
    <div class="span3">
      <img class="img-rounded" src="assets/img/contribution-sample.png">
    </div>
    <div class="span9">
      <p class="lead">
        Хотите помочь нам создавать иконки? Вы можете создать свои иконки и мы их добавим - присоединяйтесь к нашему сообществу на GitHub.
      </p>
      <h3>Как добавить новые иконки?</h3>
      <ol>
        <li>Скачайте <a href="assets/img/icon-flag.pdf">icon-flag.pdf шаблон</a>.</li>
        <li>
          Откройте PDF в Adobe Illustrator. Имейте в виду файл имеет размер 60x56. Это в 4x кратный размер, от стандартного, шириной в 15 и высотой в 14. Шаблон это пример иконки "flag" используйте его как заготовку.
        </li>
        <li>
          Нарисуйте иконку, убедитесь что она идеальна. Как минимум каждая линия в Вашей заготовке должна быть не менее 4px.
          Не делите иконку и пиксели ровно по середине, они будут смазаны во время рендирования. Выставьте зум на 25% для представления как иконка будет выглядеть после рендирования.
        </li>
        <li>
          Отправьте свою иконку. Скидывайте на мыло Дейву <a href="mailto:dave@davegandy.com">dave@davegandy.com</a>. Убедитесь что тема письма соответствует следующему шаблону: <code>[Font Awesome] [Icon Contribution] icon-name</code>, не забудьте прикрепить совой pdf-файл с иконкой. Если Ваша иконка будет добавлена в Font Awesome (Дейв слишком перфекционист и применяет большие требования к каждой иконке), - Дейв свяжется с Вами для уточнения контактной информации, которая будет добавлена в информацию о создателях шрифта.
        </li>
      </ol>
    </div>
  </div>

</section>

<section id="roadmap">
  <h2 class="page-header">Roadmap</h2>
  <p>Ниже план на будущее.</p>
  <ul class="icons">
    <li><i class="icon-plus"></i>Облегчение самостоятельной сборки шрифта.</li>
    <li><i class="icon-plus"></i>Больше иконок. Есть идеи? <a href="https://github.com/FortAwesome/Font-Awesome/issues" target="_blank">Добавьте запрос на иконку</a> в проект Font Awesome на GitHub.</li>
    <li><i class="icon-plus"></i>Пособие по CSS методам, в духе "Звездного рейтинга" (см. выше).</li>
  </ul>
</section>

<section id="license">
  <h2 class="page-header">Лицензия</h2>
  <ul>
    <li>Font Awesome распространяются по лицензии <a href="http://scripts.sil.org/OFL" target="_blank">SIL Open Font License - http://scripts.sil.org/OFL</a>.</li>
    <li>Файлы Font Awesome CSS, LESS, и SASS распространяются по лицензии <a href="http://opensource.org/licenses/mit-license.html" target="_blank">MIT License - http://opensource.org/licenses/mit-license.html</a>.</li>
    <li>Пиктограммы Font Awesome распростроняются по лицензии <a href="http://creativecommons.org/licenses/by/3.0/" target="_blank">CC BY 3.0 License - http://creativecommons.org/licenses/by/3.0/</a></li>
    <li>Ссылка на первоисточник Font Awesome 3.0 более не обязательна, НО приветствуется: <code>Font Awesome by Dave Gandy - http://fortawesome.github.com/Font-Awesome</code>.</li>
  </ul>
  <p></p>
  <p></p>
</section>

<section id="kyruus">
  <h2 class="page-header"><a href="http://kyruus.com" target="_blank">Kyruus</a></h2>
  <div class="row">
    <div class="span7">
      <p>
        Я (Dave Gandy) ведущий дизайнер в Kyruus. Я (Dave Gandy) просыпаюсь каждый день вдохновленный своей работой.
        Почему? <strong>Kyruus - изменит систему здравоохранения.</strong> Без преувеличений.
      </p>

      <p>
        Kyruus это хорошо финансируемый, стартап направленный на улучшение здравоохранения в Бостоне (Boston). Мы верим в то что правильная информация доставленная в правильное время (быстро) поможет врачам делать правильные решения. <strong>Мы верим что можем сохранить людям жизнь.</strong>
      </p>

      Что мы любим в Kyruus:
      <ul class="unstyled">
        <li><i class="icon-pencil icon-2x pull-left"></i> Дизайн. В любой сфере работы компании дизайн стоит на первом месте. Он безупречен.</li>
        <li><i class="icon-globe icon-2x pull-left"></i> Цель. Каждый день, каждый день я (Dave) просыпаюсь что бы сделать этот мир лучше.</li>
        <li><i class="icon-group icon-2x pull-left"></i> Люди. Я работаю с лучшими людьми. Которые больше чем умные люди. Хорошие люди.</li>
      </ul>

      <p>
        <strong>В Kyruus требуются хорошие люди.</strong> Дизайнеры, разработчики приложений, мастера по работе с большими данными, & интерны. Присоединяйтесь и работайте со мной.
      </p>

      Заинтересованы? <a href="mailto:dave@davegandy.com">Напишите Дейву.</a>
    </div>
    <div class="span5">
      <div class="border pull-right text-align-center">
        <a href="http://kyruus.com" target="_blank">
          <i class="icon-medkit"></i><br>
          Работайте с Дейвом в Kyruus
        </a>
      </div>
    </div>
  </div>
</section>

<section id="say-thanks">
  <h2 class="page-header">Благодарности <small></small></h2>
  <div class="row">
    <div class="span12">
      <p class="lead">
        <i class="icon-gift icon-4x pull-left"></i>
        Надеюсь Вы думаете что Font Awesome <em>-</em> аху**ый. Я потратил сотни часов работая над этим шрифтом, создав опен-сорс сообщество и работая совместно с людьми. .
      </p>
    </div>
  </div>
  <div class="row">
    <div class="span4">
      <h4><a href="#contribute">Чем помочь?</a></h4>
      <p>
        <a href="#contribute">Распространяйте иконки</a> для того что бы Font Awesome стал более популярным.
      </p>
    </div>
    <div class="span4">
      <h4><a href="http://www.shareagift.com/pages/giftpage.aspx?giftid=2472" target="_blank">Помогите Дейву купить iMac</a></h4>
      <p>
        <a href="http://www.shareagift.com/pages/giftpage.aspx?giftid=2472" target="_blank">Пожертвования</a> В качестве благодарности Дейву за предоставленный шрифт, Дейв мечтает о новом алюминиевом и серебристом iMac для того что бы он мог продолжать творить.
      </p>
    </div>
    <div class="span4">
      <h4><a href="http://amzn.com/w/G64X58AY416W" target="_blank">Лист желаний Дейва на Amazon</a></h4>
      <p>
        Выберите что-то конкретное из <a href="http://amzn.com/w/G64X58AY416W" target="_blank">листа желаний Дейва</a> в качестве благодарности.
      </p>
    </div>
  </div>
</section>

</div>

<footer>
  <div class="container">
    <div class="row">
      <div class="span4">
        <h2>Контакты</h2>
        <ul class="icons">
          <li><i class="icon-envelope"></i> Email: <a href="mailto:dave@davegandy.com">Dave Gandy</a></li>
          <li><i class="icon-twitter"></i> Twitter: <a href="https://twitter.com/fortaweso_me/" target="_blank">@FortAweso_me</a></li>
          <li><i class="icon-wrench"></i> Должность: Ведущий Дизайнер продуктов в <a href="#kyruus">Kyruus</a></li>
          <li><i class="icon-font"></i> Переведено: <a href="https://twitter.com/smart_egg">Dmitriy A.</a> в стенах <a href="http://veliovgroup.com">Veliov Group</a></li>
          <li><i class="icon-circle-blank"></i> Original in English <a href="http://fortawesome.github.com/Font-Awesome/">here</a>.</li>
        </ul>
      </div>
      <div class="span8">
        <h2>Особая благодарность</h2>
        <p>
          Особая благодарность <a href="https://twitter.com/robmadole/" target="_blank">@robmadole</a> и
          <a href="https://twitter.com/supercodepoet/" target="_blank">@supercodepoet</a> за оценку дизайна, советы, и помощь с backbone.js.
        </p>
        <p>
          Особая благодарность <a target="_blank" href="https://twitter.com/grantgordon">@grantgordon</a> и
          <a target="_blank" href="https://twitter.com/johnsmclay">@johnsmclay</a> за разработку
          <a target="_blank"  href="http://icnfnt.com/">icnfnt</a>, лучший способ собрать свой собственный Font Awesome.
        </p>
      </div>
    </div>
  </div>
</footer>



<script type="text/template" id="modal-template">
  <div class="modal hide fade in">
    <div class="modal-header">
      <a class="close" data-dismiss="modal"><i class="icon-remove"></i></a>
      <h4><%= iconName %></h4>
    </div>
    <div class="modal-body">
      <div class="row">
        <div class="span3 icon6">
          <div class="thumbnail">
            <div><i class="<%= iconName %>"></i></div>
            280px
          </div>
        </div>
        <div class="span3 icon5">
          <div class="thumbnail">
            <div><i class="<%= iconName %>"></i></div>
            140px
          </div>
        </div>
      </div>
      <div class="row">
        <div class="span2 icon4">
          <div class="thumbnail">
            <div><i class="<%= iconName %>"></i></div>
            112px
          </div>
        </div>
        <div class="span2 icon3">
          <div class="thumbnail">
            <div><i class="<%= iconName %>"></i></div>
            56px
          </div>
        </div>
        <div class="span1 icon2">
          <div class="thumbnail">
            <div><i class="<%= iconName %>"></i></div>
            28px
          </div>
        </div>
        <div class="span1 icon1">
          <div class="thumbnail">
            <div><i class="<%= iconName %>"></i></div>
            14px
          </div>
        </div>
      </div>
    </div>
  </div>
</script>

<script src="assets/js/jquery-1.7.1.min.js"></script>
<script src="assets/js/underscore.min.js"></script>
<script src="assets/js/backbone.min.js"></script>
<script src="assets/js/prettify.min.js"></script>
<script src="assets/js/bootstrap-222.min.js"></script>
<script src="assets/js/index/index.js"></script>
</body>
</html>
