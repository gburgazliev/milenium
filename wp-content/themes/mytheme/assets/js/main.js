jQuery(function ($) {
  // DOM is ready here
  //  // Mobile menu toggle
  $("#mobile-menu-toggle").on("click", function () {
    const header = $('header');

    $(this).toggleClass("menu-open");
    header.toggleClass("menu-open");

  
    $(".nav-toggle").addClass("menu-open");
    $(".menu-header-menu-container").toggleClass("menu-open");
    $(".menu-overlay").toggleClass("menu-open");
  });
});
