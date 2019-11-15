<?php include 'header.php'; ?>

<section class="py-16 text-xl">
  <div class="container">
    <h1 class="text-center text-5xl font-bold mb-12">
      Зарегистрировать свою ферму
    </h1>

    <div class="row">
      <div class="col m6">
        <img class="w-full" src="./img/q5.jpg" alt="" />
        <!-- <img class="w-full" src="./img/" alt="" /> -->
      </div>

      <div class="col m6">

        <div class="row">
          <form action="./mail-2.php" method="POST" class="col s12">
            <div class="input-field">
              <input id="name" name="name" type="text" class="validate" required />
              <label for="name">Имя</label>
            </div>

            <div class="input-field">
              <input id="email" name="email" type="email" class="validate" required />
              <label for="email">Почта</label>
            </div>

            <div class="input-field">
              <input type="text" id="phone" name="phone" class="validate" required />
              <label for="phone">Телефон</label>
            </div>

            <div class="input-field">
              <textarea type="text" id="farm-desc" name="farm-desc" class="materialize-textarea"></textarea>
              <label for="farm-desc">Описание фермы</label>

            </div>

            <input type="hidden" name="tour" id="tour" value="Природный тур в Коргальджинский заповедник." />

            <button class="btn waves-effect waves-light" type="submit">
              Отправить данные
              <i class="material-icons right">send</i>
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>


<?php include 'footer.php'; ?>