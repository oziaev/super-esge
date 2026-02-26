$(function () {
  // header
  // ----------------------------------------------
  const $header = $("header");
  const $toggle = $(".toggle");
  const $mask = $(".mask");
  const $hamburgerMenu = $(".hamburger-menu");

  const closeMenu = () => {
    $header.removeClass("active");
    $("body").removeClass("no-scroll");
  };

  // ハンバーガークリック
  if ($toggle.length) {
    $toggle.on("click", function() {
      $header.toggleClass("active");
      $("body").toggleClass("no-scroll");
    });
  }

  // (mask)クリック → 閉じる
  if ($mask.length) $mask.on("click", closeMenu);

  // （メニュー外側）クリック → 閉じる
  if ($hamburgerMenu.length) $hamburgerMenu.on("click", closeMenu);
  // ----------------------------------------------

  // スムーススクロール
  // ----------------------------------------------
  $('a[href^="#"]').click(function () {
    let href = $(this).attr("href");
    let target = $(href === "#" || href === "" ? "html" : href);

    if (!target.length) return false;

    let position = target.offset().top;

    $("html, body").animate({ scrollTop: position }, 600, "swing");

    return false;
  });
  // ----------------------------------------------

  // fade in
  // ----------------------------------------------

  function fadeInOnScroll() {
    $(".fadein").each(function () {
      const elmTop = $(this).offset().top;
      const scroll = $(window).scrollTop();
      const windowHeight = $(window).height();

      if ($(this).hasClass("active")) return;

      if (scroll > elmTop - windowHeight + 100) {
        $(this).addClass("active");
      }
    });
  }

  $(window).on("scroll load", function () {
    fadeInOnScroll();
  });
  // ----------------------------------------------
});
