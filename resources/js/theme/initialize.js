var $navigation;

function checkNavbarOffset () {
    var offsetTop = $navigation.scrollTop();

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
