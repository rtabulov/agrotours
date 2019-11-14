document.addEventListener("DOMContentLoaded", function() {
  M.AutoInit();
  var elems = document.querySelectorAll(".carousel");
  var instances = M.Carousel.init(elems, {
    fullWidth: true,
    indicators: true
  });

  var instance = M.Carousel.getInstance(document.querySelector(".carousel"));

  // console.log(instance);
  var intervalID = setInterval(function() {
    instance.next();
  }, 7000);
});
