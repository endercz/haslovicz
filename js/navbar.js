$(function () {
    $.get("./navbar.html").done(function (data) {
        $('#nav_placeholder').replaceWith(data);
    });
});

