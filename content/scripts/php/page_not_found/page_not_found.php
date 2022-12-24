<?php
$page_format = '.php';
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
function not_found_shutdown() {
    $page_format = '.php';

    if (http_response_code() == '404') {
        require('not_found' . $page_format);
    }
}
?>