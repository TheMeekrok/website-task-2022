$(document).ready(() => {
    $('#modalWindow').removeClass('disabled');

    const fadeDuration = 500;

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
});
