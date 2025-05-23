<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'ReservaController::index');
$routes->post('/guardar', 'ReservaController::guardar');
