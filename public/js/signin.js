$('.tabs .tab').click(function () {
    if ($(this).hasClass('signin')) {
        $('.tabs .tab').removeClass('active');
        $(this).addClass('active');
        $('.info').hide();
        $('.signin-info').show();
    }
    if ($(this).hasClass('signup')) {
        $('.tabs .tab').removeClass('active');
        $(this).addClass('active');
        $('.info').hide();
        $('.signup-info').show();
    }
});