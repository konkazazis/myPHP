<?php
declare(strict_types=1);

require __DIR__ . '/../src/router.php';
require __DIR__ . '/../src/controller.php';
require __DIR__ . '/../src/database.php';

$config =require __DIR__ . '/../config.php';

$db = new Database($config['database']);
$posts = $db->query('select * from posts')->fetchAll();
extract($posts);

$router = new Router();
$router->add('GET', '/', [SiteController::class, 'home'], [$posts]);
$router->add('GET', '/about', [SiteController::class, 'about']);

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$router->dispatch($path);
