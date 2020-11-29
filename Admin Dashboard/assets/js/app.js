$(document).ready(function () {
  $("#hamburger i").on("click", function () {
    $("#sideber").css({ left: "0px" });
  });

  $("#dismiss i").on("click", function () {
    $("#sideber").css({ left: "-500px" });
  });
});
