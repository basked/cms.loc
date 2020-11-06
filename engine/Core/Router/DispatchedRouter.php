<?php


namespace Engine\Core\Router;


/**
 * Class DispatchedRouter
 * @package Engine\Core\Router
 */
class DispatchedRouter
{
    /**
     * @var
     */
    private $controller;
    /**
     * @var array
     */
    private $params;

    /**
     * DispatchedRouter constructor.
     * @param $controller
     * @param array $params
     */
    public function __construct($controller, $params=[])
{
    $this->controller=$controller;
    $this->params=$params;
}

    /**
     * @return mixed
     */
    public function getController()
    {
        return $this->controller;
    }

    /**
     * @return array
     */
    public function getParams(): array
    {
        return $this->params;
    }
}