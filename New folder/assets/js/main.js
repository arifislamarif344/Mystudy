$(document).ready(function () {
  // Active
  $(".sideber__content__li").click(function () {
    $(".sideber__content__li").removeClass("active");
    $(this).addClass("active");
  });

  $("#episode__1").click(function () {
    $(".episode__1").toggleClass("block");
    var icon = document.querySelector("#episode__1 #icon");
    icon.classList.toggle("fa-minus");
  });

  $("#episode__2").click(function () {
    $(".episode__2").toggleClass("block");
    var icon = document.querySelector("#episode__2 #icon");
    icon.classList.toggle("fa-minus");
  });

  $("#episode__3").click(function () {
    $(".episode__3").toggleClass("block");
    var icon = document.querySelector("#episode__3 #icon");
    icon.classList.toggle("fa-minus");
  });

  // Added More
});
