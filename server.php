<?php
declare(strict_types=1);

$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

// If the request maps to a real file inside public/ (css, js, images...),
// let PHP's built-in server serve it directly.
if ($uri !== '/' && file_exists(__DIR__ . '/public' . $uri)) {
    return false;
}

// Otherwise, hand off to the front controller.
require __DIR__ . '/public/index.php';
