<?php

namespace Engine\DI;
class DI
{
    /**
     * @var array
     **/
    private $container = [];

    /**
     *Set conteiner
     * @param $key
     * @param $value
     * @return $this
     */
    public function set($key, $value)
    {
        $this->container[$key] = $value;
        return $this;
    }

    /**
     *Get container
     * @param $key
     * @return mixed
     */
    public function get($key)
    {
        return $this->has($key);
    }

    /**
     * Validate function
     * @param $key
     * @return bool
     */
    public function has($key)
    {
        return isset($this->container[$key]) ? $this->container[$key]:null;
    }
}
