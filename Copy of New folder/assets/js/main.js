$(document).ready(function () {
  // Active
  $(".sideber__content__li").click(function () {
    $(".sideber__content__li").removeClass("active");
    $(this).addClass("active");
  });

  $(".sideber .sideber__content #sideber__content__title").click(function () {
    $(".sideber__content__li", this).toggleClass("block");
    myFunction(x);
  });
});

function myFunction(x) {
  x.classList.toggle("fa-thumbs-down");
}
