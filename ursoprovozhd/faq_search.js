function get_result (){
    //очищаем результаты поиска
    $('#search_result').html('');
    //пока не получили результаты поиска - отобразим прелоадер
    $('#search_result').append('<div><img width="150" src="/search/preloader.GIF"></div>');
    $.ajax({
        type: "POST",
        url: "/search/ajax_search.php",
        data: "q="+q,
        dataType: 'json',
        success: function(json){
            //очистим прелоадер
            $('#search_result').html('');
            $('#search_result').append('<div class="live-search"></div>');
            //добавляем каждый элемент массива json внутрь div-ника с class="live-search" (вёрстку можете использовать свою)
            $.each(json, function(index, element) {
                $('#search_result').find('.live-search').append('<a href="'+element.URL+'" class="live-search__item"><span class="live-search__item-inner"><span class="live-search__item-name"><span class="live-search__item-hl">'+element.TITLE+'</span></span>'+element.BODY_FORMATED+'</span></a>');
                //console.log (element.BODY_FORMATED);
            });
            //стилизуем скроллинг
            $('.live-search').mCustomScrollbar({
                scrollInertia: 500
            });
        }
    });
}
var timer = 0;
var q = '';
$( document ).ready(function() {
    $('#q').keyup(function() {
        q = this.value; 
        clearTimeout(timer);
        timer = setTimeout(get_result, 1000);
    }); 
    $('#reset_live_search').click(function() {
        $('#search_result').html('');
    });
});