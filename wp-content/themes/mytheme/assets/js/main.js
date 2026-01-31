jQuery(function ($) {
  // DOM is ready here
  //  // Mobile menu toggle
  $("#mobile-menu-toggle").on("click", function () {
    const header = $('header');

    $(this).toggleClass("menu-open");
    header.toggleClass("menu-open");

  

    $(".main-nav-wrapper").toggleClass("menu-open");
    $(".menu-overlay").toggleClass("menu-open");
  });
});
