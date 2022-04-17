$(document).ready(function() {
    $('#toggle').click(function() {
        $('.container').stop().addClass('active');
    });

    $('#close').click(function() {
        $('.container').stop().removeClass('active');
    });

});