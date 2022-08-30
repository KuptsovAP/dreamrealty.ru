function ajaxUpdateAgent(elem) {
    let filterLink = "";
    let url = window.location.pathname;

    let sliderContainer = $('.'+elem);
    let slider = $('.'+elem).find('.slider_content_block');

    /*Получаем фильтры и сортировки*/
    let filterOkrug = $('.'+elem).find('.okrug_select').find(":selected");
    let filterSorting = $('.'+elem).find('.block_sort_select').find(":selected");

    if(filterOkrug.length > 0) {
        $(filterOkrug ).each(function( index ) {
            if(filterOkrug.length == index+1) {
                filterLink += filterOkrug[index].value;
            }else {
                filterLink += filterOkrug[index].value+",";
            }
        });

        filterLink = "&filter_okrug="+filterLink;
    }

    if(filterSorting.length > 0) {
        $(filterSorting ).each(function( index ) {
            filterLink += "&"+filterSorting[index].value;
        });
    }
    /*Получаем фильтры и сортировки*/

    filterLink = "?"+filterLink;
    let urlGet = url+filterLink;


    jQuery.ajax({
        url: urlGet,
        type: "GET",
        success: function (result) {
            let resultSlider = $(result).find('.'+elem).find('.slider_content_block')

            //Удаляем старые блоки
            slider.remove();

            //Добавляем новые блоки
            sliderContainer.append(resultSlider);

            addPeopleRation();
        }
    });
}


function ajaxUpdateBroker(elem) {
    let sliderContainer = $('.slider_broker_block_wrap');
    let slider = $('.slider_broker_block');
    let url = window.location.pathname;
    let urlGet = url+elem;

    jQuery.ajax({
        url: urlGet,
        type: "GET",
        success: function (result) {
            let resultSlider = $(result).find('.slider_broker_block')

            //Удаляем старые блоки
            slider.remove();

            //Добавляем новые блоки
            sliderContainer.append(resultSlider);

            addPeopleRation();
        }
    });
}

function ajaxUpdateExpert(elem) {
    let sliderContainer = $('.slider_expert_block_wrap');
    let slider = $('.slider_expert_block');
    let url = window.location.pathname;
    let urlGet = url+elem;

    jQuery.ajax({
        url: urlGet,
        type: "GET",
        success: function (result) {
            let resultSlider = $(result).find('.slider_expert_block')

            //Удаляем старые блоки
            slider.remove();

            //Добавляем новые блоки
            sliderContainer.append(resultSlider);

            addPeopleRation();
        }
    });
}

function ajaxUpdateExpert2(elem) {
    let sliderContainer = $('.slider_expert2_block_wrap');
    let slider = $('.slider_expert2_block');
    let url = window.location.pathname;
    let urlGet = url+elem;

    jQuery.ajax({
        url: urlGet,
        type: "GET",
        success: function (result) {
            let resultSlider = $(result).find('.slider_expert2_block')

            //Удаляем старые блоки
            slider.remove();

            //Добавляем новые блоки
            sliderContainer.append(resultSlider);

            addPeopleRation();
        }
    });
}

function ajaxUpdateMarket(elem) {
    let sliderContainer = $('.slider_market_block_wrap');
    let slider = $('.slider_market_block');
    let url = window.location.pathname;
    let urlGet = url+elem;

    jQuery.ajax({
        url: urlGet,
        type: "GET",
        success: function (result) {
            let resultSlider = $(result).find('.slider_market_block')

            //Удаляем старые блоки
            slider.remove();

            //Добавляем новые блоки
            sliderContainer.append(resultSlider);

            addPeopleRation();
        }
    });
}

function ajaxUpdateOperator(elem) {
    let sliderContainer = $('.slider_operator_block_wrap');
    let slider = $('.slider_operator_block');
    let url = window.location.pathname;
    let urlGet = url+elem;

    jQuery.ajax({
        url: urlGet,
        type: "GET",
        success: function (result) {
            let resultSlider = $(result).find('.slider_operator_block')

            //Удаляем старые блоки
            slider.remove();

            //Добавляем новые блоки
            sliderContainer.append(resultSlider);

            addPeopleRation();
        }
    });
}


$(document).ready(function(){
    $(document).on('click', '.load_more', function(){

        var targetContainer = $('.container_reviews'),  //  Контейнер, в котором хранятся элементы
            containerNavigation = $('.container_navigation'),  //  Контейнер, в котором хранится навигация
            containerPopups = $('.feedback_popups_wrap'),  //  Контейнер, в котором хранится навигация
            url =  $('.load_more').attr('data-url');    //  URL, из которого будем брать элементы

        if (url !== undefined) {
            $.ajax({
                type: 'GET',
                url: url,
                dataType: 'html',
                success: function(data){

                    //  Удаляем старую навигацию
                    $('.load_more').remove();

                    var elements = $(data).find('.container_review'),  //  Ищем элементы
                        pagination = $(data).find('.load_more'),//  Ищем навигацию
                        popups = $(data).find('.feedback_popups');//  Ищем попапы

                    targetContainer.append(elements);   //  Добавляем посты в конец контейнера
                    containerNavigation.append(pagination); //  добавляем навигацию следом
                    containerPopups.append(popups);
                }
            })
        }

    });

});