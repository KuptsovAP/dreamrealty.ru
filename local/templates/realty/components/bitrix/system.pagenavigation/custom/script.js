$(document).on('click', '.catalog_load', function () {

    var targetContainer = $('.section_products'),
        url = $('.catalog_load').attr('data-url');

    if (url !== undefined) {
        $.ajax({
            type: 'GET',
            url: url,
            dataType: 'html',
            success: function (data) {
                $('.paginations').html($(data).find('.paginations').html());
                var elements = $(data).find('a.section_product');
                var last = $(data).find('.section_product.--last')[0];
                targetContainer.append(elements);
                targetContainer.append(last);
            }
        })
    }

});