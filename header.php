<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Agritourism.kz</title>
  <link rel="stylesheet" href="./fonts/nucleo/css/style.css" />
  <link rel="stylesheet" href="./css/materialize.min.css" />
  <link rel="stylesheet" href="./css/tailwind.css" />
  <link rel="stylesheet" href="./css/main.min.css" />
  <!-- icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

  <script src="./js/materialize.js"></script>
</head>

<body class="text-gray-700">
  <!-- nav mobile -->
  <ul id="slide-out" class="sidenav pt-16">
    <li>
      <a class="dropdown-trigger" href="#!" data-target="dropdown2">
        Выберите свой тур
        <i class="material-icons right">arrow_drop_down</i>
      </a>
    </li>

    <ul id="dropdown2" class="dropdown-content">
      <li><a href="./aqmola.php">Акмолинская область</a></li>
      <li><a href="./almaty.php">Алматинская область</a></li>
      <li><a href="./vko.php">ВКО</a></li>
      <li><a href="./karaganda.php">Карагандинская область</a></li>
      <li><a href="./turkestan.php">Туркестанская область</a></li>
    </ul>

    <li>
      <a href="./about.php">
        О нашей компании
      </a>
    </li>
    <li>
      <a href="./register.php">
        Зарегистрировать свою ферму
      </a>
    </li>
    <li>
      <div class="divider"></div>
    </li>
    <li>
      <a class="flex items-center" href="#">
        <i class="icon icon-telephone"></i>+7 777 777 7777
      </a>
    </li>
    <li>
      <a class="flex items-center" href="#">
        <i class="icon icon-smartphone"></i>+7 777 777 7777
      </a>
    </li>
    <li>
      <a class="flex items-center" href="#">
        <i class="icon icon-email"></i>info@agritourism.kz
      </a>
    </li>
  </ul>
  <!-- first nav -->
  <nav class="teal">
    <div class="container nav-wrapper">
      <a href="./" class="brand-logo">
        Agritourism.kz
      </a>
      <a href="#" data-target="slide-out" class="sidenav-trigger">
        <i class="material-icons">menu</i>
      </a>
      <ul class="right hide-on-med-and-down">
        <li>
          <a class="flex items-center" href="#">
            <i class="icon icon-telephone mr-2"></i>+7 777 777 7777
          </a>
        </li>
        <li>
          <a class="flex items-center" href="#">
            <i class="icon icon-smartphone mr-2"></i>+7 777 777 7777
          </a>
        </li>
        <li>
          <a class="flex items-center" href="#">
            <i class="icon icon-email mr-2"></i>info@agritourism.kz
          </a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- second nav -->
  <nav class="white grey-text text-darken-4 hide-on-med-and-down">
    <!-- <nav class="teal hide-on-med-and-down"> -->
    <div class="container nav-wrapper">
      <ul class="left hide-on-med-and-down">
        <li>
          <a class="dropdown-trigger" href="#!" data-target="dropdown1">
            Выберите свой тур
            <i class="material-icons right">arrow_drop_down</i>
          </a>
          <ul id="dropdown1" class="dropdown-content">
            <li><a href="./aqmola.php">Акмолинская область</a></li>
            <li><a href="./almaty.php">Алматинская область</a></li>
            <li><a href="./vko.php">ВКО</a></li>
            <li><a href="./karaganda.php">Карагандинская область</a></li>
            <li><a href="./turkestan.php">Туркестанская область</a></li>
          </ul>
        </li>
      </ul>
      <ul class="right hide-on-med-and-down">
        <li>
          <a href="./about.php">
            О нашей компании
          </a>
        </li>
        <li>
          <a href="./register.php">
            Зарегистрировать свою ферму
          </a>
        </li>
      </ul>
    </div>
  </nav>