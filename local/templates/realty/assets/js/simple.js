window.addEventListener("DOMContentLoaded", function() {
    let block_title = document.querySelector('.section__content__subtitle');

    if(block_title) {
        let active_tab = document.querySelector('.tab_apartment_js');
        if(active_tab.classList.contains('active')) {
            let title = active_tab.textContent.trim()

            if ( title === 'В новостройке' ) {
                block_title.classList.add('active');
            }
        }

        let tab_buttons = document.getElementsByClassName('tab__button__js');

        for ( let i = 0; i < tab_buttons.length; i++ ) {
            tab_buttons[i].addEventListener('click', tab_events);
        }
    }

    let section_questions = document.getElementsByClassName('section__question');
    if(section_questions) {
        for (let i = 0; i < section_questions.length; i++) {
            section_questions[i].addEventListener('click', section_questions_events);
        }
    }

   /* let open__btn = document.getElementsByClassName('fit-content');
    let vacancy__feedback = document.querySelector('.vacancy__feedback');

    if(vacancy__feedback) {
        for (let i = 0; i < open__btn.length; i++) {
            open__btn[i].addEventListener('click', open__feedback__event);
        }
    }*/
});

function open__feedback__event() {
    event.preventDefault();
    let pop_up_block = document.getElementsByClassName('transparent_pop-up');

    for ( let i = 0; i < pop_up_block.length; i++ ) {
        if( this.id === pop_up_block[i].id ) {
            pop_up_block[i].classList.add('openned');
        }
    }
}

function section_questions_events(event) {
    event.preventDefault();
    let answer_block = document.getElementsByClassName('advantages-pop-up');
    for ( let i = 0; i < answer_block.length; i++ ) {
        if(this.id === answer_block[i].id) {
            answer_block[i].classList.add('openned');
        }
    }
}

function tab_events() {
    let block_title = document.querySelector('.section__content__subtitle');

    if(this.classList.contains('tab_apartment_js')) {
        block_title.classList.add('active');
    } else {
        block_title.classList.remove('active');
    }
}

