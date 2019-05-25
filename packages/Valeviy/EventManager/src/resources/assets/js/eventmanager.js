$(document).ready(function () {
    $('.overlay').on('click', function () {
        $('#sidebar').toggleClass('active');
        $('.overlay').removeClass('active');
    });

    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
        $('.overlay').toggleClass('active');
    });
});