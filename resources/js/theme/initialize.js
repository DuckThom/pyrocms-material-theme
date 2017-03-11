var $navigation;

function checkNavbarOffset () {
    var offsetTop = $navigation.offset().top;

    if (offsetTop < 5) {
        $navigation.addClass('navbar-top');
    } else {
        $navigation.removeClass('navbar-top');
    }
}

$(document).scroll(checkNavbarOffset);

$(function () {
    $navigation = $('#navigation');

    checkNavbarOffset();
});
