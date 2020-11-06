<?php


namespace Engine\Core\Router;


/**
 * Class UrlDispatcher
 * @package Engine\Core\Router
 */
class UrlDispatcher
{
    /**
     * @var array
     */
    private $methods = [
        'GET',
        'POST',
    ];
    /**
     * @var array
     */
    private $routes =
        [
            'GET' => [],
            'POST' => [],
        ];
    /**
     * @var array
     */
    private $patterns =
        [
            'int' => '[0-9]+',
            'str' => '[a-zA-Z\.\-_%]+',
            'any' => '[a-zA-Z0-9\.\-_%]+',
        ];

    /**
     * Добавить паттерн
     * @param $key
     * @param $pattern
     */
    public function addPattern($key, $pattern)
    {
        $this->patterns[$key] = $pattern;
    }

    /**
     * @param $method
     * @param $uri
     * @return DispatchedRouter
     */
    public function dispatch($method, $uri)
    {
        $routes = $this->routes(strtoupper($method));
        // есть ли ключ в массиве routes возвращаем его из массива
        if (array_key_exists($uri, $this->routes)) {
            return new DispatchedRouter($routes[$uri]);
        }
    }

    /**
     * Возвращаем метод если есть в массиве
     * @param $method
     * @return array|mixed
     */
    private function routes($method)
    {
        return isset($this->routes[$method]) ? $this->routes[$method] : [];
    }
}