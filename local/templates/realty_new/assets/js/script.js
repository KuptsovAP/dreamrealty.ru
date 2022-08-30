$(document).ready(function() {

    // Why We _2 - img aspect ratio changer
    if ($('.why-we_2').length) {
        $('.why-we_2 .wrapper .content .video').height(parseInt($('.why-we_2 .wrapper .content .video').width()) * .556);
    }

    // Инициализация главного слайдера на главной странице
    var mainSlick = $('.main-slider').slick({
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        vertical: true,
        verticalSwiping: true,
        afterChange: function(e) {
            console.log(e);
        }
    });

    $(document).on("afterChange", '.main-slider', function(e) {
        var a = $(this).slick('slickCurrentSlide');

        if (a == 9) {
            $(".mouse-scroll").addClass('--inverse');
        } else {
            $(".mouse-scroll").removeClass('--inverse');
        }

        setTimeout(function() { scrollCount = 0; }, 200);

    });

    $(".mouse-scroll").on("click", function(e) {
        if ($(this).hasClass('--inverse')) {
            $('.main-slider').slick('slickGoTo', 0);
        } else {
            $('.main-slider').slick('slickNext');
        }
    });

    var scrollCount = null;
    var scroll = null;
    $('.main-slider').on('wheel', (function(e) {
        e.preventDefault();

        clearTimeout(scroll);

        scroll = setTimeout(function() { scrollCount = 0; }, 200);
        if (scrollCount) return 0;
        scrollCount = 1;

        if (e.originalEvent.deltaY < 0) {
            $(this).slick('slickPrev');
        } else {
            $(this).slick('slickNext');
        }
    }));
    var dotsHeight = $('.main-slider .slick-dots').height();
    var dotsHeightRezult = parseInt($(window).height()) / 2 - parseInt(dotsHeight) / 2;
    $('.main-slider .slick-dots').css('top', dotsHeightRezult);

    // Добавление названий к точкам главного слайдера
    $('.main-slider .slide').each(function(index) {
        var that = $(this),
            title = that.data('title'),
            color = that.data('color');

        $(`.main-slider .slick-dots li button:eq(${index})`).html(`<span>${title}</span><div class="dot" style="border-color: ${color}"></div>`);
    });

    // Инициализация слайдеров в блоках Секреты
    $('.superagents-secrets .comparison_block .slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: false,
        vertical: true,
        asNavFor: $('.superagents-secrets .comparison_block .slider'),
        adaptiveHeight: true
    });
    $(document).on('click', '.superagents-secrets .comparison_block > button', function() {
        var that = $(this);
        that.closest('.comparison_block').find('.slider').slick('slickNext');
    });

    // Раскрытие списков - секретов
    $(document).on('click', '.superagents-secrets .secret .title', function() {
        var that = $(this),
            parentBlock = that.closest('.secret'),
            slidableBlock = parentBlock.find('.content');

        parentBlock.hasClass('openned') ?
            parentBlock.removeClass('openned') && slidableBlock.slideUp(600) :
            $('.superagents-secrets .secret').removeClass('openned') && $('.superagents-secrets .secret .content').slideUp(600) && parentBlock.addClass('openned') && slidableBlock.slideDown(600);

        setTimeout(() => { slidableBlock.find('.slider').slick('reinit'); }, 100)
    });

    // Смещение плейсхолжера в CTA
    $(document).on('focus', '.cta input[type="text"]', function() {
        var that = $(this),
            placeholder = that.siblings('span');

        placeholder.addClass('to-top');
    });
    $(document).on('blur', '.cta input[type="text"]', function() {
        var that = $(this),
            placeholder = that.siblings('span');

        if (that.val().length == 0) {
            placeholder.removeClass('to-top');
        }
    });

    // Инициализация красивых селектов
    if ($('select').length) {
        $('.selectBeaty-simple').select2({
            minimumResultsForSearch: Infinity,
            dropdownAutoWidth: true,
            width: 'auto'
        });

        $('.selectBeaty-multiply').select2({
            minimumResultsForSearch: Infinity,
            dropdownAutoWidth: true,
            multiple: true,
            width: 'auto'
        });
    }

    $(document).on('click', 'nav .burger', function() {
        $('.burger_menu').addClass('openned');
        $('body').addClass('blocked');
    });

    $(document).on('click', '.burger_menu .pop-up__close', function() {
        var that = $(this);
        $('.burger_menu').removeClass('openned');
    });

    // Перестановка значений в фильтре
    $(document).on('click', '.customDropdown', function() {
        var that = $(this);

        if (that.hasClass('openned')) {
            that.removeClass('openned');
        } else {
            that.addClass('openned');
        }
    });

    $(document).on('click', '.superagents-secrets_new .superagents-content .superagents-secrets_card', function() {
        var that = $(this),
            pop = that.data('pop');

        $('.pop-up').hasClass('openned') ?
            $('.pop-up').removeClass('openned') && $('body').removeClass('blocked') :
            $('.' + pop).addClass('openned') && $('body').addClass('blocked');
    });
    $(document).on('click', '.superagents-secret_pop-up .close', function() {
        $('.pop-up').removeClass('openned');
        $('body').removeClass('blocked');
    });

    $(document).on('mouseover', '.inner-header .bottom .right label.customDropdown', function() {
        var that = $(this),
            drop = that.find('.drop_block');

        drop.stop(true, false).fadeIn(300);
    });
    $(document).on('mouseout', '.inner-header .bottom .right label.customDropdown', function() {
        var that = $(this),
            drop = that.find('.drop_block');

        drop.stop(true, false).fadeOut(300);
    });

    // Инициализация слайдера на странице с описанием объекта
    $('.object-description_page_img-slider .slider').slick({
        infinite: true,
        autoplay: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: false,
        dots: false
    });
    $(document).on('click', '.object-description_page_img-slider .js-left', function() {
        var that = $(this),
            slider = that.closest('.object-description_page_img-slider .slider');

        $('.object-description_page_img-slider .slider').slick('slickPrev');
    });
    $(document).on('click', '.object-description_page_img-slider .js-right', function() {
        var that = $(this),
            slider = that.closest('.object-description_page_img-slider .slider');

        $('.object-description_page_img-slider .slider').slick('slickNext');
    });

    // Открытие полного описания
    $(document).on('click', '.open_hidden_block', function() {
        var that = $(this),
            buttonText = that.find('span'),
            hiddenBlock = that.siblings('.hidden_block');

        hiddenBlock.hasClass('openned') ?
            hiddenBlock.removeClass('openned').slideUp(200) && buttonText.text('Читать далее') :
            hiddenBlock.addClass('openned').slideDown(200) && buttonText.text('Скрыть описание');
    });






});

$(window).on('load', function() {
    // Продолжение линий блоке why-we_2
    $('.overflow_mini-line').width(parseInt($('.wrapper').css('margin-left')) + 56);
    $('.overflow_button-line').width(parseInt($('.wrapper').css('margin-left')) + 60);
    $('.overflow_button-line').height(parseInt($('.why-we_2 .wrapper .content .button button').outerHeight()));

    // Добавление соотношения сторон к изорбражениям в слайдере .object-description_page_img-slider
    $('.object-description_page_img-slider .slide').height(parseInt($('.object-description_page_img-slider .slide').width() * 0.8321));
});

$(window).scroll(function() {
    if ($(window).scrollTop() > 20) {
        $('nav.inner').addClass('scrolled');
    } else {
        $('nav.inner').removeClass('scrolled');
    }
});

$(window).on('resize', function() {
    if ($('.why-we_2').length) {
        $('.why-we_2 .wrapper .content .video').height(parseInt($('.why-we_2 .wrapper .content .video').width()) * .556);
    }
});