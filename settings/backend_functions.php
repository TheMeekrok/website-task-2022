<?php
//Формат страницы
$page_format = '.php';

// Обрезка строки, которая не помещается в блок
function cut_string($string, $max_symbols) {
    if (strlen($string) > $max_symbols) {
        $string = substr($string, 0, $max_symbols).'...';
    }

    return $string;
}

// Обработка случая когда страница не будет найдена
function handle_result_for_page($result) {
    register_shutdown_function('not_found_shutdown'); 

    if (!$result) {
        http_response_code(404);
        die();
    }
    else {
        http_response_code(200);
    }
}

// Установка функции, которая будет вызываться по завершении скрипта
function not_found_shutdown() {
    $page_format = '.php';

    if (http_response_code() == '404') {
        require('not_found' . $page_format);
    }
}
?>