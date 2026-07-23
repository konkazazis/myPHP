<?php
declare(strict_types=1);

class SiteController
{
    public function home($posts): void
    {
        require __DIR__ . '/../views/home.php';
    }

    public function about(): void
    {
        echo "About page!";
    }
}
