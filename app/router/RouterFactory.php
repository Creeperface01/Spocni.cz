<?php

namespace App;

use Nette;
use Nette\Application\Routers\Route;
use Nette\Application\Routers\RouteList;


final class RouterFactory {
    use Nette\StaticClass;

    /**
     * @return Nette\Application\IRouter
     */
    public static function createRouter() {
        $router = new RouteList;
        $router[] = new Route('', 'Homepage:default');
        $router[] = new Route('[<locale=cs cs|en>/]detail/<city>', 'Detail:default');
        $router[] = new Route('[<locale=cs cs|en>/]<presenter>/<action>', 'Homepage:default');
        return $router;
    }
}
