<?php


namespace Engine;


use Engine\DI\DI;

/**
 * Class Controller
 * @package Engine
 */
abstract class Controller
{
    /**
     * Controller constructor.
     * @param $di DI
     */
    public function __construct($di)
    {
    }
}