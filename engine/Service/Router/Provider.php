<?php


namespace Engine\Service\Router;


use Engine\Service\AbstractProvider;
use Engine\Core\Router\Router;

/**
 * Class Provider
 * @package Engine\Service\Router
 */
class Provider extends AbstractProvider
{
    /**
     * @var string
     */
    public $serviceName = 'router';

    /**
     *
     */
    function init()
    {
        $router = new Router('http://cms.loc/');
        // передаем $router, как зависимость
          $this->di->set($this->serviceName, $router);

    }
}