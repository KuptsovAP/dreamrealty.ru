$.fn.select2.amd.define('select2/i18n/ru', [], function() {
    // Russian
    return {
        errorLoading: function() {
            return 'Результат не может быть загружен.';
        },
        inputTooLong: function(args) {
            var overChars = args.input.length - args.maximum;
            var message = 'Пожалуйста, удалите ' + overChars + ' символ';
            if (overChars >= 2 && overChars <= 4) {
                message += 'а';
            } else if (overChars >= 5) {
                message += 'ов';
            }
            return message;
        },
        inputTooShort: function(args) {
            var remainingChars = args.minimum - args.input.length;

            var message = 'Пожалуйста, введите ' + remainingChars + ' или более символов';

            return message;
        },
        loadingMore: function() {
            return 'Загружаем ещё ресурсы…';
        },
        maximumSelected: function(args) {
            var message = 'Вы можете выбрать не более ' + args.maximum + ' пунктов';
            return message;
        },
        noResults: function() {
            return 'Ничего не найдено';
        },
        searching: function() {
            return 'Поиск…';
        }
    };
});

function addVideoRatio() {

}

function addPeopleRation() {
    $('.section__peoples .section__people .section__people_avatar').height($('.section__peoples .section__people .section__people_avatar').width());
}


$(document).ready(function() {

    $(document).on('click', "#white__block", function() {
        console.log($(this));
        $('.openned').removeClass('openned');
        $('#white__block, .video-pop-up').remove();
        $('body').removeClass('blocked');
    });

    $(window).resize(function() {
        addVideoRatio();
    });

    $(document).on('click', '.section__video-slider .section__video-slide, .section__advantage-pop-up_video', function() {
        var that = $(this),
            videoURL = that.data('video'),
            block = `<div class="video-pop-up openned">
                        <div class="wrapper">
                            <div class="block">
                                <svg class="icon">
                                    <use xlink:href="#Close"></use>
                                </svg>
                                <iframe class="js_video-ratio" src="${videoURL}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <div id="white__block"></div>`;

        $('body').append(block).addClass('blocked');
        addVideoRatio();
    });

    $(document).on('click', '.video-pop-up svg', function() {
        $('.video-pop-up').remove();
    });

    addVideoRatio();
    addPeopleRation();

    // Phone Mask Init
    $.fn.setCursorPosition = function(pos) {
        if ($(this).get(0).setSelectionRange) {
            $(this).get(0).setSelectionRange(pos, pos);
        } else if ($(this).get(0).createTextRange) {
            var range = $(this).get(0).createTextRange();
            range.collapse(true);
            range.moveEnd('character', pos);
            range.moveStart('character', pos);
            range.select();
        }
    };
    /*$("input.phone").click(function(){
        if ( $(this).val() == '+7 (___) ___-__-__' ) {
            $(this).setCursorPosition(4);
        }
    }).mask("+7 (999) 999-99-99");*/

    $('.section__content-slider:not(.--with-dots)').slick({
        autoplay: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: false,
        draggable: false,
        swipe: false,
        mobileFirst: true,
        adaptiveHeight: true,
        fade: true,
    });
    $('.section__content-slider.--with-dots').slick({
        autoplay: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: false,
        draggable: false,
        swipe: false,
        adaptiveHeight: true,
        mobileFirst: true,
        dots: true,
        fade: true,
    });

    if (window.location.hash.search('-')) {
        var hash = window.location.hash.split("-");
        if ($(hash[0]).length) {

            var obj = $(hash[0]);
            var destination = obj.offset().top;
            var index = parseInt(hash[1]) - 1;


            $('html, body').animate({ scrollTop: destination }, 0);

            obj.find('.section__content-tab').removeClass('active');
            obj.find('.section__content-slider').removeClass('active');

            obj.find('.section__content-tab').eq(index).addClass("active");
            obj.find('.section__content-slider').eq(index).addClass("active");

            console.log(index);
        }
    }

    if (window.location.hash != undefined) {
        if (window.location.hash.includes("advant_pop-up") || window.location.hash.includes("feedback_pop-up")) {
            $(window.location.hash).addClass('openned');
            $('body').addClass('blocked');
            white__block(true);

            history.pushState("", document.title, window.location.pathname + window.location.search);
        }
    }

    $(document).on('click', '.section .section__content-changer .section__content-tab', function() {
        var that = $(this),
            index = that.index(),
            top = that.closest('.section__content-changer').find('.section__content-tabs.top'),
            bottom = that.closest('.section__content-changer').find('.section__content-tabs.bottom'),
            topLength = top.find('.section__content-tab').length;

        if (that.closest('.section__content-tabs').hasClass('bottom')) {
            that.closest('.section__content-changer').children('.section__content-slider').slick('slickGoTo', index + topLength);
        } else {
            that.closest('.section__content-changer').children('.section__content-slider').slick('slickGoTo', index);
        }

        that.closest('.section__content-changer').find('.section__content-tabs').eq(0).find('.section__content-tab').removeClass('active');
        that.closest('.section__content-changer').find('.section__content-tabs.bottom').eq(0).find('.section__content-tab').removeClass('active');
        that.addClass('active');
    });

    $('select').select2({
        minimumResultsForSearch: Infinity,
        width: 'resolve',
        dropdownPosition: 'below',
        searchInputPlaceholder: function() {
            var obj = $(this);
            return (obj.attr('data-searchInputPlaceholder') != undefined) ? obj.attr('data-searchInputPlaceholder') : 'Поиск...';
        }
    });

    $('.section__video-slider').slick({
        autoplay: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: false,
        adaptiveHeight: false
    });



    $('.section__table-slider').slick({
        autoplay: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: false,
        swipe: false,
        adaptiveHeight: false
    });

    $('.section__feedback-slider').slick({
        autoplay: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: false,
        draggable: false,
        swipe: false,
        adaptiveHeight: true
    });

    $('.section__advantage-cards_slider').slick({
        autoplay: false,
        slidesToShow: 2,
        slidesToScroll: 2,
        arrows: false,
        dots: false,
        draggable: false,
        swipe: false,
        adaptiveHeight: true,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                }
            },
            {
                breakpoint: 765,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }
        ]
    });

    $('.section__dzen-slider').slick({
        autoplay: false,
        slidesToShow: 2,
        slidesToScroll: 2,
        arrows: false,
        dots: false,
        draggable: false,
        swipe: false,
        adaptiveHeight: true,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                }
            },
            {
                breakpoint: 765,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }
        ]
    });

    $('.section__text-slider_slider .slider').slick({
        autoplay: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: false,
        draggable: false,
        swipe: false,
        adaptiveHeight: true
    });

    $(document).on('click', '.js-prev', function() {
        var that = $(this);
        that.closest('section').find('.slider:not(.section__product-slider)').slick('slickPrev');
    });
    $(document).on('click', '.js-next', function() {
        var that = $(this);
        that.closest('section').find('.slider:not(.section__product-slider)').slick('slickNext');
    });

    $(document).on('click', '.js--open_pop-up', function() {

        if ($(this).attr('href') !== undefined) {
            $($(this).attr('href')).addClass('openned');
            $('body').addClass('blocked');
            $('body').append('<div id="white__block"></div>');
        } else {
            $('.transparent_pop-up.place-agent-choose').addClass('openned');
            $('body').addClass('blocked');
            $('body').append('<div id="white__block"></div>');
        }
    });

    $(document).on('click', '.js--transparent_pop-up', function() {

        if ($(this).attr('href') !== undefined) {
            $($(this).attr('href')).addClass('openned');
            $('body').addClass('blocked');
            $('body').append('<div id="white__block"></div>');
        } else {
            $('.transparent_pop-up.place-agent-choose').addClass('openned');
            $('body').addClass('blocked');
            $('body').append('<div id="white__block"></div>');
        }
    });

    $(document).on('click', '.js--transparent_pop-up1', function() {
        if ($(this).attr('href') !== undefined) {
            $($(this).attr('href')).addClass('openned');
            $('body').addClass('blocked');
            $('body').append('<div id="white__block"></div>');
        } else {
            $('.transparent_pop-up1.place-agent-choose').addClass('openned');
            $('body').addClass('blocked');
            $('body').append('<div id="white__block"></div>');
        }
    });
    $(document).on('click', '.js--transparent_pop-up2', function() {
        if ($(this).attr('href') !== undefined) {
            $($(this).attr('href')).addClass('openned');
            $('body').addClass('blocked');
            $('body').append('<div id="white__block"></div>');
        } else {
            $('.transparent_pop-up2.place-agent-choose').addClass('openned');
            $('body').addClass('blocked');
            $('body').append('<div id="white__block"></div>');
        }
    });
    $(document).on('click', '.pop-up__close', function() {
        $('.pop-up').removeClass('openned');
        $('body').removeClass('blocked');
        $('#white__block').remove();
    });
    $(document).on('click', '.pop-up__close_z-index', function() {
        $('.obespet-platezh, .obespet-platezh__form20k, .obespet-platezh__form30k').removeClass('openned');
        if ($('.obespet-platezh, .obespet-platezh__form20k, .obespet-platezh__form30k').hasClass("--full")) {
            $('#white__block').remove();
            $('body').removeClass('blocked');
        }
    });
    $(document).on('click', '.transparent_pop-up .pop-up__close', function() {
        $('.transparent_pop-up').removeClass('openned');
        $('body').removeClass('blocked');
        $('#white__block').remove();
    });
    $(document).on('click', '.article__pop-up .pop-up__close', function() {
        $('.article__pop-up').removeClass('openned');
        $('body').removeClass('blocked');
        $('#white__block').remove();
    });

    $('textarea').keyup(function(e) {
        e.target.style.height = 'auto'
        if (e.target.scrollHeight <= 69) {
            e.target.style['border-radius'] = "80px"
        }

        if (e.target.scrollHeight <= 105) {
            e.target.style.height = e.target.scrollHeight + 16 + "px"
            e.target.style['border-radius'] = "20px"
        } else {
            e.target.style.height = 105 + 16 + "px"
            e.target.style['border-radius'] = "20px"
        }
    });

    $('form').on('submit', function(e) {
        if (!$(this).hasClass('search') && !$(this).hasClass('no-js')) {
            /*    var formData = new FormData(this);
            for (var pair of formData.entries()) {
                console.log(pair[0] + ', ' + pair[1]);
            }
*/
            //     console.log($(this).serialize());
            var url = document.location.href;
            var data = $(this).serializeArray(); // convert form to array
            data.push({ name: "UF_URL", value: url });

            $.ajax({
                url: '/form.php',
                method: 'post',
                dataType: 'html',
                data: $.param(data),
                success: function(data) {
                    console.log(data);
                }
            });
            e.preventDefault();
            $('.pop-up, .transparent_pop-up, .place-agent-choose').removeClass('openned');
            $('#white__block').remove();

            $('body').append('<div id="white__block"></div>');
            setTimeout(function() {
                $('.done_pop-up').addClass('openned');
                $('.done_pop-up').css("z-index", "999999999999");
            }, 300)
            $('form').find("input, textarea").val("");
            setTimeout(function() {
                $('.done_pop-up').removeClass('openned');
                $('#white__block').remove();

                //  location.reload();
            }, 10000)
        }
    });

    function white__block(big) {
        $('#white__block').remove();
        if (big === true) {
            $('body').append(`<div id="white__block"><div class="overlay"></div></div>`);
            return;
        }
        $('body').append(`<div id="white__block"></div>`);
        return;
    }

    $('input[type="file"]').on('change', function() {
        var that = $(this)
        value = that.val();

        value = value.split("/").pop();

        that.closest('label').find('span').text(value);
    });




    $(document).on('click', '.section__advantage', function(e) {
        e.preventDefault();
        var that = $(this),
            href = that.attr('href');

        $(`.advantages-pop-up${href}`).addClass('openned');
        $('body').addClass('blocked');
        white__block(true);
    });


    $(document).on('click', '.js__open-hash_pop-up', function(e) {
        e.preventDefault();

        $($(this).attr('href')).addClass('openned');
        $('body').addClass('blocked');

        if ($(this).hasClass('section__question')) {
            white__block(true);
            return;
        }

        if ($($(this).attr('href')).hasClass('--full')) {
            white__block(false);
            return;
        }

        if (!$($(this).attr('href')).hasClass('obespet-platezh__form20k') && !$($(this).attr('href')).hasClass('obespet-platezh__form30k')) {
            if ($(this).closest('.section__histories').hasClass('section__histories')) {
                white__block(true);
                return;
            }

            white__block(false);
            return;
        }

        white__block(true);
        return;

    });

    $(document).on('click', '.nav__menu_burger', function() {
        $('.burger_menu').addClass('openned');
        $('body').addClass('blocked');
    });

    $(document).on('click', '.burger_menu .pop-up__close', function() {
        var that = $(this);
        $('.burger_menu').removeClass('openned');
        $('#white__block').remove();
    });

    $(document).on('click', '.obespet-platezh__link a', function(e) {
        e.preventDefault();
        $('.transparent_pop-up.obespet-platezh').addClass('openned');
        if ($('.transparent_pop-up.obespet-platezh').hasClass('--full')) {
            white__block(false);
            return;
        }
    });

    // Clear Inputs
    $(document).on('click', '.section__calc .js__clear-inputs', function() {
        $('.section__calc .section__calc_input input').val('').trigger('input');
        $('.section__calc .section__calc_input input').trigger('input');
    });

    $(document).on('input', '.section__calc.section__calc_1row.section__calc--sell .section__calc_input input', function() {
        var that = $(this),
            inputValue = that.val(),
            formatedInputValue = String(inputValue.replace(/[^0-9.]/g, '')).replace(/\B(?=(\d{3})+(?!\d))/g, " "),
            withoutPlaces = inputValue.replace(/\s+/g, ''),
            komissBlock = that.closest('.section__calc_input').find('.komiss span'),
            resultBlock = that.closest('.section__calc_input').find('.result span');

        that.val(formatedInputValue);

        if (withoutPlaces == 0) {
            komissBlock.text('2,0');
            if (parseInt(withoutPlaces) * 0.01 < 400000) {
                resultBlock.text('400 000');
            } else {
                resultBlock.text(String(parseInt(withoutPlaces * 0.01).toString().replace(/[^0-9.]/g, '')).replace(/\B(?=(\d{3})+(?!\d))/g, " "));
            }
        } else if (withoutPlaces < 8000000) {
            komissBlock.text('3,0');
            if (parseInt(withoutPlaces) * 0.03 < 150000) {
                resultBlock.text('150 000');
            } else {
                resultBlock.text(String(parseInt(withoutPlaces * 0.03).toString().replace(/[^0-9.]/g, '')).replace(/\B(?=(\d{3})+(?!\d))/g, " "))
            }
        } else if (withoutPlaces >= 8000000 && withoutPlaces < 15000000) {
            komissBlock.text('2,5');
            if (parseInt(withoutPlaces) * 0.025 < 250000) {
                resultBlock.text('250 000');
            } else {
                resultBlock.text(String(parseInt(withoutPlaces * 0.025).toString().replace(/[^0-9.]/g, '')).replace(/\B(?=(\d{3})+(?!\d))/g, " "))
            }
        } else if (withoutPlaces >= 15000000 && withoutPlaces < 40000000) {
            komissBlock.text('2');
            if (parseInt(withoutPlaces) * 0.02 < 400000) {
                resultBlock.text('400 000');
            } else {
                resultBlock.text(String(parseInt(withoutPlaces * 0.02).toString().replace(/[^0-9.]/g, '')).replace(/\B(?=(\d{3})+(?!\d))/g, " "))
            }
        } else if (parseInt(withoutPlaces) >= 40000000) {
            komissBlock.text('2');
            if (parseInt(withoutPlaces) * 0.02 < 840000) {
                resultBlock.text('840 000');
            } else {
                resultBlock.text(String(parseInt(withoutPlaces * 0.02).toString().replace(/[^0-9.]/g, '')).replace(/\B(?=(\d{3})+(?!\d))/g, " "))
            }
        }
    });

    $(document).on('input', '.section__calc.section__calc_1row.section__calc--buy .section__calc--buy--novostr .section__calc_input input', function() {
        var that = $(this),
            inputValue = that.val(),
            formatedInputValue = String(inputValue.replace(/[^0-9.]/g, '')).replace(/\B(?=(\d{3})+(?!\d))/g, " "),
            withoutPlaces = inputValue.replace(/\s+/g, ''),
            komissBlock = that.closest('.section__calc_input').find('.komiss span'),
            resultBlock = that.closest('.section__calc_input').find('.result span');

        that.val(formatedInputValue);

        if (withoutPlaces == 0) {
            komissBlock.text('2,5');
            if (parseInt(withoutPlaces) * 0.01 < 250000) {
                resultBlock.text('250 000');
            } else {
                resultBlock.text(String(parseInt(withoutPlaces * 0.01).toString().replace(/[^0-9.]/g, '')).replace(/\B(?=(\d{3})+(?!\d))/g, " "));
            }
        } else if (withoutPlaces < 8000000) {
            komissBlock.text('3,0');
            if (parseInt(withoutPlaces) * 0.03 < 160000) {
                resultBlock.text('160 000');
            } else {
                resultBlock.text(String(parseInt(withoutPlaces * 0.03).toString().replace(/[^0-9.]/g, '')).replace(/\B(?=(\d{3})+(?!\d))/g, " "));
            }
        } else if (withoutPlaces >= 8000000 && withoutPlaces < 15000000) {
            komissBlock.text('2,5');
            if (parseInt(withoutPlaces) * 0.025 < 250000) {
                resultBlock.text(String(parseInt(withoutPlaces * 0.025).toString().replace(/[^0-9.]/g, '')).replace(/\B(?=(\d{3})+(?!\d))/g, " "));
            } else {
                resultBlock.text('250 000');
            }
        } else if (withoutPlaces >= 15000000 && withoutPlaces < 40000000) {
            komissBlock.text('2');
            if (parseInt(withoutPlaces) * 0.02 < 500000) {
                resultBlock.text(String(parseInt(withoutPlaces * 0.02).toString().replace(/[^0-9.]/g, '')).replace(/\B(?=(\d{3})+(?!\d))/g, " "));
            } else {
                resultBlock.text('500 000');
            }
        } else if (withoutPlaces >= 40000000) {
            komissBlock.text('1,5');
            if (parseInt(withoutPlaces) * 0.015 < 1500000) {
                resultBlock.text(String(parseInt(withoutPlaces * 0.015).toString().replace(/[^0-9.]/g, '')).replace(/\B(?=(\d{3})+(?!\d))/g, " "));
            } else {
                resultBlock.text('1 500 000');
            }
        }
    });

    $(document).on('input', '.section__calc.section__calc_1row.section__calc--buy .section__calc--buy--vtor .section__calc_input input', function() {
        var that = $(this),
            inputValue = that.val(),
            formatedInputValue = String(inputValue.replace(/[^0-9.]/g, '')).replace(/\B(?=(\d{3})+(?!\d))/g, " "),
            withoutPlaces = inputValue.replace(/\s+/g, ''),
            komissBlock = that.closest('.section__calc_input').find('.komiss span'),
            resultBlock = that.closest('.section__calc_input').find('.result span');

        that.val(formatedInputValue);

        if (withoutPlaces == 0) {
            komissBlock.text('2,5');
            if (parseInt(withoutPlaces) * 0.01 < 250000) {
                resultBlock.text('250 000');
            } else {
                resultBlock.text(String(parseInt(withoutPlaces * 0.01).toString().replace(/[^0-9.]/g, '')).replace(/\B(?=(\d{3})+(?!\d))/g, " "));
            }
        } else if (withoutPlaces < 8000000) {
            komissBlock.text('3,0');
            if (parseInt(withoutPlaces) * 0.03 < 160000) {
                resultBlock.text('160 000');
            } else {
                resultBlock.text(String(parseInt(withoutPlaces * 0.03).toString().replace(/[^0-9.]/g, '')).replace(/\B(?=(\d{3})+(?!\d))/g, " "));
            }
        } else if (withoutPlaces >= 8000000 && withoutPlaces < 15000000) {
            komissBlock.text('2,5');
            resultBlock.text('250 000');
            if (parseInt(withoutPlaces) * 0.025 < 250000) {
                resultBlock.text(String(parseInt(withoutPlaces * 0.025).toString().replace(/[^0-9.]/g, '')).replace(/\B(?=(\d{3})+(?!\d))/g, " "));
            } else {
                resultBlock.text('250 000');
            }
        } else if (withoutPlaces >= 15000000 && withoutPlaces < 40000000) {
            komissBlock.text('2');
            if (parseInt(withoutPlaces) * 0.02 < 500000) {
                resultBlock.text(String(parseInt(withoutPlaces * 0.02).toString().replace(/[^0-9.]/g, '')).replace(/\B(?=(\d{3})+(?!\d))/g, " "));
            } else {
                resultBlock.text('500 000');
            }
        } else if (withoutPlaces >= 40000000) {
            komissBlock.text('2');
            if (parseInt(withoutPlaces) * 0.02 < 2000000) {
                resultBlock.text(String(parseInt(withoutPlaces * 0.02).toString().replace(/[^0-9.]/g, '')).replace(/\B(?=(\d{3})+(?!\d))/g, " "));
            } else {
                resultBlock.text('2 000 000');
            }
        }
    });

    var alternateInput1 = 0,
        alternateInput2 = 0;


    $(document).on('input', '.section__calc.section__calc_2row.section__calc--alternate .section__calc_input input', function() {
        var that = $(this),
            inputValue = that.val(),
            formatedInputValue = String(inputValue.replace(/[^0-9.]/g, '')).replace(/\B(?=(\d{3})+(?!\d))/g, " "),
            withoutPlaces = inputValue.replace(/\s+/g, ''),
            komissBlock = that.closest('.section__calc_input').find('.komiss span'),
            resultBlock = that.closest('.section__calc_input').find('.result span');

        that.val(formatedInputValue);

        if (that.hasClass('inputA')) {
            alternateInput1 = formatedInputValue.replace(/\s+/g, '');
        } else if (that.hasClass('inputB')) {
            alternateInput2 = formatedInputValue.replace(/\s+/g, '');
        }

        if (parseInt(alternateInput1) > parseInt(alternateInput2)) {
            if (alternateInput1 * 0.03 <= 300000) {
                resultBlock.text('300 000');
            } else {
                resultBlock.text(String(parseInt(alternateInput1 * 0.03).toString().replace(/[^0-9.]/g, '')).replace(/\B(?=(\d{3})+(?!\d))/g, " "));
            }
        } else if (parseInt(alternateInput2) > parseInt(alternateInput1)) {
            resultBlock.text('300 000');
            if (ursoprInput1 * 0.03 <= 300000) {
                resultBlock.text('300 000');
            } else {
                resultBlock.text(String(parseInt(alternateInput2 * 0.03).toString().replace(/[^0-9.]/g, '')).replace(/\B(?=(\d{3})+(?!\d))/g, " "));
            }
        }
    });

    $(document).on('input', '.section__calc .js__ursopr-calc1 input', function() {
        var that = $(this),
            inputValue = that.val(),
            formatedInputValue = String(inputValue.replace(/[^0-9.]/g, '')).replace(/\B(?=(\d{3})+(?!\d))/g, " "),
            withoutPlaces = inputValue.replace(/\s+/g, ''),
            komissBlock = that.closest('.js__ursopr-calc1').find('.komiss span'),
            resultBlock = that.closest('.js__ursopr-calc1').find('.result span');

        that.val(formatedInputValue);

        if (withoutPlaces == 0) {
            komissBlock.text('1,0');
            if (withoutPlaces * 0.01 <= 60000) {
                resultBlock.text('60 000');
            } else {
                resultBlock.text(String((withoutPlaces * 0.01).toString().replace(/[^0-9.]/g, '')).replace(/\B(?=(\d{3})+(?!\d))/g, " "));
            }
        } else if (withoutPlaces < 8000000) {
            komissBlock.text('1,0');
            if (withoutPlaces * 0.01 <= 60000) {
                resultBlock.text('60 000');
            } else {
                resultBlock.text(String((withoutPlaces * 0.01).toString().replace(/[^0-9.]/g, '')).replace(/\B(?=(\d{3})+(?!\d))/g, " "));
            }
        } else if (withoutPlaces >= 8000000 && withoutPlaces < 15000000) {
            komissBlock.text('1,0');
            if (withoutPlaces * 0.01 <= 120000) {
                resultBlock.text(String((withoutPlaces * 0.01).toString().replace(/[^0-9.]/g, '')).replace(/\B(?=(\d{3})+(?!\d))/g, " "));
            } else {
                resultBlock.text('120 000');
            }
        } else if (withoutPlaces >= 15000000 && withoutPlaces < 40000000) {
            komissBlock.text('1,0');
            if (withoutPlaces * 0.01 <= 300000) {
                resultBlock.text(String((withoutPlaces * 0.01).toString().replace(/[^0-9.]/g, '')).replace(/\B(?=(\d{3})+(?!\d))/g, " "));
            } else {
                resultBlock.text('300 000');
            }
        } else if (withoutPlaces >= 40000000) {
            komissBlock.text('1,0');
            if (withoutPlaces * 0.01 <= 1000000) {
                resultBlock.text(String((withoutPlaces * 0.01).toString().replace(/[^0-9.]/g, '')).replace(/\B(?=(\d{3})+(?!\d))/g, " "));
            } else {
                resultBlock.text('1 000 000');
            }
        }
    });

    $(document).on('input', '.section__calc .js__ursopr-calc2 input', function() {
        var that = $(this),
            inputValue = that.val(),
            formatedInputValue = String(inputValue.replace(/[^0-9.]/g, '')).replace(/\B(?=(\d{3})+(?!\d))/g, " "),
            withoutPlaces = inputValue.replace(/\s+/g, ''),
            komissBlock = that.closest('.js__ursopr-calc2').find('.komiss span'),
            resultBlock = that.closest('.js__ursopr-calc2').find('.result span');

        that.val(formatedInputValue);

        if (withoutPlaces * 0.01 <= 100000) {
            resultBlock.text('100 000');
        } else {
            resultBlock.text(String((withoutPlaces * 0.01).toString().replace(/[^0-9.]/g, '')).replace(/\B(?=(\d{3})+(?!\d))/g, " "));
        }
    });

    var ursoprInput1 = 0,
        ursoprInput2 = 0;


    $(document).on('input', '.section__calc .js__ursopr-calc3 input', function() {
        var that = $(this),
            inputValue = that.val(),
            formatedInputValue = String(inputValue.replace(/[^0-9.]/g, '')).replace(/\B(?=(\d{3})+(?!\d))/g, " "),
            withoutPlaces = inputValue.replace(/\s+/g, ''),
            komissBlock = that.closest('.js__ursopr-calc3').find('.komiss span'),
            resultBlock = that.closest('.js__ursopr-calc3').find('.result span');

        that.val(formatedInputValue);

        if (that.hasClass('inputA')) {
            ursoprInput1 = formatedInputValue.replace(/\s+/g, '');
        } else if (that.hasClass('inputB')) {
            ursoprInput2 = formatedInputValue.replace(/\s+/g, '');
        }

        if (parseInt(ursoprInput1) > parseInt(ursoprInput2)) {
            if (ursoprInput1 * 0.01 <= 100000) {
                resultBlock.text('100 000');
            } else {
                resultBlock.text(String(parseInt(ursoprInput1 * 0.01).toString().replace(/[^0-9.]/g, '')).replace(/\B(?=(\d{3})+(?!\d))/g, " "));
            }
        } else if (parseInt(ursoprInput2) > parseInt(ursoprInput1)) {
            if (ursoprInput2 * 0.01 <= 100000) {
                resultBlock.text('100 000');
            } else {
                resultBlock.text(String(parseInt(ursoprInput2 * 0.01).toString().replace(/[^0-9.]/g, '')).replace(/\B(?=(\d{3})+(?!\d))/g, " "));
            }
        }
    });

    $("a.js__pop_up_smoothScroll").click(function() {
        var elementClick = $(this).attr("href");
        var destination = $(elementClick).offset().top;
        $($(this).attr("data-id")).animate({ scrollTop: destination }, 600);
        return false;
    });

    $("a.js__smoothScroll").click(function() {
        var elementClick = $(this).attr("href");
        var destination = $(elementClick).offset().top;
        $('html, body').animate({ scrollTop: destination }, 600);
        return false;
    });


    $(document).on('click', '.select2', function() {
        var that = $(this),
            select = that.siblings('select'),
            dropdown = $('.select2-dropdown');

        if (select.hasClass('--red')) {
            dropdown.addClass('--red');
        } else if (select.hasClass('--green')) {
            dropdown.addClass('--green');
        } else if (select.hasClass('--darkViolet')) {
            dropdown.addClass('--darkViolet');
        } else if (select.hasClass('--lightBlue') || select.hasClass('--lightenBlue')) {
            dropdown.addClass('--lightBlue');
        } else if (select.hasClass('--blue')) {
            dropdown.addClass('--blue');
        } else if (select.hasClass('--lightPink')) {
            dropdown.addClass('--lightPink');
        }
    });


    setTimeout(function() {
        var localtionHash = window.location.hash;
        $(localtionHash).trigger('click');
    }, 1000)



});

var onceFeedbackCounter = 0;

function commaSeparateNumber(val) {
    while (/(\d+)(\d{3})/.test(val.toString())) {
        val = val.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1 ");
    }
    return val;
}
$(window).scroll(function() {

    // Scrollable Nav Bar
    if ($(window).scrollTop() > 20) {
        $('nav').addClass('scrolled');
    } else {
        $('nav').removeClass('scrolled');
    }

    if ($(window).scrollTop() >= 200 && $(window).scrollTop() <= 1000 && onceFeedbackCounter == 0) {
        $({ someValue: 0 }).animate({ someValue: $('#feedbackCounter').data('feeds') }, {
            duration: 1500,
            easing: 'swing',
            step: function() {

                $('#feedbackCounter').text(commaSeparateNumber(Math.round(this.someValue)));
            }
        });


        onceFeedbackCounter = 1;
    }

    if ($(window).scrollTop() >= 1000 && onceFeedbackCounter != 0) {
        onceFeedbackCounter = 0;
    }

});

let playingNow = false
let currentTime = "00:00:00"
let currentTimeFormat = 'HH:mm:ss'
let players = $('.section__podcast')

$(document).ready(function() {
    if (players.length) {
        players.each(function(i) {
            let player = $(this)
            let audio = player.find('audio')
            let name = player.find('.section__podcast_name')
            let timeline = player.find('.timeline')
            let playButton = player.find('.js_play-pause')
            let audioInterval = null

            let icons = ['/bitrix/templates/realty/assets/svg/pause.svg', '/bitrix/templates/realty/assets/svg/Audio--Play.svg']
            player.find('.allTime').html(moment(audio[0].duration * 1000).utc().format(currentTimeFormat))

            player.find('.js_play-pause, .section__podcast_icon').click(function() {
                var obj = player.find('.js_play-pause');
                if (audio[0].paused == true) {

                    if (playingNow != false) {
                        $('.section__podcast_audio-tag').trigger('pause')
                        $('.js_play-pause').attr('src', icons[1])
                        playingNow = false
                    }



                    obj.attr('src', icons[0])
                    playingNow = true
                    audio.trigger('play')

                    audioInterval = setInterval(function() {
                        player.find('.curNumTime').text(moment(audio[0].currentTime * 1000).utc().format(currentTimeFormat))
                        player.find('.currentTime').css('width', audio[0].currentTime / audio[0].duration * 100 + '%')
                        currentTime = moment(audio[0].currentTime * 1000).utc().format(currentTimeFormat)
                    }, 1000);

                } else {
                    audio.trigger('pause')
                    playingNow = false
                    obj.attr('src', icons[1])
                    clearInterval(audioInterval)
                }
            })

            var _currentTime = timeline.find('.currentTime')
            timeline.mousemove(function(e) {
                _currentTime.css('width', (e.offsetX / $(this).width() * 100) + '%')
            })

            timeline.mouseleave(function(e) {
                _currentTime.css('width', audio[0].currentTime / audio[0].duration * 100 + '%')
            })

            timeline.click(function(e) {
                var offset = $(this).offset()
                var currentTimeLine = timeline.find('.currentTime')
                var timelineWidthPercent = (e.clientX - offset.left) / timeline.width() * 100
                var fullAudioTimePercent = audio[0].duration / 100 * timelineWidthPercent

                currentTimeLine.css('width', timelineWidthPercent + '%')

                audio[0].currentTime = parseInt(fullAudioTimePercent);

                audio[0].onended = function() {
                    currentTimeLine.css('width', 0 + '%');
                    $(this).siblings('img').attr('src', $(this).siblings('img').data('play'));
                    $(this).find('.curNumTime').text('00:00');
                    clearInterval(audioInterval);
                }

                $(this).find('.curNumTime').text(moment(audio2.currentTime * 1000).utc().format('HH:mm'));
            })
        })
    }

    $(".section__question_filter-item").on("click", function() {
        var issue = $(this).attr("href").replace("#", "")

        console.log(issue)

        if (issue != "all") {
            $(`[data-issue]`).hide()
            $(`[data-issue=${issue}]`).show()

            $(`.section__question_filter-item.active`).removeClass("active")
            $(this).addClass("active")
        } else {
            $(`[data-issue]`).show()
            $(`.section__question_filter-item.active`).removeClass("active")
            $(`.section__question_filter-item.--all`).addClass("active")
        }
    })
})