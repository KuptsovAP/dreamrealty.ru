$(document).ready(function () {
    $('body').on('click', '.section_product_footer button', function (e) {
        e.preventDefault();
        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
            setCookie(elem.dataset.itemId, '0', 7);
        } else {
            $(this).addClass('active');
            setCookie(elem.dataset.itemId, '1', 7);

        }
        return false;
    });

    $('body').on('click', '.section_products .share', function (e) {
        e.preventDefault();
        return false;
    });

    $('body').on('click', '.section_product', function (e) {
        console.log(e.target);
        if ($(e.target).hasClass('slick-active')) {
            if(!$(e.target).hasClass('slick-slide')) {
                return false;
            }
        }
    });
    
    $('body').on('click', '.changeTemplate .section__content-tab', function (e) {
        e.preventDefault();
        $('.changeTemplate .section__content-tab').removeClass('active');
        $(this).addClass('active');
        var template = $(this).data('t');
        $.ajax({
            type: 'GET',
            url: window.location.origin + window.location.pathname + '?template=' + template,
            dataType: 'html',
            success: function(data){
                $('.slider-objects').replaceWith($(data).find('.slider-objects'));
                if(template == 'map') {
                    initGoogleMap();
                }
            }
        })
        return false;
    })
});