<?php


namespace Engine\Core\Router;


/**
 * Class Router
 * @package Engine\Core\Router
 */
class Router
{
    /**
     * @var
     */
    private $routes = [];
    /**
     * @var
     */
    private $host;

    private $dispatcher;

    /**
     * Router constructor.
     * @param $host -- подтягиваем из config
     */
    public function __construct($host)
    {
        $this->host = $host;
    }

    /**
     * Add route
     * @param $key
     * @param $pattern
     * @param $controller
     * @param string $method
     */
    public function add($key, $pattern, $controller, $method = 'GET')
    {
        $this->routes[$key] =
            [
                'pattern' => $pattern,
                'controller' => $controller,
                'method' => $method,
            ];
    }

    public function dispatch($method, $uri)
    {

    }

    public function getDispatch()
    {
        if ($this->dispatcher . is_null()) {

        }
        return $this->dispatcher;
    }

}