<?php

namespace Engine;

use Engine\Core\Router\Router;
use Engine\DI\DI;

/**
 * Class Cms
 * @package Engine
 */
class Cms
{
    /**
     * @var DI
     */
    private $di;
    /**
     * @var Router
     */
    public $router;

    /**
     * Cms constructor.
     * @param $di
     */
    public function __construct($di)
    {
        $this->di = $di;
        $this->router = $this->di->get('router');
    }

    /**
     * Run CMS.
     * @return mixed
     */
    public function run()
    {
//
        $this->router->add('home', '/', 'HomeController:index');
        $this->router->add('product', '/product/{id}', 'ProductController:index');
        dump($this->di);
    }
}