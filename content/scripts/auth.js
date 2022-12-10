$(document).ready(() => {
    init();
});

const fadeDuration = 500;

const init = () => {
    $('#modalWindow').hide();

    $('#modalWindowBackgr').click(() => { 
        $('#modalWindow').fadeOut(fadeDuration);
    });
    $('#modalWindowClose').click(() => { 
        $('#modalWindow').fadeOut(fadeDuration);
    });
    $('#authButton').click(() => { 
        $('#modalWindow').fadeIn();
    });
}



const toggleModalWindow = () => {
    $('#modalWindow').fadeToggle();
}

