

jQuery(function ($) {
  // DOM is ready here
  //  // Mobile menu toggle
  setActiveClass($);

  $("#mobile-menu-open").on("click", function () {
    $(this)
    .add("header, #mobile-menu-close, .menu-header-menu-container, .menu-overlay")
    .addClass("menu-open");

    $(this)
    .add("header, #mobile-menu-close, .menu-header-menu-container, .menu-overlay")
    .removeClass("menu-close");
  });

  $("#mobile-menu-close").on('click', function () {
    $(this)
    .add("header, #mobile-menu-open, .menu-header-menu-container, .menu-overlay")
    .removeClass("menu-open");

    $(this)
    .add("header, #mobile-menu-open, .menu-header-menu-container, .menu-overlay")
    .addClass("menu-close");
  });
  
    const hero = document.querySelector(".hero_container");
    requestAnimationFrame(() => hero.classList.add("fade-in"));
  


});