<?php
class Router {
    private $routes = [];
    public function get($route, $action) {
        $this->routes[$route] = $action;
    }
    public function dispatch() {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        if (isset($this->routes[$uri])) {
            list($controller, $method) = explode('@', $this->routes[$uri]);
            require_once "../app/Controllers/$controller.php";
            $controllerInstance = new $controller;
            call_user_func([$controllerInstance, $method]);
        } else {
            echo "404 Not Found";
        }
    }
}