<?php

namespace Engine;
class Cms
{
    /**
     * @var
     */
    private $di;

    /**
     * Cms constructor.
     * @param $di
     */
    public function __construct($di)
    {
        $this->di = $di;
    }

    /**
     * Run CMS.
     * @return mixed
     */
    public function run()
    {
        dump($this->di);

    }
}