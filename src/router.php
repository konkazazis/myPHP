<?php
declare(strict_types=1);

class Router {
    private array $routes = [];

    // Add optional $params argument (default to empty array)
    public function add(string $method, string $path, array $controller, array $params = []): void
    {
        $path = $this->normalizePath($path);

        $this->routes[] = [
            'path' => $path,
            'method' => strtoupper($method),
            'controller' => $controller,
            'params' => $params, // Store the parameters
        ];
    }

    private function normalizePath(string $path): string
    {
        $path = trim($path, '/');
        $path = "/{$path}/";
        $path = preg_replace('#[/]{2,}#', '/', $path);
        return $path;
    }

    public function dispatch(string $path): void
    {
        $path = $this->normalizePath($path);
        $method = strtoupper($_SERVER['REQUEST_METHOD']);

        foreach ($this->routes as $route) {
            if (!preg_match("#^{$route['path']}$#", $path) || $route['method'] !== $method) {
                continue;
            }

            [$class, $function] = $route['controller'];
            $controllerInstance = new $class;
            
            $controllerInstance->{$function}(...$route['params']);
            
            return;
        }

        http_response_code(404);
        echo '404 Not Found';
    }
}   