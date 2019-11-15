<?php include 'header.php'; ?>

<section class="py-16 text-xl">
  <div class="container">
    <h1 class="text-center text-4xl md:text-5xl font-bold mb-12">Karagandy Region, Shabanbay Bi village
    </h1>

    <div class="row">
      <div class="col s12 m5">
        <img class="w-full" src="./img/shabanbay-bi-hero.png" alt="" />
      </div>

      <div class="col s12 m7 mt-8 md:mt-0">
        <ul class="list-disc browser-default pl-6 font-bold text-xl">
          <li> Поездка в селение Шабанбай би, Карагандинская область, проживание в местой семье казахов. </li>
          <li>
            Нур-Султан 1 день, поселок Шабанбай би 2 дня. </li>

          <li> сезонность: с апреля по ноябрь.</li>
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

            <input type="hidden" name="tour" id="tour" value="Karagandy Region, Shabanbay Bi village" />

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
        <p class="my-6">The Green destination project ranked the most sustainable tourist destinations in the world. The stability of travelers ' interest to a particular point on the map was considered as the main criterion. The selection was conducted by 30 international industry experts.
        </p>
        <p class="my-6">The representative of Kazakhstan in Sustainable Destinations Global Top 100 is Shabanbai bi village and its surroundings.
        </p>
        <p class="my-6">A tiny village in Aktogay district of Karaganda region, located on the border of the Kyzylarai nature reserve. It is the highest point in Central Kazakhstan, the peak of Aksoran the altitude of 1565 metres. Kyzylarai oasis itself is an amazing combination of forest, steppe and mountains with unique flora and fauna. Here are found and wild animals - argali, moose, wild boar, lynx.</p>
        <p class="my-6">This is an archaeological monument of the bronze age, Begazy memorial with its unique granite tombs. This land of the Great silk road, which passed along the local river Tokerau. Among the attractions: rock inscriptions of the stone age on mount Zheltau, mount Aulie with a cave and a sacred source, ancient stone pillars in the form of human figures – balbaltas.</p>
      </div>
    </div>
  </div>
</section>

<section class="mb-20">
  <div class="container">
    <div class="carousel carousel-slider tour-carousel">
      <a class="carousel-item" href="#one!"><img src="./img/shabanbay-bi-5.png" /></a>
      <a class="carousel-item" href="#two!"><img src="./img/shabanbay-bi-4.png" /></a>
      <a class="carousel-item" href="#four!"><img src="./img/shabanbay-bi-3.png" /></a>
      <a class="carousel-item" href="#five!"><img src="./img/shabanbay-bi-1.png" /></a>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>