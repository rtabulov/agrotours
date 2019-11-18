<?php include 'header.php'; ?>

<section class="py-16 text-xl">
  <div class="container">
    <h1 class="text-center text-4xl md:text-5xl font-bold mb-12">
      Эко - тур по озерам «Кольсай», «каинды» с проживанием в гостевых домах. </h1>

    <div class="row">
      <div class="col s12 m5">
        <img class="w-full" src="./img/kolsai-hero.png" alt="" />
      </div>

      <div class="col s12 m7 mt-8 md:mt-0">
        <ul class="list-disc browser-default pl-6 font-bold text-xl">
          <li> 1 день в Алмате, 2 дня на озерах. </li>
          <li>Расстояние от Алматы 300 км. </li>
          <li>Кольсайские озёра </li>
          <li> Озеро Кайынды </li>
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

            <input type="hidden" name="tour" id="tour" value="Эко - тур по озерам «Кольсай», «каинды» с проживанием в гостевых домах, Алматинская область." />

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
          <strong>Кольсайские озёра</strong> – одно из красивейших мест, озера называют жемчужиной Северного Тянь-Шаня. Они расположены на высотах 1800, 2250 и 2700 метров над уровнем моря. Теплый сезон продолжается с апреля до конца сентября. Кольсай – это прекрасное место для стоянок, пеших походов, путешествий на лошадях и горных велосипедах.
        </p>
        <p class="my-6">
          <strong>Озеро Кайынды</strong> – одно из таинственных мест предгорья на высоте 2000 м над уровнем моря среди елей, в окружении горных вершин. Оно возникло около 100 лет назад в результате обвала огромной массы горной породы, перегородившей ущелье естественной дамбой. Озеро расположилось на 12 км восточнее первого Кольсайского озера. Озеро длиной около 400 м достигает в глубину почти 30 м. Со всех сторон озеро Каинды окружено осыпными каменистыми склонами и крутыми взлетами скал. Выше него – скальный тупик, и только с одной стороны можно подъехать к воде на машине. Со скалистого гребня открываются потрясающие виды на ущелье Саты, долину реки Чилик, ущелье Каинды. Кругом богатые грибные леса, в которых в июле-августе можно собирать землянику, а в последний месяц лета – горную малину. Сухие стволы елей возвышаются над водной поверхностью, словно мачты затопленных кораблей.
        </p>
      </div>
    </div>
  </div>
</section>

<section class="mb-20">
  <div class="container">
    <div class="carousel carousel-slider tour-carousel">
      <a class="carousel-item" href="#seven!"><img src="./img/kolsai-7.png" /></a>
      <a class="carousel-item" href="#six!"><img src="./img/kolsai-6.png" /></a>
      <a class="carousel-item" href="#five!"><img src="./img/kolsai-5.png" /></a>
      <a class="carousel-item" href="#four!"><img src="./img/kolsai-4.png" /></a>
      <a class="carousel-item" href="#three!"><img src="./img/kolsai-3.png" /></a>
      <a class="carousel-item" href="#two!"><img src="./img/kolsai-2.png" /></a>
      <a class="carousel-item" href="#one!"><img src="./img/kolsai-1.png" /></a>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>