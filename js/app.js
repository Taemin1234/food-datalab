$(function () {
  $(".rank-wrap").slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    arrows: true,
  });
});

$(function () {
  $(".food-rank").slick({
    slidesToshow: 1,
    slidesToScroll: 1,
    arrow: true,
    draggable: false,
  });
});

// 탭메뉴
$(function () {
  var idx;
  $(".tab-menu").click(function () {
    idx = $(this).index();

    $(".tab-menu").removeClass("active");

    $(".tab-menu").eq(idx).addClass("active");
  });
});

$(window).scroll(function () {
  if ($(this).scrollTop() > 100) {
    $("#backToTop").fadeIn(500);
    $(".fixwrap").css("position", "fixed");
    $(".fixwrap2").css("position", "fixed");
    $(".fixwrap2").css("top", "79px");
    $(".sub_menu").css("position", "fixed");
  } else {
    $("#backToTop").fadeOut("slow");
    $(".fixwrap").css("position", "relative");
    $(".fixwrap2").css("position", "relative");
    $(".fixwrap2").css("top", "0");
    $(".sub_menu").css("position", "absolute");
  }
});
$("#backToTop").click(function (e) {
  e.preventDefault();
  $("html, body").animate({ scrollTop: 0 }, 200);
});

// 로딩 페이지

$("#loading").hide();
$("#next").click(function () {
  $("#loading").show();
  return true;
});
