<?php

require 'vendor/autoload.php';

require 'bootstrap.php';

$router = new Router();

require 'router/routes.php';

$uri = Request::uri();

$router = Router::loadRoutes('routes.php');

require $router->direct($uri, Request::method());
