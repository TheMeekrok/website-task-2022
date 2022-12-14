$(document).ready(() => {
    let text;
    $('.user-input').on('input', function() {
        text = $(this).val();

        if (!validateText(text)) 
            $(this).addClass('__wrong-input');
        else 
           $(this).removeClass('__wrong-input');
    });
});

const validateText = (text) => {
    const disallowed = ['!', '@', '#', '$', ';', '%', '^', '&', '?', '*', '-', '+', '=', '[', ']', '{', '}', '\\', '|', '/'];
    const MIN_TEXT_LENGTH = 3;
    let response = true;

    if (text.length < MIN_TEXT_LENGTH)
        return false;

    disallowed.forEach(element => {
        if (text.includes(element)) 
            response = false;
    });

    return response;
}



