<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Engine\Cms;
use Engine\DI\DI;
use Engine\Service\Database\Provider;
try {
    // dependency injection
    $di = new DI();
    $services = require __DIR__ . '/Config/Service.php';
    foreach ($services as $service) {
        // записываем в провайдер все доступные сервисы
         $provider = new $service($di);
        $provider->init();
    }

    // create and run Cms
    $cms = new Cms($di);
    $cms->run();
} catch (\ErrorException $e) {
    echo $e->getMessage();
}