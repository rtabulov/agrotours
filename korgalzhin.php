<?php include 'header.php'; ?>

<section class="py-16 text-xl">
  <div class="container">
    <h1 class="text-center text-5xl font-bold mb-12">
      Природный тур в Коргальджинский заповедник.
    </h1>

    <div class="row">
      <div class="col m5">
        <img class="w-full" src="./img/korgalzhin-hero.png" alt="" />
      </div>

      <div class="col m7">
        <ul class="list-disc browser-default pl-6 font-bold text-xl">
          <li>
            1 день Нур-Султан, 1 день в заповеднике.
          </li>
          <li>
            В программе: наблюдение за птицами, пикник с самоваром на дровах
            на озере.
          </li>
          <li>
            Сезонность тура: с мая по сентябрь.
          </li>
          <li>
            Семейный тур, орнитологический тур.
          </li>
        </ul>
        <div class="row mt-8">
          <form action="./mail.php" method="POST" class="col s12">
            <div class="row">
              <div class="input-field col s6">
                <input id="name" name="name" type="text" class="validate" required />
                <label for="name">Имя</label>
              </div>

              <div class="input-field col s6">
                <input type="text" id="phone" name="phone" class="validate" required />
                <label for="phone">Телефон</label>
              </div>
            </div>

            <input type="hidden" name="tour" id="tour" value="Природный тур в Коргальджинский заповедник." />

            <button class="btn waves-effect waves-light" type="submit">
              Заказать звонок
              <i class="material-icons right">send</i>
            </button>
          </form>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <p class="my-6">
          Заповедник расположен в 130 км от Астаны и входит в Рамсарский
          список водно-болотных угодий международного значения. Сам
          Коргалжынский заповедник (в составе природного объекта "Сары-Арка
          - степи и озера Северного Казахстана") включен в Список Всемирного
          наследия ЮНЕСКО.
        </p>
        <p>
          Во время следования по маршруту можно насладиться просторами
          казахской степи, понаблюдать за такими водоплавающими и
          околоводными птицами как кречетка, степная тиркушка, большой
          веретенник, средний кроншнеп, черноголовый хохотун, журавль
          красавка, кудрявый пеликан, савка, фламинго, кобчик, степной орел,
          степной лунь, черный и белокрылый жаворонки. Здесь обитает более
          100 видов птиц! В том числе можно наблюдать за розовыми фламинго,
          которые гнездятся здесь на соленых озерах. Также есть возможность
          увидеть несколько млекопитающих - сайгу, степного сурка и
          несколько видов сусликов.
        </p>
      </div>
    </div>
  </div>
</section>

<section class="mb-20">
  <div class="container">
    <div class="carousel carousel-slider tour-carousel">
      <a class="carousel-item" href="#one!"><img src="./img/korgalzhin-5.png" /></a>
      <a class="carousel-item" href="#two!"><img src="./img/korgalzhin-4.png" /></a>
      <a class="carousel-item" href="#four!"><img src="./img/korgalzhin-3.png" /></a>
      <a class="carousel-item" href="#five!"><img src="./img/korgalzhin-1.png" /></a>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>