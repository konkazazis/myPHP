<?php
declare(strict_types=1);

require __DIR__ . '/../src/router.php';
require __DIR__ . '/../src/controller.php';

$router = new Router();
$router->add('GET', '/', [SiteController::class, 'home']);
$router->add('GET', '/about', [SiteController::class, 'about']);

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$router->dispatch($path);
