<?php include 'header.php'; ?>

<section class="py-16 text-xl">
  <div class="container">
    <h1 class="text-center text-4xl md:text-5xl font-bold mb-12">
      Эко тур с проживанием у местных жителей и в гостевых домах в Каркаралинском Национальном парке. </h1>

    <div class="row">
      <div class="col s12 m5">
        <img class="w-full" src="./img/yassaui-hero.png" alt="" />
      </div>

      <div class="col s12 m7 mt-8 md:mt-0">
        <ul class="list-disc browser-default pl-6 font-bold text-xl">
          <li>Шымкент и окрестности, Туркестанская область. 3 дня.

          </li>
          <li>
            Сезонность: круглый год.
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

            <input type="hidden" name="tour" id="tour" value="Эко тур с проживанием у местных жителей и в гостевых домах в Каркаралинском Национальном парке. " />

            <button class="btn waves-effect waves-light" type="submit">
              Оставить заявку
              <i class="material-icons right">send</i>
            </button>
          </form>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <p class="my-6">
          Вас ждет увлекательная поездка на юг Казахстана, где вы посетите семью ремесленников и попробуете себя в роли мастера-ремесленника, далее поездка в пригород в семью потомственных заводчиков беркутов и насладитесь природой, деревенским колоритом местного поселения, отведаете эко-продукцию местной кухни. </p>
        <p class="my-6">Далее, конечно же посетим уникальное творение истории- Мавзолей Ходжа Ахмеда Яссауи.
        </p>
        <p class="my-6"> Мавзолей Ходжи Ахмеда Ясави (Яссауи) расположен в городе Туркестан в Южно-Казахстанской области. Его по праву называют восьмым чудом света. Это комплекс дворцов и храмов, шедевр средневековой архитектуры, включенный в Список Всемирного наследия ЮНЕСКО. Ходжа Ахмед Ясави (Султан Хазрет) – великий тюркский поэт-суфий и мыслитель XII века. До нашего времени дошла его книга "Диван-и-Хикмет" ("Книга мудрости"), одна из древнейших в мире тюркоязычных книг. </p>
        <p class="my-6">Мавзолей имеет один из самых больших кирпичных куполов в Центральной Азии, диаметр которого – около 18 м. В мавзолее - более 30 помещений, которые условно разбиты на восемь блоков. Соединяются они между собой переплетенными ходами, коридорами, витиеватыми двухэтажными лестницами. Свет проникает внутрь через забранные деревянными решетками окна, эхо далеко разносит шаги идущих... Полумрак, прохлада, тишина рождают в сердцах паломников чувство глубокого благоговения и гармонии.</p>
      </div>
    </div>
  </div>
</section>

<section class="mb-20">
  <div class="container">
    <div class="carousel carousel-slider tour-carousel">
      <a class="carousel-item" href="#one!"><img src="./img/yassaui-7.png" /></a>
      <a class="carousel-item" href="#two!"><img src="./img/yassaui-4.png" /></a>
      <a class="carousel-item" href="#three!"><img src="./img/yassaui-6.png" /></a>
      <a class="carousel-item" href="#four!"><img src="./img/yassaui-3.png" /></a>
      <a class="carousel-item" href="#five!"><img src="./img/yassaui-1.png" /></a>
      <a class="carousel-item" href="#six!"><img src="./img/yassaui-5.png" /></a>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>