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


jQuery(function($){
    $("#personPhoneNumber").mask("+7(908)4502900");
    });