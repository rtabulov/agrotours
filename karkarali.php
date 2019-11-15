<?php include 'header.php'; ?>

<section class="py-16 text-xl">
  <div class="container">
    <h1 class="text-center text-4xl md:text-5xl font-bold mb-12">
      Эко тур с проживанием у местных жителей и в гостевых домах в Каркаралинском Национальном парке. </h1>

    <div class="row">
      <div class="col s12 m5">
        <img class="w-full" src="./img/karkarali-hero.png" alt="" />
      </div>

      <div class="col s12 m7 mt-8 md:mt-0">
        <ul class="list-disc browser-default pl-6 font-bold text-xl">
          <li> 1 день в Нур-Султане, 2 дня в Каркаралинске. </li>
          <li>
            с катанием на лыжах, показательная охота с беркутом. </li>
          <li>
            на лошадях, </li>
          <li> треккинг,</li>
          <li> ознакомительные экскурсии по эко тропам,</li>
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
          Национальный парк Каркаралинск покоряет красотой своей природы – причудливые горы, каменные пласты, ущелья, пропасти, террасы, карнизы, озера украшают горы.
        </p>
        <p>Первозданная красота каркаралинских гор и лесов, буйная растительность долин, чистые, как слеза, озера - все это надолго запоминается каждому, кто здесь хоть однажды побывал. Каркаралы, словно волшебный магнит, тянет к себе путешественников, туристов и спортсменов, всех тех, кто любит казахстанскую природу.
        </p>
      </div>
    </div>
  </div>
</section>

<section class="mb-20">
  <div class="container">
    <div class="carousel carousel-slider tour-carousel">
      <a class="carousel-item" href="#one!"><img src="./img/karkarali-5.png" /></a>
      <a class="carousel-item" href="#two!"><img src="./img/karkarali-4.png" /></a>
      <a class="carousel-item" href="#four!"><img src="./img/karkarali-3.png" /></a>
      <a class="carousel-item" href="#five!"><img src="./img/karkarali-1.png" /></a>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>