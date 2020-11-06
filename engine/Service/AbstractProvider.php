<?php


namespace Engine\Service;


use Engine\DI\DI;

// Каждый сервис будет иметь provider, наследником AbstractProvider
// Получает все di,
abstract class AbstractProvider
{
    /**
     * @var \Engine\DI\DI
     */

    protected $di;

    function __construct($di)
    {
        $this->di = $di;
    }
    //
    abstract function init();
}