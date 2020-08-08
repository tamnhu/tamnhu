$(document).ready(function () {
  $("#showAll").one("click", function () {
    $(this).addClass("close");
    $("#closeAll").removeClass("close");
    $(".collapse").each(function () {
      $(this).addClass("show");
    });
    $(".btn-link").each(function () {
      $(this).removeClass("collapsed");
    });
  });

  $("#closeAll").one("click", function () {
    $(this).addClass("close");
    $("#showAll").removeClass("close");
    $(".collapse").each(function () {
      $(this).removeClass("show");
    });
    $(".btn-link").each(function () {
      $(this).addClass("collapsed");
    });
  });
});

