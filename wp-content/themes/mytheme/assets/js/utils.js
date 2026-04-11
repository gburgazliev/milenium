
function setActiveClass($) {
    let location = window.location.pathname.split('milenium/')
    location = location[location.length - 1];
    location = location.substring(0, location.length - 1);

   $('#menu-header-menu').children().map(function () {
        const currentElement = $(this);
        currentElement.removeClass('active');

        if (location === '') {
            if (currentElement.text() === 'Home') {
                currentElement.addClass('active');
            }
        }

        if (location === currentElement.text().toLowerCase()) {
            currentElement.addClass('active');
        }
   });
}