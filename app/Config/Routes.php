<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'EventoController::index');
$routes->get('/create', 'EventoController::create');
$routes->Post('/store', 'EventoController::store');
