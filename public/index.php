<?php

use App\Router;
use App\Request;

$router = Router::load('routes.php');

require $router->direct(Request::uri(), Request::method());
