document.addEventListener("DOMContentLoaded", function() {
  M.AutoInit();
  var carousel = document.querySelector(".carousel");
  var instances = M.Carousel.init(carousel, {
    fullWidth: true,
    indicators: true
  });

  var inst = M.Carousel.getInstance(document.querySelector(".carousel"));

  var intervalID = setInterval(function() {
    inst.next();
  }, 7000);
});
