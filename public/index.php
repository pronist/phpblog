<?php

require_once dirname(__DIR__) . '/bootstrap/app.php';

switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        return index();
    default:
        http_response_code(404);
}
