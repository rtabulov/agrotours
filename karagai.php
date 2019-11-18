<?php include 'header.php'; ?>

<section class="py-16 text-xl">
  <div class="container">
    <h1 class="text-center text-4xl md:text-5xl font-bold mb-12">
      Экспедиция на одно из самых красивых мест Восточного Казахстана – Катон Карагай и Рахмановские ключи.
    </h1>

    <div class="row">
      <div class="col s12 m5">
        <img class="w-full" src="./img/karagai-hero.png" alt="" />
      </div>

      <div class="col s12 m7 mt-8 md:mt-0">
        <ul class="list-disc browser-default pl-6 font-bold text-xl">
          <li> Джип тур </li>
          <li> 7 дней </li>
          <li>Сезонность: с мая по сентябрь. </li>
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

            <input type="hidden" name="tour" id="tour" value="экспедиция на одно из самых красивых мест Восточного Казахстана – Катон Карагай и Рахмановские ключи." />

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
          Дорога на <strong>Рахмановские ключи</strong> лежит по живописнейшим местам Восточного Казахстана и Алтая. Здесь по поверьям лежат земли легендарного Беловодья, древней страны, где каждый пришедший находит свое счастье. Впрочем, это так и есть. Попадая сюда, человек как бы перерождается. Кто-то переосмысливает свою жизнь, сверяя её с поступью времени. Говорят, именно в этих краях, у подножия мудрой молчаливой Белухи, можно отыскать ответы на многие вопросы.
        </p>
        <p class="my-6">
          <strong>Коккольский водопад</strong>, уникальное творение природы. Еще один нерукотворный шедевр - водопад с романтичным названием Волосы Вероники. Горные ручьи и реки тугими струями слетают с крутых поросших пушистыми мхами и редкими цветами скал, создавая невероятные, просто сказочные картины. Сюда приходят на водопой маралы и косули, разное зверье. Но не только и не столько жажда зовет все живое к источникам. Чудодейственная влага этих уникальных мест, будто ниспослана свыше. И каждый, окунувшись в этот зеленый, благоухающий альпийскими травами и здоровьем, мир, испив живой Рахмановской воды, уносит с собой мощный заряд космической энергии.
        </p>
        <p class="my-6">Здесь, на Алтае, Вы обязательно найдете ключи к своему здоровью, красоте и отличному настроению!</p>
        <div class="text-center">
          <h2 class="text-3xl my-12 font-bold">ПРОГРАММА ПУТЕШЕСТВИЯ</h2>
          <h3 class="text-2xl my-6 ">День 1. Нур-Султан –Оскемен</h3>
          <p class="my-6"> Сбор группы и вылет из города Нур-Султан. Прибытие в Оскемен. Заселение, экскурсии. </p>
          <h3 class="text-2xl my-6 ">День 2. Оскемен-Бухтарма</h3>
          <p class="my-6">Подъем в 07:00 час, завтрак.. Выезд в Бухтарму. Обед в кафе по дороге или пикник. Приезд в базу отдыха в Бухтарме. Ужин, купания.</p>
          <h3 class="text-2xl my-6 ">День 3. Рахмановские ключи.</h3>
          <p class="my-6">Подъем в 07:00 час, завтрак. Выезд в Рахмановские ключи. Обед в кафе по дороге или пикник. Прибытие в Рахмановские ключи. Ужин, свободное время.</p>
          <h3 class="text-2xl my-6 ">День 4. Рахмановские ключи.</h3>
          <p class="my-6">Подъем в 09:00 час, завтрак. Рахмановские ключи. Экскурсии на водопады. Процедуры с радоновыми источниками.</p>
          <h3 class="text-2xl my-6 ">День 5. Барлык</h3>
          <p class="my-6">Выезд в Барлык. Прибытие на Мараловодческое хозяйство. Обед, процедуры с пантами маралов, ужин, покупка самого запашистого меда.</p>
          <h3 class="text-2xl my-6 "> День 6. Ак Бауыр - Оскемен. </h3>
          <p class="my-6">Подъем в 08:30 час, завтрак и выезд Оскемен. Через УлкенНарын, на пароме, обед, прибытие в Ак Бауыр, экскурсия. Выезд в Оскемен. </p>
          <h3 class="text-2xl my-6 "> День 7. Завтрак, вылет в Нур-Султан. </h3>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="mb-20">
  <div class="container">
    <div class="carousel carousel-slider tour-carousel">
      <a class="carousel-item" href="#seven!"><img src="./img/karagai-7.png" /></a>
      <a class="carousel-item" href="#six!"><img src="./img/karagai-6.png" /></a>
      <a class="carousel-item" href="#five!"><img src="./img/karagai-5.png" /></a>
      <a class="carousel-item" href="#four!"><img src="./img/karagai-4.png" /></a>
      <a class="carousel-item" href="#three!"><img src="./img/karagai-3.png" /></a>
      <a class="carousel-item" href="#two!"><img src="./img/karagai-2.png" /></a>
      <a class="carousel-item" href="#one!"><img src="./img/karagai-1.png" /></a>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>